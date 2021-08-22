<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use App\Models\PrimaryCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');

        $this->middleware(function ($request, $next) {

            $id = $request->route()->parameter('item'); 
            if(!is_null($id)){ 
            $itemId = Product::availableItems()->where('products.id', $id)->exists();
                if(!$itemId){ 
                    abort(404);
                }
            }
            return $next($request);
        });
    }
    
    public function index()
    {
        $shops = Shop::where('owner_id', Auth::id())->get();
        return view('user.top');
    }

    public function create()
    {
        // $shops = Shop::where('owner_id', Auth::id())->get();
    }
    
    public function question1()
    {
        return view('user.question1');
        // $product = Product::findOrFail($id);
        // $quantity = Stock::where('product_id', $product->id)
        // ->sum('quantity');

        // if($quantity > 9){
        //     $quantity = 9;
        //   }

        // return view('user.question.create1');
    }
        public function question2()
    {
         $sex = Session::get('sex');
         $age = Session::get('age');
        return view('user.question2',compact('sex','age'));
    }
}
