<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Support\Facades\Redirect;
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
        $race = race::all();
        $name =DB::select('select * from races');
        return view('display4edit', ['race'=>$race]);
    }
    public function show($id) {
        $race = race::find($id);
        return view('update', ['race'=>$race]);
    }
    public function edit(Request $request, $id)
    {
        $race = race::all();
        $race = race::find($id);
        $name = $request->input('name');
        $race->name = $name;
        $race->save();
        // DB::update('update races set name = ? where id = ?', [$name, $id]);
        echo '<a href = "'.route('edit').'">Click here</a> to go back.';
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
        $race = new race;
        $race->name = $request->name;
        $race->save();
        // $name = $request->input('name');
        // DB::insert('insert into races (name) values (?)',[$name]);
        echo "Record added!<br/>";
        echo '<a href = "insert">Click Here</a> to go back or ' . '<a href = "edit">Update</a> here.';
    }

    public function delete ($id){
        $race = race::find($id);
        $delete = $race->delete();
        echo 'Record deleted';
        echo 'Click here to go<a href = "'.route('edit').'"> back.</a>or <a href="'.route('restore').'">Restore</a>';
    }

    public function try (){
        // $race = race::firstorcreate(['name' => 'eira']);
        // echo "Success";
        // return redirect('insert');

        $race = race::updateOrCreate(
            ['id' => '35'],
            ['name' => 'shanty']
        );
        echo "Success";
    }

    public function delete2 () {
        $del = race::where('id', 21)->delete();
        echo "deleted!";
    }

//     public function restore (){
//     }
// }
