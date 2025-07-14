<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show($id)
    {
        // IDに応じて店舗のデータを取得したり、viewに渡したりする
        return view('store.show', ['storeId' => $id]);
    }
}
