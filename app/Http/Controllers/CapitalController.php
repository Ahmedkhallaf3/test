<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Models\Country;
use Illuminate\Http\Request;
use function Sodium\compare;

class CapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capitals=Capital::all();
        return view('capital.index',compact('capitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('capital.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$capital=new Capital();
        $country=Country::all();
        Capital::create([

            'name'=>$request->name,
            'country_id'=>$request->country_id
        ]);

        return response('تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Capital $capital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $capital=Capital::where('id',$id)->first();
        return view('capital.edit',compact('capital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $capital=Capital::where('id',$id)->first();
        $capital->update([
            'name'=>$request->name
        ]);
        return redirect()->route('capital.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $capital=Capital::where('id',$id)->first();
        $capital->delete();
        return redirect()->route('capital.index');
    }
}
