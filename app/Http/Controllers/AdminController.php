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
        return view('admin.users.list')
            ->with('users', User::all());
    }

    public function cashback(User $user, Request $request)
    {
        $cashback = new Cashback();
        $cashback->value = $request->value;
        $cashback->user_id = $user->id;
        $cashback->save();

        return back();
    }

    public function sendVerifyLink(User $user)
    {
        Mail::to($user)->send(new UserVerify($user));
        return back();
    }

    public function startVerify(User $user)
    {
        $stripe = new Stripe();


        return view('admin.users.stripe-payment')
            ->with('user', $user)
            ->with('customer', $customer);
    }
}
