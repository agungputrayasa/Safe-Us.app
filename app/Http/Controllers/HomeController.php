<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;

class HomeController extends Controller
{
    public function form()
    {
        $kota=['Denpasar','Badung','Bangli'];
        return view('form',compact('kota'));
    }

    public function store()
    {
        $data_report = \App\Data::all();
        return view('store',['data_report' => $data_report]);
    }

    public function create(Request $request)
    {
        \App\Data::create($request->all());
        return redirect('/Home/Store');
    }

    public function edit($id)
    {
        $data = \App\Data::find($id);
        $kota=['Denpasar','Badung','Karangasem','Klungkung','Bangli','Gianyar','Jembrana','Tabanan'];
        $job=['Private employees','Businessman','Government employees','Teacher','Lecturer','Programmer','Designer','Contractior'];
        return view('edit',['data' => $data,'kota'=>$kota,'job'=>$job]);
    }

    public function update(Request $request, $id) {
        $update= Data::find($id);
        $update->username=$request->username;
        $update->mynik=$request->mynik;
        $update->myphone=$request->myphone;
        $update->age=$request->age;
        $update->job=$request->job;
        $update->user_infec=$request->user_infec;
        $update->user_nik=$request->user_nik;
        $update->date=$request->date;
        $update->region=$request->region;
        $update->user_age=$request->user_age;
        $update->address=$request->address;
        $update->save();
        return redirect('/Home/Store');
    }

    public function delete($id)
    {
        $delete= Data:: where('id',$id)->delete();
        return redirect('/Home/Store');
    }
}
