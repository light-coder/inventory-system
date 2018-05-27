<?php

namespace App\Http\Controllers;
//use DB;
use App\Customer;
use App\Product;
use App\Sales;
use App\Inventory;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        //
        $products = Product::all();
        $inventory = Inventory::orderBy('id', 'DESC')->get();

        return view ('inventories.index', ['products'=>$products, 'inventory'=>$inventory] );



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('inventories.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $inventory = Inventory::create(['product_id'=>$request->input('product_id'),
            
            'details'=>$request->input('details'),
            'reciept'=>$request->input('reciept')]);

       

            
                 return redirect('/inventories');

            




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
        $inventory = Inventory::find($inventory->id);
        return view ('inventories.show', ['inventory'=>$inventory]);
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
