<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

use DummyFullModelClass;
use App\lain;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Mailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        //
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
    public function show(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

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

    public function basic_email() {
        $data = array('name'=> "Nazrul");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('mohdnazrulm9@gmail.com', 'GoodsaneIntern')->subject('Laravel basic email test');
            $message->from('nazrul@goodsane.com', 'Nazrul');
        });
        echo "Email sent!";
    }

    public function html_email(){
        $data = array('name' => "Nazrul");
        Mail::send('mail', $data, function($message){
            $message->to('mohdnazrulm9@gmail.com', 'Goodsane Intern')->subject('Laravel HTML Testing Mail');
            $message->from('nazrul@goodsane.com', 'Nazrul');
        });
        echo "HTML Email sent!";
    }
    
    public function attachment_email(){
        $data = array('name'=>'Nazrul');
        Mail::send('mail', $data, function($message) {
            $message->to('mohdnazrulm9@gmail.com', 'Goodsane Intern')->subject('Laravel Testing Mail with Attachment');
            $message->attach('D:\wamp64\www\nazrul\goodsaneintern\public\uploads\naruto.jpg');
            $message->attach('D:\wamp64\www\nazrul\goodsaneintern\public\uploads\1.txt');
            $message->from('nazrul@goodsane.com', 'Nazrul');
        });
        echo "Email with attachment sent!";
    }
}
