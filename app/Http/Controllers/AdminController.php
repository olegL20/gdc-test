<?php

namespace App\Http\Controllers;

use App\Cashback;
use App\Mail\UserVerify;
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
        $user->verification(!$request->has('decline') || $request->has('verify'));
        Mail::to($user)->send(new UserVerify($user));
        return back();
    }
}
