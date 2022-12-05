<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FbController extends Controller
{
    public function Fbredirect()
    {

        return Socialite::driver('facebook')->redirect();
    }
    public function FbcallBack()
    {
        // $fb_user = Socialite::driver('facebook')->user();
        // echo "<pre>";
        //     print_r($fb_user);
        //     die();
        try {
            $fb_user = Socialite::driver('facebook')->user();
           
            $user = User::Where('fb_id', $fb_user->getID())->First();
            // echo "<pre>";
            // print_r($fb_user);
            // die();
            if (!empty($user)) {
                auth()->login($user);
                return redirect()->intended('view');
            } else {
                $new_user = User::create([
                    'name' => $fb_user->getName(),
                    'email' => $fb_user->getEmail(),
                    'fb_id' => $fb_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('view');
            }
        } catch (\Throwable $th) {
            dd('something went wrong!', $th->getMessage());
        }
    }
}
