<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    //GET
    public function allEvent(){
        $event =  Event::all();
        return $event;
    }
    public function show($id){
        $event = Event::find($id);
        return $event;
    }

    //DELETE - POST - PUT
    public function newEvent(Request $request){
        $event = new Event();
        //$event->author = $request->author;
        $event->name = $request->name;
        $event->agency_id = $request->agency_id;
        $event->limit = $request->limit;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->status = $request->status;
        $event->save();
    }
    //esemény státusz frissítése
    public function updateStatus(Request $request, $id){
        $event = Event::find($id);
        $event->status = $request->status;
        $event->save();
    }
    public function destroy($id){
        Event::find($id)
        ->delete();
    }
}
