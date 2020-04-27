<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller 
{
    public function index()
    {
        $users = DB::select('SELECT * FROM tbl_insert');
        return view('stud_edit_view',['users'=>$users]);
    }
    public function show($id) 
    {
        $users = DB::select('SELECT * FROM tbl_insert WHERE id = ?',[$id]);
        return view('stud_update',['users'=>$users]);
    }
    public function edit(Request $request,$id)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        DB::update('UPDATE tbl_insert SET first_name = ?,last_name=?,city_name=?,email=? WHERE id = ?',[$first_name,$last_name,$city_name,$email,$id]);
        return redirect('edit-records')->with('message' ,'Record updated successfully.');
       
    }
}