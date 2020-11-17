<?php

namespace App\Http\Controllers;

use App\Helpers\SessionFlash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        $data['password'] = Crypt::encrypt($data['password']);

        $user_exists = User::findUserByUsername($data['username']);

        if($user_exists) {
            SessionFlash::createMessage(['Usuário já cadastrado'], 'alert-danger');

            return redirect()->route('home', ['error' => 'already-exists'])->withInput($request->all());
        }

        $user = User::create($data);

        Session::put('login', [
            'id' => $user->id,
            'username' => $user->username,
        ]);

        return redirect()->action([CourseController::class, 'index']);
    }
}
