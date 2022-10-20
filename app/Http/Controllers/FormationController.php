<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    public function formation()
    {
        return view('formation.create');
    }
    public function all()
    {
        $formations = formation::all();
        return view('formation.index', compact("formations"));
    }
    public function prix()
    {
        return view('formation.prix');
    }
    public function formationcreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'period' => 'required|integer',
            'desc' => 'required',
            'amount' => 'required|integer',
        ]);

        if ($validator->fails()) {
            Toastr::error('The insertion failed', 'Error message', ["positionClass" => "toast-top-center"]);
            return back();
            // ->withErrors($validator);
        }

        try {
            $formation = new formation();
            $formation->id = $request->id;
            $formation->name = $request->name;
            $formation->period = $request->period;
            $formation->desc = $request->desc;
            $formation->amount = $request->amount;
            $formation->save();
            Toastr::success('The insertion was a success', 'Insertion message', ["positionClass" => "toast-top-center"]);
            return redirect("all");
        } catch (Exception $ex) {
            Toastr::error('something went wrong', 'Error message', ["positionClass" => "toast-top-center"]);
            return back();
        }
    }
    public function edit($id)
    {

        $formation = formation::find($id);

        // dd($formation);

        if ($formation != null) {
            return view("formation.create", compact("formation"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $formation = formation::find($request->id);

        if ($formation == null) {
            return back();
        }

        $formation->id = $request->id;
        $formation->name = $request->name;
        $formation->period = $request->period;
        $formation->desc = $request->desc;
        $formation->amount = $request->amount;
        $formation->save();
        return redirect()->route("alluser");
        // ("/admin");
    }

    public function delete($id)
    {

        formation::find($id)->delete();
        return back();
    }
}
