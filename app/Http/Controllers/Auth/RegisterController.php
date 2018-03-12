<?php

namespace App\Http\Controllers\Auth;

use App\Mail\NewUserWelcome;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = (new \App\User)->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'game' => $data['game'],
        ]);
        $player1 = (new \App\Player)->create([
            'name' => $data['player1'],
            'email' => $data['email'],
        ]);
        $player2 = (new \App\Player)->create([
            'name' => $data['player2'],
        ]);
        $player3 = (new \App\Player)->create([
            'name' => $data['player3'],
        ]);
        $player4 = (new \App\Player)->create([
            'name' => $data['player4'],
        ]);
        $player5 = (new \App\Player)->create([
            'name' => $data['player5'],
        ]);
        $user->players()->save($player1);
        $user->players()->save($player2);
        $user->players()->save($player3);
        $user->players()->save($player4);
        $user->players()->save($player5);

        $email = $data['email'];

        Mail::send('email', $data, function ($message) use ($email) {
            $message->from('noreply@teser.fr', 'Inscription');

            $message->to($email)->subject('Bienvenue !');
        });

        return $user;
    }
}
