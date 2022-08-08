<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function home()
    {
        $products = Product::select('*')->orderBy('id', 'desc')->with('category')->with('size')->paginate(12);
        return view('client.home', ['product_list' => $products]);
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function productList()
    {

        $products = Product::select('*')->orderBy('name', 'desc')->with('category')->with('size')->paginate(12);
        $category = Category::select('id', 'name')->get();
        $size = Size::select('id', 'name')->get();
        return view('client.productList', [
            'product' => $products,
            'category' => $category,
            'size' => $size,
    ]);

    }
    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('client.productDetail', ['productDetail' => $product]);
    }


    public function category($id)
    {
        $product = DB::table('products')->join('categorys', 'products.category_id', '=', 'categorys.id')->select('products.*')
            ->where('products.category_id', '=', $id)
            ->paginate(12);
        $category = Category::select('id', 'name')->get();
        $size = Size::select('id', 'name')->get();
        return view('client.productList', [
            'product' => $product,
            'category' => $category,
            'size' => $size,
        ]);
    }
}


