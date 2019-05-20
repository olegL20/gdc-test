<?php

namespace App\Http\Controllers;

use App\LotteryWinner;
use App\User;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    public function admin()
    {
        $users = User::all();
        $winners = LotteryWinner::all();
        return view('admin.lottery.list')
            ->with('users', $users)
            ->with('winners', $winners);
    }

    public function createWinner(Request $request)
    {
        $winner = new LotteryWinner();
        $winner->time = $request->time;
        $winner->user()->associate(User::find($request->user));
        $winner->amount = $request->amount;
        $winner->save();
        return back();
    }

    public function deleteWinner(LotteryWinner $winner)
    {
        $winner->delete();

        return back();
    }
}
