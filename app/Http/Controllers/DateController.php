<?php

namespace App\Http\Controllers;

use App\Http\Requests\Date\store;
use App\Http\Requests\Date\update;
use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index(){
        $rows = Date::latest()->paginate(10);
        return view('pages.dates.index',compact('rows'));
    }

    public function create(){

        return view('pages.dates.create');

    }

    public function store(store $request){


        $requestArray = $request->all();
        Date::create($requestArray);

        return redirect()->route('date.index');
    }

    public function edit($id){

        $rows = Date::FindOrFail($id);

        return view('pages.dates.edit',compact('rows'));

    }

    public function update($id , update $request){

        $rows = Date::FindOrFail($id);
        $requestArray = $request->all();
        $rows -> update($requestArray);

        return redirect()->route('date.index',compact('rows'));

    }

    public function destroy ($id){
        Date::FindOrFail($id)->delete();
        return redirect()->route('date.index');

    }
}
