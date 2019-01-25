<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\race;

class super extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $race = DB::select('select * from races');
        return view('list' , ['race'=>$race]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(lain $lain)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, lain $lain)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    // public function show(lain $lain, DummyModelClass $DummyModelVariable)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function editinit() {
        $name =DB::select('select * from races');
        return view('display4edit', ['race'=>$race]);
    }
    public function show($id) {
        $name = DB::select('select * from races where id = ?', [$id]);
        return view('update', ['race'=>$race]);
    }
    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        DB::update('update races set name = ? where id = ?', [$name,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit">Click here</a> to go back.';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request){
    //     $name = $request->input('name_update');
    //     DB::update('set races (name) values (?)');
    //     $name->save();
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    public function insertform(){
        return view('super_create');
    }

    public function insert (Request $request){
        $name = $request->input('name');
        DB::insert('insert into races (name) values (?)',[$name]);
        echo "Record added!<br/>";
        echo '<a href = "insert">Click Here</a> to go back or' . '<a href = "update"> Update</a> here.';
    }
}
