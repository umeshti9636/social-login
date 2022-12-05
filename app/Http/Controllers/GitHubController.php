<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class GitHubController extends Controller
{
    public function Gitredirect()
    {

        return Socialite::driver('github')->redirect();
    }
    public function GitcallBack()
    {
        try {
            $google_user = Socialite::driver('github')->user();
            $user = User::Where('github_id', $google_user->getID())->First();

            if (!empty($user)) {
                auth()->login($user);
                return redirect()->intended('view');
            } else {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'github_id' => $google_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('view');
            }
        } catch (\Throwable $th) {
            dd('something went wrong!', $th->getMessage());
        }
    }
}
