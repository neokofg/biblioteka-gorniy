<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected function CreateUser(Request $request){
        if(Auth::check() OR Auth::viaRemember()){
            return redirect(route('index'));
        }
        $validateFields = $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|unique:users|max:12',
            'password' => 'required|min:8|required_with:password_confirm|same:password_confirm',
		'password_confirm' => 'min:8'
        ]);
        $user = User::create([
            'name' => $validateFields['name'],
            'phonenumber' => $validateFields['phonenumber'],
            'password' => Hash::make($validateFields['password']),
            'role'=> '0'
        ]);
        if($user){
            Auth::login($user);
            return redirect()->to(route('index'));
        }
        return redirect(route(''))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
    protected function LoginUser(Request $request){
        if(Auth::check()  OR Auth::viaRemember()){
            return redirect(route('index'));
        }
        $formFields = $request->only(['phonenumber', 'password']);
        $remember = $request->input('remember');
        if(Auth::attempt($formFields,$remember)){
            return redirect()->intended(route('index'));
        }
        return redirect(route('auth'))->withErrors([
            'number'=> 'Не удалось авторизироваться'
        ]);
    }
    protected function LogoutUser(Request $request){
        Auth::logout();
        return view('auth');
    }
}