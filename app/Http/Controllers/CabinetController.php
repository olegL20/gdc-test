<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use zvook\Skrill\Components\SkrillException;
use zvook\Skrill\Forms\QuickCheckoutForm;
use zvook\Skrill\Models\QuickCheckout;
use zvook\Skrill\Models\SkrillStatusResponse;

class CabinetController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user $user */
        $user = $request->user();

        $programm = $user->getReferrals();
        $link = $programm->first() ? $programm->first()->code : null;

        return view('cabinet.cabinet')
            ->with('link', $link);
    }

    public function balance(User $user)
    {

        $quickCheckout = new QuickCheckout([
            'pay_to_email' => 'demoqco@sun-fish.com',
        ]);

        $quickCheckout->setReturnUrl(route('skrill-callback'));
        $form = new QuickCheckoutForm($quickCheckout);

        return view('cabinet.balance')->with('form', $form);
    }

    public function callbackSkrill(Request $request)
    {
        dd($request->all(), $_POST);
        try {
            $response = new SkrillStatusResponse($request->all());
        } catch (SkrillException $e) {
            dd($e);
        }
        $allParams = $response->getRaw();
        if ($response->isFailed()) {
            # Note that you should enable receiving failure code in Skrill account before
            # It will not provided with default settings
            $errorCode = $response->getFailedReasonCode();
        }


        if ($response->verifySignature('your Skrill secret word') && $response->isProcessed()) {
           redirect()->route('successful-payment');
        }
    }
}
