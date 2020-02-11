<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Carbon\Carbon;
use App\OnlineMember;

class OnlineMemberController extends Controller
{
    /**
     * 新規会員登録：入力画面へ遷移する
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        return view('member.MEM101');
    }

    /**
     * 新規会員登録：入力内容をチェックする
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        $onlineMember = $request->all();
        // 入力チェック
        $validator = Validator::make($onlineMember,[
            'name' => 'required|max:20',
            'password' => 'required|max:8',
            'password2' => 'required|max:8|same:password',
            'age' => 'required|min:0',
            'sex' => 'required',
            'zip' => ['required','max:8','regex:/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/'],
            'address' => 'required|max:50',
            'tel' => ['required','max:20','regex:/^[0-9-]+$/']
        ]);
        if ($validator->fails()) {
            return redirect('/regist')
            ->withInput()
            ->withErrors($validator);
        }

        //セッションに保存
        Session::put('onlineMember', $onlineMember);
        Session::save();
    
        //ビューの表示
        return view('member.MEM102', compact('onlineMember'));
    }

    /**
     * 新規会員登録：登録処理を行い、完了画面へ遷移する
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function execRegist(Request $request)
    {
        //セッションから取得
        $session = Session::get('onlineMember');
       
        // 登録するデータを設定
        $nextId = OnlineMember::max('MEMBER_NO') + 1;
        $onlineMember = new OnlineMember;
        $onlineMember->MEMBER_NO = $nextId;
        $onlineMember->NAME = $session['name'];
        $onlineMember->PASSWORD = $session['password'];
        $onlineMember->AGE = $session['age'];
        $onlineMember->SEX = $session['sex'];
        $onlineMember->ZIP = $session['zip'];
        $onlineMember->ADDRESS = $session['address'];
        $onlineMember->TEL = $session['tel'];
        $onlineMember->REGISTER_DATE = Carbon::now();
        $onlineMember->LAST_UPD_DATE = Carbon::now();
        
        // インサート
        $onlineMember->save();

        //ビューの表示
        return view('member.MEM103', compact('nextId'));
    }
}
