<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Exception;
use App\Models\Student;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $students = student::all();
        if ($request->wantsJson()) {
            return response()->json(['student_list' => $students]);
        } else {

            return view("student.index", compact('students'));
        }
    }

    public function create()
    {
        $formations = formation::all();
        return view("student.create" , compact("formations"));
    }


    public function store(Request $request)
    {
         
        $validator = Validator::make($request->all(), [
            'matricule' => 'required|unique:students|max:255',
            'first_name' => 'required|unique:students|max:255',
            'last_name' => 'required',
            'email' => 'required',
            'level_of_studies' => 'required',
        ]);

        if ($validator->fails()) {
            Toastr::error('The insertion failed', 'Error message', ["positionClass" => "toast-top-center"]);
            return back();
            // ->withErrors($validator);
        }

        try {
            $student = new Student();
            $student->matricule = $request->matricule;
            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->contact = $request->contact;
            $student->roles = "student";
            $student->level_of_studies = $request->level_of_studies;
        
            $student->save();
          
            DB::table('formation_students')->insert([
                'formation_id' => $request->formation ,
                'student_id' => $student->id ,
            ]);
            Toastr::success('The insertion was a success', 'Insertion message', ["positionClass" => "toast-top-center"]);
        } catch (Exception $ex) {
            Toastr::error('something went wrong', 'Error message', ["positionClass" => "toast-top-center"]);
        }
        return redirect("admin");
    }
    public function edit($id)
    {

        $student = student::find($id);

        // dd($student);

        if ($student != null) {
            return view("student.create", compact("student"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $student = student::find($request->id);

        if ($student == null) {
            return back();
        }

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->level_of_studies = $request->level_of_studies;
        $student->formation = $request->formation;
        $student->save();
        return redirect()->route("index");
        // ("/admin");
    }

    public function delete($id)
    {

        student::find($id)->delete();
        return redirect()->route("index");
    }

   
}
