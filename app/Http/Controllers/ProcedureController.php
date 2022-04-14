<?php

namespace App\Http\Controllers;

use App\Http\Requests\Procedure\stroe;
use App\Http\Requests\Procedure\update;
use App\Models\Patient;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function index(){
        $rows = Procedure::latest()->paginate(10);
        return view('pages.procedures.index',compact('rows'));
    }

    public function create(){

        return view('pages.procedures.create');

    }

    public function store(stroe $request){


        $requestArray = $request->all();
        Procedure::create($requestArray);

        return redirect()->route('procedure.index');
    }

    public function edit($id){

        $rows = Procedure::FindOrFail($id);

        return view('pages.procedures.edit',compact('rows'));

    }

    public function update($id , update $request){

        $rows = Procedure::FindOrFail($id);
        $requestArray = $request->all();
        $rows -> update($requestArray);

        return redirect()->route('procedure.index',compact('rows'));

    }

    public function destroy ($id){
        Procedure::FindOrFail($id)->delete();
        return redirect()->route('procedure.index');

    }
}
