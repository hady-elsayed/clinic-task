<?php

namespace App\Http\Controllers;

use App\Http\Requests\examination\store;
use App\Http\Requests\examination\update;
use App\Models\Examination;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function index(){
        $rows = Examination::latest()->paginate(10);
        return view('pages.examinations.index',compact('rows'));
    }

    public function create(){

        return view('pages.examinations.create');

    }

    public function store(store $request){


        $requestArray = $request->all();
        Examination::create($requestArray);

        return redirect()->route('examination.index');
    }

    public function edit($id){

        $rows = Examination::FindOrFail($id);

        return view('pages.examinations.edit',compact('rows'));

    }

    public function update($id , update $request){

        $rows = Examination::FindOrFail($id);
        $requestArray = $request->all();
        $rows -> update($requestArray);

        return redirect()->route('examination.index',compact('rows'));

    }

    public function destroy ($id){
        Examination::FindOrFail($id)->delete();
        return redirect()->route('examination.index');

    }
}
