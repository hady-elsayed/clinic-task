<?php

namespace App\Http\Controllers;

use App\Http\Requests\Patient\store;
use App\Http\Requests\Patient\update;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $rows = Patient::latest()->paginate(10);
        return view('pages.patients.index',compact('rows'));
    }

    public function create(){

        return view('pages.patients.create');

    }

    public function store(store $request){


        $requestArray = $request->all();
        Patient::create($requestArray);

        return redirect()->route('patient.index');
    }

    public function edit($id){

        $rows = Patient::FindOrFail($id);

        return view('pages.patients.edit',compact('rows'));

    }

    public function update($id , update $request){

        $rows = Patient::FindOrFail($id);
        $requestArray = $request->all();
        $rows -> update($requestArray);

        return redirect()->route('patient.index',compact('rows'));

    }

    public function destroy ($id){
        Patient::FindOrFail($id)->delete();
        return redirect()->route('patient.index');

    }
}
