<?php

use App\OnlineCategory;
use App\OnlineMember;
use App\OnlineOrder;
use App\OnlineOrderList;
use App\OnlineProduct;
// use App\OnlineStaff;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('onlineMember', 'OnlineMemberController');
Route::resource('onlineProduct', 'OnlineOrderController');
Route::resource('onlineProduct', 'OnlineOrderListController');
Route::resource('shohin', 'ShohinController');

Route::get('/', function () {
    //return view('welcome');
    return view('MEN101');
});

Route::get('/login', function () {
    return view('member.LOG101');
});

// 新規会員登録系
Route::get ('/regist', 'OnlineMemberController@input');
Route::post('/regist/confirm', 'OnlineMemberController@confirm');
Route::post('/regist/exec', 'OnlineMemberController@execRegist');

Route::get('/search', 'ShohinController@search');

Route::get('/detail/{id}', 'ShohinController@detail');

Route::get('/add_cart', function () {
    return view('shohin.SHO103');
});

Route::get('/cart', function () {
    return view('kago.KGO101');
});

Route::get('/cart_confirm', function () {
    return view('kago.KGO102');
});
Route::post('/exec_cart', function (Request $resuest) {
    $validator = Validator::make($request->all(),[
    ]);
    if ($validator->fails()) {
        return redirect('/cart_confirm')
            ->withInput()
            ->withErrors($validator);    
    } 

    // 登録するデータを設定
    $onlineOrder = new OnlineOrder;
    $onlineOrder->MEMBER_NO = $request->member_no;
    $onlineOrder->TOTAL_MONEY = $request->total_money;
    $onlineOrder->TOTAL_TAX = $request->total_tax;
    $onlineOrder->ORDER_DATE = '2020/01/01';
    $onlineOrder->COLLECT_NO = 'とりまとめ番号いれる';

    // インサート
    $onlineOrder->save();

    // 購入した商品情報
    // foreachで回す
    foreach ($request->order_list as $product) {
        $onlineOrderList = new OnlineOrderList;
        $onlineOrderList->COLLECT_NO = 'とりまとめ番号いれる';
        $onlineOrderList->PRODUCT_CODE = $request->product_code;
        $onlineOrderList->ORDER_COUNT = $request->order_count;
        $onlineOrderList->ORDER_PRICE = $request->order_price;

        // インサート
        $onlineOrderList->save();
    }

    return redirect('/cart_complete');
});

Route::get('/cart_complete', function () {
    return view('kago.KGO103');
});