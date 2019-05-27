<?php

namespace App\Http\Controllers;

use App\Cashback;
use App\Mail\UserVerify;
use App\ReferralLink;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $verifiedUsers = User::where('verified', 1)->get();
        $unverifiedUsers = User::where('verified', 0)->get();
        return view('admin.users.list')
            ->with('verifiedUsers', $verifiedUsers)
            ->with('unverifiedUsers', $unverifiedUsers);
    }

    public function cashback(User $user, Request $request)
    {
        $cashback = new Cashback();
        $cashback->value = $request->value;
        $cashback->user_id = $user->id;
        $cashback->save();

        return back();
    }

    public function sendVerifyLink(User $user, Request $request)
    {
        $refUser = $user->referredUser;
        if ($refUser->first()) {
            $refUser->first()->balance->increaseBalance(User::MoneyForInvite);
            $transaction = new Transaction();
            $transaction->type = Transaction::REF_REWARD;
            $transaction->amount = User::MoneyForInvite;
            $transaction->user_id = $refUser->first()->id;
            $transaction->balance = $refUser->first()->balance->getRealBalance();
            $transaction->save();
        }
        $user->verification(!$request->has('decline') || $request->has('verify'));
        $refferal = new ReferralLink();
        $refferal->user()->associate($user);

        $refferal->code = substr(\Hash::make($user->id), 7, 20);
        $refferal->save();
        Mail::to($user)->send(new UserVerify($user));
        return back();
    }

    public function transactions()
    {
        return view('admin.transaction.list')
            ->with('transactions', Transaction::all());
    }
}
