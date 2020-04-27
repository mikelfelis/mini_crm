<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user)
        {
            $user = User::create([
                'name' => $getInfo->getName(),
                'email' => $getInfo->getEmail(),
                'provider' => $provider,
                'provider_id' => $getInfo->getId(),
                'password' => '',
                'image' => $getInfo->getAvatar()
            ]);
        }

        Auth::login($user);

        if ($user->is_admin == 1)
        {
            return redirect()->to('admin/home');
        }
        else
        {
            return redirect()->to('/home');
        }
    }
}
