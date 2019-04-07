<?php

namespace App\Http\Controllers;

use App\TrialOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class TrialOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clippino.trial');
    }

    // Send A Trial Order Info to Database
   public function trial_order_send()
   {
        $Validator=Validator::make(Input::all(),[
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
            'image1' => ['required']
        ]);

        if($Validator->fails()){return '0';}

        $name=Input::get('name');
        
        $email=Input::get('email');
        $message=Input::get('message');
        $image1=Input::file('image1');
        $image2=Input::file('image2');
        $service1=Input::get('service1');
        $service2=Input::get('service2');

       

        $trialOrder=new TrialOrder;
        $trialOrder->name=$name;
        $trialOrder->email=$email;
        $trialOrder->message=$message;

        if($image1!=null)
        { 
            $imageName=time().'.'.$image1->getClientOriginalExtension();
            $location=public_path().'/images/';

            $image1->move($location,$imageName);
            $trialOrder->image1=$imageName;
            $trialOrder->service1=$service1;
        }
        if($image2!=null)
        { 
            $imageName=time().'.'.$image2->getClientOriginalExtension();
            $location=public_path().'/images/';

            $image2->move($location,$imageName);
            $trialOrder->image2=$imageName;
            $trialOrder->service2=$service2;
        }

        $trialOrder->save();

        return '1';
   }

   // Retrieve Trial Order Info From Database
   public function trial_order_retrieve()
   {
    
   }
}
