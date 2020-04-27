<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudDeleteController extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT * FROM tbl_insert');
        return view('stud_delete_view',['users'=>$users]);
    }
        public function destroy($id)
    {
        DB::delete('DELETE FROM tbl_insert WHERE id = ?',[$id]);
        return redirect('edit-records')->with('delete' ,'Record deleted successfully.');  
    }
}