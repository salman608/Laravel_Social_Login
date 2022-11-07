<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class SocialController extends Controller
{
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGithub()
    {
        $user = Socialite::driver('github')->stateless()->user();
        $findUser = User::where('github_id', $user->id)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('/home');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->github_id = $user->id;
            $new_user->password = bcrypt(12345678);
            $new_user->save();
            Auth::login($new_user);
            return redirect('/home');
        }
    }
}
