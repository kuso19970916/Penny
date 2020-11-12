<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sales;
class SalesController extends Controller
{
    //
    public function sales_list()
    {
        $user_id = Auth::id();
        $sales = Sales::where('user_id',$user_id)->get();
        return view("sales",['sales' => $sales]);
    }
    public function add_sales(Request $request){
        $data = $request->all();
        $user_id  = Auth::id();
        $name = $data['name'];
        $status= $data['status'];
        $class= $data['class'];
        $date = date("Y-m-d");

        $price= $data['price'];
        $description= $data['description'];

        Sales::create([
            'user_id' =>$user_id,
            'name' =>$name,
            'status' =>$status,
            'class' =>$class,
            'date' =>$date,
            'price' =>$price,
            'description' =>$description,
        ]);

        return redirect('/home');;
    }
}
