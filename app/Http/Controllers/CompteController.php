<?php

namespace App\Http\Controllers;

use App\Player;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class CompteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compte');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request)
    {
        if ($request->has('player1')) {
            Auth::user()->players->get(1)->update(['email' => $request->input('player1')]);
        }
        if ($request->has('player2')) {
            Auth::user()->players->get(2)->update(['email' => $request->input('player2')]);
        }
        if ($request->has('player3')) {
            Auth::user()->players->get(3)->update(['email' => $request->input('player3')]);
        }
        if ($request->has('player4')) {
            Auth::user()->players->get(4)->update(['email' => $request->input('player4')]);
        }
        if ($request->has('email')) {
            Auth::user()->update(['email' => $request->input('email')]);
            Auth::user()->players->get(0)->update(['email' => $request->input('email')]);
        }

        if ($request->has('passwordold') && $request->has('passwordnew')) {
            if (!(Hash::check($request->get('passwordold'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error", "Le mot de passe entré est incorrect.");
            }

            if (strcmp($request->get('passwordold'), $request->get('passwordnew')) == 0) {
                //Current password and new password are same
                return redirect()->back()->with("error", "Le Nouveau mot de passe ne peut etre identique à l'ancien.");
            }

            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('passwordnew'));
            $user->save();

            return redirect()->back()->with("success","Mot de passe changé avec succès !");
        }

        if ($request->has('playername')) {
            Auth::user()->update(['email' => $request->input('email')]);
            Auth::user()->players->get(0)->update(['email' => $request->input('email')]);
        }

        if($request->hasFile('certif') && $request->has('playerid')){
            $name = $request->input('playerid');
            $certif = $request->file('certif');
            $filename = Auth::user()->name . '_' . $name . '_certif'. '.' . $certif->getClientOriginalExtension();
            $user = Player::where('name', 'Like', $name)->update(['file' => $filename]);
            $certif->move('public/certifs',$filename);
        }

        return redirect()->route('compte');
    }

}
