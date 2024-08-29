<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home(){
        $products = Product::with('images:id,product_id,image_url')
            ->orderBy('created_at', 'desc')->take(5)->get();
        return view('users.home')->with([
            'products' => $products
        ]);
    }

    public function userInfo(){
        return view('users.userinfo');
    }

    public function updateUser(Request $req){
        $req->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Tên không được để trống'
        ]);

        User::find(Auth::id())->update([
            'name'  => $req->name
        ]);

        return redirect()->route('users.home')->with([
            'message' => 'Chỉnh sửa thành công'
        ]);
    }


    public function changePassUser(Request $req){
        $req->validate([
            'old_password' => 'required',
            'new_password' => 'required|different:old_password|same:password_confirmation'
        ]);

        if(Hash::check($req->old_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password' => Hash::make($req->new_password)
            ]);
        }else{
            return redirect()->route('users.home')->with([
                'message' => 'Mật khẩu cũ không đúng'
            ]);
        }


        return redirect()->route('users.home')->with([
            'message' => 'Thay đổi mật khẩu thành công'
        ]);
    }


    public function detailProduct(Request $req){
        $idProduct = $req->idProduct;
        $product = Product::with('images:id,product_id,image_url')->with('category:id,name')->find($idProduct);
        return view('users.detailproduct')->with([
            'product'   => $product
        ]);
    }

    public function searchProduct(Request $req){
        $data = $req->getContent();
        $data = json_decode($data);
        $products = $data->nameProduct != "" ?
            Product::where('name', 'like', "%". $data->nameProduct ."%")->get() : [];

        return json_encode($products);
    }
}