<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipateController extends Controller
{
    //GET
    public function allParticipate(){
        $participate =  Participate::all();
        return $participate;
    }
    public function userParticipates($id){
        //$user = Auth::user();	//bejelentkezett felhasználó
        $participate = DB::table('participates')
        ->where('user_id','=', $id)
        ->get();
        return $participate;
    }
    public function show($event_id, $user_id){
        $participate = Participate::where('event_id', $event_id)
        ->where('user_id', $user_id)
        ->get();
        return $participate[0];
    }

    //DELETE - POST - PUT
    public function newParticipate(Request $request){
        $participate = new Participate();
        $participate->event_id = $request->event_id;
        $participate->user_id = $request->user_id;
        //$participate->present = $request->present;
        $participate->save();
    }
    public function updatePresent(Request $request, $event_id, $user_id){
        $participate = ParticipateController::show($event_id, $user_id);
        $participate->present = $request->present;
        $participate->save();
    }
    public function destroy($event_id, $user_id){
        ParticipateController::show($event_id, $user_id)
        ->delete();
    }
}
