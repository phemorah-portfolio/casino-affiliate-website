<?php

namespace App\Http\Controllers;

use App\Models\Casino;
use Illuminate\Http\Request;

class CasinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function assignedCasinos() {
        // $assignedCasinos = Casino::with('countries,')
    }

    public function latestCasinos() {
        $casinos = Casino::orderBy('created_at', 'desc')->take(6)->get();
        return response()->json($casinos);
    }

    public function index($limit = false)
    {   
        // $casinos = Casino::with('countries')->get();
        $casinos = ($limit) ? Casino::with('countries')->inRandomOrder()->limit($limit)->get() : Casino::with('countries')->get();
        return response()->json($casinos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'bonus' => 'required',
            'logo' => 'required'
        ]);
        /* */
        $casino = new Casino;
        $casino->name = $request->name;
        $casino->bonus = $request->bonus;
        $casino->affiliate_link = $request->link;
        $casino->description = (isset($request->description)) ? $request->description : '';

        if($request->image) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $casino->logo = $image_new_name;
            $image->move('casinos/', $image_new_name);
        }
        $casino->save();
        /**/
        // return response()->json([
        //     'casinos' => 'success'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Casino::find($id);
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
        $casino = Casino::find($id);
        // $casino->update($request->all());
        // return $casino;
        $casino->name = $request->name;
        $casino->bonus = $request->bonus;
        $casino->affiliate_link = $request->link;

        if($request->image && $request->image != $casino->image) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('casinos/', $image_new_name);
            $casino->logo = $image_new_name;
        }
        
        $casino->save();
        
        return response()->json([
            'casinos' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $casino = Casino::find($id);
        $casino->delete();  

        return response()->json([
            'status' => 'success',
            'message' => 'Casino removed successfully!'
        ]);
    }
}
