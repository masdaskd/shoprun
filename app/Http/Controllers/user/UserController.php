<?php

namespace App\Http\Controllers\user;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $ca = Categories::all();
//        $product = Products::where('cate_id',$categoryId)->get();
//        $cdkm = Categories::where("id",$categoryId)->first();
        return view("fontend.index", compact("ca")
//            ,[
//            "products"=>$product
//            ]
        );
    }

    public function contact()
    {
        $ca = Categories::all();
        return view("fontend.contact", compact("ca"));
    }

    public function details(string $categoryId)
    {
        $product = Products::where('cate_id', $categoryId)->get();
        $cdkm = Categories::where("id", $categoryId)->first();
        $ca = Categories::all();
        return view("fontend.details", compact("ca"), [
                "products" => $product,
                "category" => $cdkm
            ]
        );
    }

    public function addTocart($id)
    {
        $cart = session()->get("cart");
        $product = Products::find($id);
        if (isset($cart[$id])) {
            $cart[$id]["qty"] = $cart[$id]["qty"] + 1;
        } else {
            $cart[$id] = [
                "name" => $product->pro_name,
                "price" => $product->price,
                "qty" => 1,
                "image" => $product->avatar
            ];
        }
        session()->put("cart", $cart);
        return response()->json([
            "code" => 200,
            "message" => "success"
        ], 200);
    }
    public function showCart()
    {
        $ca = Categories::all();
        $carts = session()->get("cart");
        return view("fontend.checkout", compact("carts", "ca"));
    }
    public function desc(string $re)
    {
        $product = Products::where("id", $re)->first();
        $ca = Categories::all();
        return view("fontend.prodesc",compact("ca","product")
        );
    }
}
