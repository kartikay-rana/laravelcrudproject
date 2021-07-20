<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Studenttabls;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use DataTables;
use App\Http\Requests\updatepostrequest;
use File;

// this is StudentController
class StudentController extends Controller
{
    //save studentdata
    function save(Request $req)

    {
        $student = new student;
        $req->validate([
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|max:15',
            'age' => 'required|numeric',
            'Uploadfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $student->First_name = $req->firstname;
        $student->Last_name = $req->lastname;
        $student->Age = $req->age;
        $student->Subject = $req->subject;
        $fileName = time() . '.' . $req->Uploadfile->extension();
        $student->Uploadfile = $fileName;
        $filepath = $req->Uploadfile->move(public_path('uploads'), $fileName);
        $student->save();
    }
    // get studentlist from database
    public function show()
    {
        $student = Student::all();
        return view('home', ['Students' => $student]);
    }
    public function accounts()
    {
        return view('accounts');
    }
    //student update data
    public function update(updatepostrequest $req)
    {
        $student = Student::find($req->id);
        $student->First_name = $req->firstname;
        $student->Last_name = $req->lastname;
        $student->Age = $req->age;
        $student->Subject = $req->subject;
        // dd((public_path('uploads/'.$student->Uploadfile)));
        if (\File::exists(public_path('uploads/' . $student->Uploadfile))) {
            \File::delete(public_path('uploads/' . $student->Uploadfile));
        } 
        $fileName = time() . '.' . $req['Uploadfile']->extension();
        $student->Uploadfile = $fileName;
        $filepath = $req->Uploadfile->move(public_path('uploads'), $fileName);
        $student->save();
        return view('yajradatatables', ['Students' => $student]);
    }
    //for yajradatatable
    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('Uploadfile', function ($row) {
                    $url = asset('uploads/' . $row->Uploadfile);
                    return ('<img src="' . $url . '" border="0" width="100px" height="100px" class="img-rounded" align="center" />');
                })
                ->addColumn('action', function ($row) {
                    return ('<div><a href="/edit-post/' . $row->id . '" class="edit btn btn-info btn-sm style="border-radius:2px solid black" align="center">Edit</a>   <a href="/delete-post/' . $row->id . '" class="edit btn btn-danger btn-sm">Delete</a></div align="center">');
                })
                ->rawColumns(['Uploadfile', 'action'])
                ->make(true);
        }
        return view('yajradatatables');
    }
    //for editbutton function
    public function edit($id)
    {
        $post = DB::table('student')->where('id', $id)->first();
        return view('edit-post', compact('post'));
    }
    //for deletebutton function
    public function delete($id)
    {
        DB::table('student')->where('id', $id)->delete();
        return view('yajradatatables');

    }
}
