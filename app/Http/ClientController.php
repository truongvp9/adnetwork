<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Client;


class ClientController extends Controller
{
    // list all items
    public function index(Request $request)
    {
        $input = $request->all();

        if($request->get('search')){
            $items = Client::where("name", "LIKE", "%{$request->get('search')}%")
                ->paginate(5);      
        }else{
		  $items = Client::paginate(5);
        }
        return response($items);
    }
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
    	$input = $request->all();
        $create = Client::create($input);
        return response($create);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $item = Client::find($id);
        return response($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
    	$input = $request->all();

        Client::where("id",$id)->update($input);
        $item = Client::find($id);
        return response($item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return Client::where('id',$id)->delete();
    }
}
