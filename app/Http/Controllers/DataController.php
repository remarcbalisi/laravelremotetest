<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('productname');
        $qty_in_stock = $request->input('stock');
        $price_per_item = $request->input('price');

        // adds form data into an array
        $formdata = array(
          'name'=> $name,
          'qty_in_stock'=> $qty_in_stock,
          'price_per_item'=> $price_per_item
        );

        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);

        if(file_put_contents('dirdata/formdata.json', $jsondata)) echo 'Data successfully saved';
        else echo 'Unable to save data in "dirdata/formdata.txt"';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
