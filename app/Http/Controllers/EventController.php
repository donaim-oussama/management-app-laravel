<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Project;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', ['events'=>$events]);
    }

    public function details($id){

        $event = Event::where('id', $id)->first();
        return view('events.details', ['event' => $event]);

    }

    public function create(){
        return view('events.create');
    }

    public function store(Event $event){

        request()->validate([
            'nom_event'=>'required',
            'lieu'=>'required',
            'date'=>'required',
            
        ]);

        Event::create([
            'nom_event'=>request('nom_event'),
            'lieu'=>request('lieu'),
            'date'=>request('date'),
            'prix'=>request('prix'),
            'montant_prix'=>request('montant_prix'),
            'nom_entreprise'=>request('nom_entreprise')
        ]);

        return redirect('/events');


    }

    public function edit(Event $event){
        
        return view('events.edit', ['event' => $event]);
    }

    public function update(Event $event){

        request()->validate([
            'nom_event'=>'required',
            'lieu'=>'required',
            'date'=>'required',
        ]);

        $event->update([
            'nom_event'=>request('nom_event'),
            'lieu'=>request('lieu'),
            'date'=>request('date'),
            'prix'=>request('prix'),
            'montant_prix'=>request('montant_prix'),
            'nom_entreprise'=>request('nom_entreprise')
        ]);

        return redirect('/events');
    }

    public function destroy(int $id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/events');

    }

    public  function addProject() {        
        $projects=Project::all();
        $events=Event::all();
        return view('events.addProject',['projects' => $projects, 'events'=>$events]);
    }


    public  function storeProject(Request $request) {
        $request->validate([
        "event_id"=>"required",
        "project_id"=>"required"
        ]);
        
        $project= Project::all();
       
            $event= Event::find($request->event_id); 
            $event->projects()->attach($request->project_id);
            return redirect('/events');
        
    }
}
