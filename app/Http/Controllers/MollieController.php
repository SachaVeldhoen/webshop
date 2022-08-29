<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{
    public function  __construct() {
        Mollie::api()->setApiKey('test_n9qDRy8tn4JD9Sgjxw23y8CQvvBmUA'); // your mollie test api key
    }

    protected $listeners = ['cart_updated' => 'render'];

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {
        $cart_price = Cart::total();
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => number_format($cart_price + 2.95,2,'.','')// You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "Order #12345",
            "redirectUrl" => route('paymentSuccess'),
            "webhookUrl" => route('webhooksMollie'),
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);

        session([
            'payment' => $payment
        ]);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
//    public function paymentSuccess() {
//        echo 'payment has been received';
//    }

    public function paymentSuccess() {

        $payments = Session::get('payment');

        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_n9qDRy8tn4JD9Sgjxw23y8CQvvBmUA");
        $payment = $mollie->payments->get($payments->id);

        Mail::to('fake@mail.com')->send(new OrderMail());

        if ($payment->isPaid() && ! $payment->hasRefunds() && ! $payment->hasChargebacks()) {

            return 'betaald !';
        } elseif ($payment->isOpen()) {
            return redirect('/failed');
        } elseif ($payment->isPending()) {
            return redirect('/failed');
        } elseif ($payment->isFailed()) {
            return redirect('/failed');
        } elseif ($payment->isExpired()) {
            return redirect('/failed');
        } elseif ($payment->isCanceled()) {
            return redirect('/failed');
        }
    }
}
