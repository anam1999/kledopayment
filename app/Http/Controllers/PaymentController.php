<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    //

    public function getpayment(){

    	$payment = Payment::all();
    	$list = Payment::all();

    	return view('payment.index',compact('payment','list'));

    }

      public function viewpayment(){

    	$payment = Payment::all();

    	return view('payment.createpayment',compact('payment'));

    }

      public function createpayment(Request $request){

    		Payment::create([
           	'payment_name' => $request->payment_name,
           ]);
            
          	  return redirect()->route('payment');

    }
      public function deletepayment(Request $request){

      	 // $idx = Payment::findOrFail($id);
      	// $payment->delete();
      	$id = $request->id;
		foreach ($id as $ids) 
		{
			Payment::where('id', $ids)->delete();
		}
      	return redirect()->back();

    }

}
