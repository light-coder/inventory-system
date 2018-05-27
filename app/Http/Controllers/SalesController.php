<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Sales;
use App\Customer;
use App\Product;
use App\Transaction;
class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $sales = Inventory::orderBy('id', 'DESC')->get();
        $customers = Customer::all();
        $products = Product::all();



        return  view('sales.index',['sales'=>$sales,'products'=>$products,'customers'=>$customers]);
    }



    public function getProductName(){
    return Product::where('id', $this->id)->first()->name;
  }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sales.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
 

        $sales = Inventory::create(['product_id'=>$request->input('product_id'),
            'customer_id'=>$request->input('customer_id'),'details'=>$request->input('customer_id'),
            'issue'=>$request->input('issue')]);
        
        // get product price 
        $productId = Product::where('id', $request->input('product_id'))->first()->price;

        $amount = ($productId * $request->input('issue'));

        $transactions = Transaction::create([ 'customer_id'=>$request->input('customer_id'), 
         'debit'=>$amount ]);
        // last insert id 
       // $lastId = DB::getPdo()->lastInsertId();
        //$product_info = Product::all()->where('id',)->pluck('price')->all();
        


       // $updateAmount = Inventory::where('id',$lastId)
        //->update(['amount'=>$amount]);
        

        return redirect('/sales');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
        $sales = Sales::find($sales->id);

        return view('sales.show', ['sales'=>$sales]);
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
