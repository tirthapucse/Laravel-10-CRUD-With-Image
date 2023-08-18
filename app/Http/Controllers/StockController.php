<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    // public function stock(){

    //     $stocks = '$stock';
    //     return view('products.stock');
    // }

    public function stock(){
        $stock = Stock::paginate();
        return view('products.stock',['stocks'=>$stock]);
    }
}
