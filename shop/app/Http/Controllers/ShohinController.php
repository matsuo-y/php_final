<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\OnlineCategory;
use App\OnlineProduct;

class ShohinController extends Controller
{
    /**
     * 商品検索：検索を実行する
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'priceMax' => 'min:0|gte:priceMin',
            'priceMin' => 'min:0'
        ]);
        if ($validator->fails()) {
            return redirect('/regist')
            ->withInput()
            ->withErrors($validator);
        }

        $onlineCategories = OnlineCategory::orderBy('CTGR_ID', 'asc')->pluck('NAME', 'CTGR_ID');

        $onlineProducts = new OnlineProduct();
        if ($request->has('cateId')) {
            $onlineProducts = $onlineProducts
              ->where('CATEGORY_ID', $request->input('cateId'));
        }
        if ($request->has('productName') && $request->input('productName') != "") {
            $onlineProducts = $onlineProducts
              ->where('PRODUCT_NAME', 'like', '%'.$request->input('productName').'%');
        }
        if ($request->has('maker') && $request->input('maker') != "") {
            $onlineProducts = $onlineProducts
              ->where('MAKER', 'like', '%'.$request->input('maker').'%');
        }
        if ($request->has('priceMax') && $request->input('priceMax') != "") {
            $onlineProducts = $onlineProducts
              ->where('UNIT_PRICE', '<=', $request->input('priceMax'));
        }
        if ($request->has('priceMin') && $request->input('priceMin') != "") {
            $onlineProducts = $onlineProducts
              ->where('UNIT_PRICE', '>=', $request->input('priceMin'));
        }
        $resultOnlineProducts = $onlineProducts
          ->where('DELETE_FLG', 0)
          ->paginate(5);
        $isListEmpty = $onlineProducts->count() === 0;
    
        return view('shohin.SHO101', [
            'onlineCategories' => $onlineCategories, 
            'onlineProducts' => $resultOnlineProducts,
            'isListEmpty' => $isListEmpty,
            'cateId' => $request->input('cateId'),
            'productName' => $request->input('productName'),
            'maker' => $request->input('maker'),
            'priceMax' => $request->input('priceMax'),
            'priceMin' => $request->input('priceMin')
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $onlineProduct = OnlineProduct::where('PRODUCT_CODE', $id)->first();
        if ($onlineProduct != null) {
            return view('shohin.SHO102', [
                'onlineProduct' => $onlineProduct,
                'id' => $id
                ]);
        } else {
            // 商品情報が取得できなかった場合がエラー画面に飛ばす
            return view('common.ERR101', [
                'message' => '存在しない商品コードが指定されました。'
                ]);
        }

    }
}
