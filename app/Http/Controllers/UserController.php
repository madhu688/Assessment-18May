<?php

namespace App\Http\Controllers;

use App\Events\NewUserHasRegisteredEvent;
use App\Http\Requests\StoreformValidation;
use App\Mail\WelcomeNewUserMail;
use SmartyStreets\PhpSdk\ClientBuilder;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    
    public function index()
    {
        return view('register');
    }

    public function store(StoreformValidation $request)
    {
        $user  = new User();
        $user->name= request('name');
        $user->email= request('email');
        $user->phone= request('phone');
        $user->address= request('address');
        $user->city= request('city');
        $user->state= request('state');
        $user->zipcode= request('zip');
        $user->password= request('password');        
        $user->save();

        event(new NewUserHasRegisteredEvent($user));
        
        if(!is_null($user)) 
        {
            return back()->with("success","Successfully Registered!!");
        }
        else{
            return back()->with("failed","Not Registered!!");
        }
        
      }

    public function apiCall()
    {
       
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL,"https://us-street.api.smartystreets.com/street-address?street=123+main+Schenectad&auth-id=12d4e302-8ebe-435a-ccdb-a7e01dc78f05&auth-token=TuSAlTJWVgokd1ecyYhD&candidates=10");
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_HTTPHEADER,['content-type:application/json']);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$_REQUEST);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        if($err)
        {
            echo 'Curl Error'.$err;
        }
        else{
            header('content-type:application/json');
            print_r($result);
        }

        
   }

}
