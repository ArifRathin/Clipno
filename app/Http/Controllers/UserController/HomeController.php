<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index(){

    	$user=User::find(\Auth::user()->id);
    	return view('Uasers.index')->with(compact('user'));
    }

   public function user_update()
       {
        $name=Input::get('name');

        $phone=Input::get('phone');

        $country=Input::get('country');
        $company=Input::get('company');
        $companyAddress=Input::get('company_address');
        $address=Input::get('address');
        $image=Input::file('image');

        $profile=Profile::where('user_id',\Auth::user()->id)->first();

        $profile->phone=$phone;
        $profile->country=$country;
        $profile->company=$company;
        $profile->company_address=$companyAddress;
           $profile->address=$address;
        
        if($image!=null)
           { 
               $imageName=time().'.'.$image->getClientOriginalExtension();
               $location=public_path().'/images/';

               $image->move($location,$imageName);
               $profile->image=$imageName;
           }
           $profile->save();

           $user=User::find(\Auth::user()->id);
           $user->name=$name;

           $user->save();

           $update_time=$profile->updated_at->format('D d M, Y H:i:s');

        return response()->json(['phone'=>$profile->phone,
               'country'=>$profile->country,
               'company'=>$profile->company,
               'company_address'=>$profile->company_address,
               'image'=>$profile->image,
               'updated_at'=>$update_time,
               'name'=>$user->name]);
       }
}
