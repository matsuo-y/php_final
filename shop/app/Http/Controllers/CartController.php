<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\OnlineProduct;
use App\OnlineOrder;
use App\OnlineOrderList;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // いったん仮置き
        $userId = 1;
        //セッションから取得
        $session = Session::get('cartItem' .$userId);
        $onlineProducts = OnlineProduct::all();
        $result = array();
        foreach($session as $target) {
            $onlineProduct = $onlineProducts->where('PRODUCT_CODE', $target->PRODUCT_CODE)->first();
            $app = app();
            $item = $app->make('stdClass');
            $item->PRODUCT_CODE = $target->PRODUCT_CODE;
            $item->buyCnt = $target->buyCnt;
            $item->PRODUCT_NAME = $onlineProduct['PRODUCT_NAME'];
            $item->MAKER = $onlineProduct['MAKER'];
            $item->UNIT_PRICE = $onlineProduct['UNIT_PRICE'];
            array_push($result, $item);
        }
        $isListEmpty = count($result) === 0;
        return view('kago.KGO101', [
            'cartItems' => $result,
            'isListEmpty' => $isListEmpty
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
