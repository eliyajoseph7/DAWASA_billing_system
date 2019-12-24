<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Customer;
class customerController extends Controller
{
    public function customer()
    {
        $customer_list = DB::table('customers')->simplePaginate(5);
          return view('customer', ['customer_list' => $customer_list]);
    }

    public function add(Request $request){
        $addcustomer = new Customer;

        if ($addcustomer::where('metre', '=', Input::get('metre'))->exists()) {
            return redirect('/addcustomer')->with('info','The customer exists');
        

        }else{
            $addcustomer -> name = $request -> input('name');
            $addcustomer -> location = $request -> input('location');
            $addcustomer -> email = $request -> input('email');
            $addcustomer -> metre = $request -> input('metre');
            $addcustomer -> status = $request -> input('status');
            
            $addcustomer -> save();
             return redirect('/customer')->with('info', 'customer added successfully!');
        }
    }
}
