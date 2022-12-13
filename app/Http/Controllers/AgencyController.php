<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index(){
        $agency =  Agency::all();
        return $agency;
    }

    public function show($id){
        //$agency = Agency::find($id);
        $agency=response()->json(Agency::find($id));
        return $agency;
    }
    public function destroy($id){
        Agency::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Agency = new Agency();
        $Agency->name = $request->name;
        $Agency->country = $request->country;
        $Agency->type = $request->type;
        $Agency->save();
    }

    public function update(Request $request, $agency_id)
    {
        $Agency = Agency::find($agency_id);
        $Agency->name = $request->name;
        $Agency->country = $request->country;
        $Agency->type = $request->type;
        $Agency->save();
    }
}
