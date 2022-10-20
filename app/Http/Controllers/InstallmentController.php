<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\formation;
use App\Models\Installment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class InstallmentController extends Controller
{
    public function choiceFormation()
    {
        $formations = formation::all();
        return view("installment.choice", compact("formations"));
    }

    
    public function list(Request $request)
    {
        
        $student_for = DB::table("formation_students")->select('student_id')->where('formation_id' , '=' , $request->formation_id)->get();
        $studentss = [] ;
        $students = [];
       
        foreach ($student_for as $key => $value) {
        foreach ($value as $key2 => $value2) {
            $student = Student::where('id', '=' , $value2)->get();
            $studentss [] = $student;
        }
       }

        $formation_idd = $request->formation_id ;
        foreach ($studentss as $key => $val) {
            $students= $val;
         
            # code...
        }
        // dd($students);
        return view("installment.list" , compact('students' , 'formation_idd'));
    }

    public function create(Request $request)
    { 

        $totalInstallment = DB::table("installments")->where('formation_id', '=', $request->formation_id)->sum('price');
        $formation = formation::find($request->formation_id);
        $restAmount = $formation->amount - $totalInstallment;
        return view("installment.create", compact("restAmount", "formation", "totalInstallment"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required | numeric',
            'formation_id' => 'required',
        ]);


        if ($validator->fails()) {
            Toastr::error('The insertion failed', 'Error message', ["positionClass" => "toast-top-center"]);
            return back()->withErrors([
                'price' => 'The amount cannnot be null nor equal to zero',
                'name' => 'The amount cannnot be null ',
            ]);
            // ->withErrors($validator);
        }

        try {
            if ($request->price == 0 || $request->price < 0) {
                Toastr::info('', 'verify again', ["positionClass" => "toast-top-center"]);
                return back()->withErrors([
                    'price' => 'The amount cannnot be null nor equal to zero',
                    'name' => 'The amount cannnot be null ',
                ]);
            }
            $formation = formation::find($request->formation_id);
            $installments = Installment::all()->where('formation_id', '=', $request->formation_id)->count();

            if ($formation == null) {
                return back();
            }

            if ($installments == 0) {
                try {
                    if ($formation->amount > $request->price) {
                        $tran = new Installment();
                        $tran->name = $request->name;
                        $tran->price = $request->price;
                        $tran->formation_id = $request->formation_id;
                        $tran->save();
                        Toastr::error('successful', 'Registration', ["positionClass" => "toast-top-center"]);
                        return back();
                    } else {
                        Toastr::info('', 'verify again', ["positionClass" => "toast-top-center"]);
                        return back()->withErrors([
                            'price' => 'The amount entered cannot be greater than the price of the formation',
                        ]);
                    }
                } catch (Exception $ex) {
                    Toastr::error('failed', 'verify again', ["positionClass" => "toast-top-center"]);
                    return back();
                }
            } else {
                $total = Db::table('installments')->where('formation_id', '=', $request->formation_id)->sum('price');
                $resetPay = $formation->amount - $total;



// dd($total,$resetPay);
                if ($resetPay >= $request->price) {
                    $tranche = new Installment();
                    $tranche->name = $request->name;
                    $tranche->price = $request->price;
                    $tranche->formation_id = $request->formation_id;
                    $tranche->save();
            Toastr::success('successful', 'good', ["positionClass" => "toast-top-center"]);
return back();
                } else {
                    return back()->withErrors(['price' => 'the amount is above the remaining amount']);
                }
            }
        } catch (Exception $ex) {
            Toastr::error('an error occured', 'verify again', ["positionClass" => "toast-top-center"]);
        }
    }

    public function edit(Request $request, $id)
    {
        // dd($request);
        $total_install = Installment::all()->where('formation_id', '=', $request->formation_id)->sum('price');
        $formation = formation::find($id);

        $installment = Installment::find($id);
        $formation_id = $request->formation_id;

        // dd($formation_id);

        if ($installment != null) {
            return view("installment.edit", compact("installment", "formation_id"));
        }
        return back();
    }


    public function update(Request $request, $id)
    {
    //   dd($request);

        $formation = formation::find($request->formation_id);
        try {
            if ($formation->amount > $request->price) {
                $installment = Installment::find($id);
                $installment->name = $request->name;
                $installment->price = $request->price;
                $installment->save();
                Toastr::success('successful', 'update', ["positionClass" => "toast-top-center"]);
                return redirect()->route('returnCreateEdit', [$request->formation_id]);
            }
            
        } catch (Exception $ex) {
            dd($ex);
            Toastr::error('failed', 'update', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }

    public function returnCreate($formation_id)
    {
        $totalInstallment = DB::table("installments")->where('formation_id', '=', $formation_id)->sum('price');
        $formation = formation::find($formation_id);
        $restAmount = $formation->amount - $totalInstallment;
        return view("installment.create", compact("restAmount", "formation", "totalInstallment"));
    }


    public function delete($id)
    {
        Installment::find($id)->delete();
        return back();
    }
}
