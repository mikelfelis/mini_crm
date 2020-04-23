<?php

namespace App\Http\Controllers;

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
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users = User::where(['email' => $userSocial->getEmail()])->first();

        if ($users)
        {
            Auth::login($users);
            return redirect('/');
        }
        else
        {
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);

            return redirect()->route('home');
        }
    }

    // public function createUser()
    // {
    //     $user = User::where('provider_id', $getInfo->id)->first();

    //     if (!$user)
    //     {
    //         $user = User::create([
    //             'name' => $getInfo->name,
    //             'email' => $getInfo->email,
    //             'provider' => $provider,
    //             'provider_id' => $getInfo->id
    //         ]);

    //         return $user;
    //     }
    // }
}
