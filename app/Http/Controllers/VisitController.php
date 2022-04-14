<?php

namespace App\Http\Controllers;

use App\Http\Requests\Visit\store;
use App\Http\Requests\Visit\update;
use App\Models\Date;
use App\Models\Examination;
use App\Models\Patient;
use App\Models\Procedure;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $rows = Visit::with('patient','examinations','procedures')->paginate(10);
        return view('pages.visits.index',compact('rows'));
    }

    public function create()
    {
        $patients = Patient::get();
        $examinations =Examination::get();
        $dates=Date::get();


        return view('pages.visits.create',compact('patients','examinations','dates'));

    }

    public function store(store $request){

        $requestArray = $request->all();
        Visit::create($requestArray);

        return redirect()->route('visit.index');
    }

    public function edit($id){

        $rows = Visit::FindOrFail($id);
        $patients = Patient::get();
        $examinations =Examination::get();
        $dates=Date::get();
        $procedures=Procedure::get();

        return view('pages.visits.edit',compact('rows','patients','examinations','dates','procedures'));

    }

    public function update($id , update $request){

        $rows = Visit::FindOrFail($id);
        $requestArray = $request->all();

        $rows -> update($requestArray);

        if (isset($requestArray['procedures']) && !empty($requestArray['procedures'])){
            $rows ->procedures()->sync($requestArray['procedures']);
        }

        return redirect()->route('visit.index',compact('rows'));

    }

    public function destroy ($id){
        Visit::FindOrFail($id)->delete();
        return redirect()->route('visit.index');

    }
}
