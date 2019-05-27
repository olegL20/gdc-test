<?php

namespace App\Http\Controllers;

use App\Rate;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function rates()
    {
        return view('admin.rates.list',
            [
                'rates' => Rate::all(),
            ]);
    }

    public function createRate(Request $request)
    {
        Rate::create($request->all());
        return back();
    }

    public function investRate(Rate $rate, Request $request)
    {
        $user = $request->user();
        if ($user->balance->getRealBalance() < $rate->min_amount) {
            return back()->withErrors([
                'amount' => 'На балансе недостаточно средств'
            ]);
        }
        $user = $request->user();

        return view('rates.invest', [
            'rate' => $rate,
            'user' => $user,
        ]);
    }

    public function invest(Rate $rate, Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        if ($user->balance->getRealBalance() < $rate->min_amount) {
            return back()->withErrors([
                'amount' => 'На балансе недостаточно средств',
            ]);
        }

        $user->balance->locked_amount = $user->balance->locked_amount + $request->amount;
        $user->save();
        $rate->user()->attach($user, [
            'invested_amount' => $request->amount,
            'created_at' => Carbon::now(),
        ]);

        $transcation = new Transaction();
        $transcation->type = Transaction::TYPE_INVEST . ' into "' . $rate->title . '"';
        $transcation->amount = $request->amount;
        $transcation->balance = $user->balance->getRealBalance();
        $transcation->user()->associate($user);
        $transcation->save();

        return redirect()->route('cabinet');
    }

    public function calculate(Request $request)
    {
        $rate = Rate::find($request->id);
        $perDay = $request->amount * $rate->percent_per_day/100;
        $profit = $rate->percent_per_day * $request->amount;
        $total = $profit + $request->amount;

        return response()->json([
            'perDay' => number_format($perDay, 2),
            'profit' => number_format($profit, 2),
            'total' => number_format($total, 2),
        ]);
    }

    public function getMin(Request $request)
    {
        if ($request->get('cur') === 'RUB') {
            return Rate::find($request->id)->min_amount;
        }

        return Rate::find($request->id)->getAmountForUSD();
    }
}
