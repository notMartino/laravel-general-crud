<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MainController extends Controller
{
    public function indexView(){
        $matches = Match::all();

        return view('pages.index', compact('matches'));
    }

    public function matchView($id){
        $match = Match::findOrFail($id);

        return view('pages.match', compact('match'));
    }

    public function createMatchView(){
        return view('pages.createMatch');
    }
    public function storeMatch(Request $request){
        
        $validated = $request -> validate([
            'team1' => 'required',
            'team2' => 'required',
            'point1' => 'required|numeric',
            'point2' => 'required|numeric',
            'result' => 'required|boolean',
        ]);

        $match = Match::create($validated);
        return redirect() -> route('matchLink', $match -> id);
    }


    public function editMatchView($id){
        $match = Match::findOrFail($id);
        
        return view('pages.editMatch', compact('match'));
    }

    public function updateMatch(Request $request,$id){

        $validated = $request -> validate([
            'team1' => 'required',
            'team2' => 'required',
            'point1' => 'required|numeric',
            'point2' => 'required|numeric',
            'result' => 'required|boolean',
        ]);

        $match = Match::findOrFail($id);

        $match -> update($validated);
        return redirect() -> route('matchLink', $match -> id);
    }

    
    public function deleteMatch($id){

        $match = Match::findOrFail($id);

        $match -> delete();
        return redirect() -> route('indexLink');
    }
}
