<?php

namespace App\Http\Controllers;

use App\Rate;
use App\ReferralLink;
use App\User;
use Illuminate\Http\Request;
use zvook\Skrill\Components\SkrillException;
use zvook\Skrill\Forms\QuickCheckoutForm;
use zvook\Skrill\Models\QuickCheckout;
use zvook\Skrill\Models\SkrillStatusResponse;
use Carbon\Carbon;

class CabinetController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user $user */
        $user = $request->user();
        $link = $user->referralLink ? $user->referralLink->code : null;
        $cashbackStart = $user->cashback ? new Carbon($user->cashback->created_at) : Carbon::now();
        $days = $cashbackStart->diffInDays(Carbon::now());
        $cashbackValue = $user->cashback ? $user->cashback->value : 0;
        $cashback = $user->cashback ? $user->cashback->value * $user->cashback->percent * $days : 0;
        $cashbackInTheEnd = $user->cashback ? $user->cashback->value * $user->cashback->percent * 100 : 0;
        $cashbackForOneDay = $user->cashback ? $user->cashback->value * $user->cashback->percent * 1 : 0;
        $incomeDate = (new Carbon(Carbon::now()))->addDays(86);

        return view('cabinet.cabinet')
            ->with('user', $user)
            ->with('cashback', number_format($cashback, 2, ',', ' '). ' RUB')
            ->with('cashbackInTheEnd', number_format($cashbackInTheEnd, 2, ',', ' '). ' RUB')
            ->with('cashbackForOneDay', number_format($cashbackForOneDay, 2, ',', ' '). ' RUB')
            ->with('incomeDate', $incomeDate->format('d-m-Y'))
            ->with('cashbackStart', $cashbackStart->format('d-m-Y'))
            ->with('cashbackValue', number_format($cashbackValue, 2, ',', ' '). ' RUB')
            ->with('link', $link)
            ->with('rates', Rate::all());
    }



    public function balance(User $user)
    {
        return view('cabinet.balance')
            ->with('user', $user);
    }

    public function referralJoin(string $code)
    {
        $refUser = ReferralLink::where('code', $code)->first();

        return redirect()->route('register', ['refUser' => $refUser->user->id]);
    }

    public function withdraw()
    {
        return view('cabinet.output')->with('user', request()->user());
    }
}
