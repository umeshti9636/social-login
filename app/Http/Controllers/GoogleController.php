<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class GoogleController extends Controller
{
    public function redirect(){

        return Socialite::driver('google')->redirect();
    }
    public function CallBack()
    {
        try{
            $google_user= Socialite::driver('google')->user();
            // echo "<pre>";
            // print_r($google_user);
            // die();
            $user = User::Where('google_id', $google_user->getID())->First();

            if(!empty($user)){
                auth()->login($user);
                return redirect()->intended('view');
            }else{
                $new_user =User::create([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'google_id'=>$google_user->getId()
                ]);

                auth()->login($new_user);
                return redirect()->intended('view');
            }
           

        }
        catch(\Throwable $th){
                dd('something went wrong!',$th->getMessage());
        }
    }

}
