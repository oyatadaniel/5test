<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.btn');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $data=new Flight([
            'name' => $request -> get('name'),
            'description' => $request -> get('description')
        ]);
        $data -> save();
        return redirect()->route('home.show')->with('success', 'Added Successifully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users= Flight::all();
        return view('home.show',['users'=>$users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Flight::find($id);
        if(count($users)>0){
           return view('home.edit',['users'=>$users]);
       }else{
           $users = Flight::all();
           return route('home.show',['users'=>$users]);
       }

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
        $id = Flight::find($id);
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        $users = Flight::get($id)->first();
        $users->name=$request->input('name');
        $users->description=$request->input('description');
        $users->save();

        return redirect()->route('home.show')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Flight::find($id);
        $data = Flight::find($id)->first();
        $data->delete();

        return redirect()->route('home.show')->with('success', 'Deleted Successifuly');
    }
}
