<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Razorpay\Api\Api;


class PaymentController extends Controller
{
    public function razorpay()
    {        
        return view('payment');
    }

    public function payment(Request $request)
    {        
        $input = $request->all();        
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $payment = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                if (!empty($payment) && $payment['status'] == 'captured') {
                    $paymentId = $payment['id'];
                    $amount = $payment['amount'];
                    $currency = $payment['currency'];
                    $status = $payment['status'];
                    $entity = $payment['entity'];
                    $orderId = $payment['order_id'];
                    $invoiceId = $payment['invoice_id'];
                    $method = $payment['method'];
                    $bank = $payment['bank'];
                    $wallet = $payment['wallet'];
                    $bankTranstionId = isset($payment['acquirer_data']['bank_transaction_id']) ? $payment['acquirer_data']['bank_transaction_id'] : '';
                } else {
                    return redirect()->back()->with('error', 'Something went wrong, Please try again later!');
                }
                try {
                    // Payment detail save in database
                    $payment = new Payment;
                    $payment->transaction_id = $paymentId;
                    $payment->amount = $amount / 100;
                    $payment->currency = $currency;
                    $payment->entity = $entity;
                    $payment->status = $status;
                    $payment->order_id = $orderId;
                    $payment->method = $method;
                    $payment->bank = $bank;
                    $payment->wallet = $wallet;
                    $payment->bank_transaction_id = $bankTranstionId;
                    $saved = $payment->save();
                } catch (Exception $e) {
                    $saved = false;
                }
                if ($saved) {
                    return redirect()->back()->with('success', __('Payment Detail store successfully!'));
                } else {
                    return back()->withInput()->with('error', __('Something went wrong, Please try again later!'));
                }
        

            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        
        
        
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }

}
