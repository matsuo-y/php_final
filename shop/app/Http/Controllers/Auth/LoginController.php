<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * 認証を処理する
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function login(Request $request)
    {
        // 入力チェック
        $validator = Validator::make($request->all(),[
            'member_no' => 'required|regex:/^[0-9]+$/',
            'password' => 'required|max:8|regex:/^[a-zA-Z0-9]+$/'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
            ->withInput()
            ->withErrors($validator);
        }

        if (Auth::attempt([
            'MEMBER_NO' => $request->input('member_no'), 
            // 'PASSWORD' => $request->input('password'), 
            'DELETE_FLG' => 0])) {
        
                dd($request->all());
            return redirect()->intended('/');
        }
        dd($request->all());
        return redirect()->back();
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        return '/';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function username()
    {
        return 'MEMBER_NO';
    }
    
}
