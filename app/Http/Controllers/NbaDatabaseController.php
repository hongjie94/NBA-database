<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use App\Models\Nbaplayers;

class NbaDatabaseController extends Controller
{
    public function players() {

        // $nbaplayers = Nbaplayers::all();
        // $nbaplayers = Nbaplayers::orderBy('name', 'desc')->get();
        // $nbaplayers = Nbaplayers::where('playerid', 66666)->get();
        // $nbaplayers = Nbaplayers::latest()->get();  

        $teams = Http::get('https://data.nba.net/data/10s/prod/v1/2021/teams.json')->json();
        $players =  Http::get('https://data.nba.net/data/10s/prod/v1/2021/players.json')->json();

      
        $playerNoImages  = array( 
            1630625, 1630567, 1630527, 1629091, 1630618, 1630551, 1630536, 
            1630245, 1629148, 1630525, 1630552, 1630553, 1630639, 1630575, 
            1630554, 1630317, 1630346, 1630250, 1630679, 1630688, 1630589 
        );

      
        return view('nbaplayers.index',[
            'players' => $players,
            'teams' =>  $teams,
            'playerNoImages' => $playerNoImages
        ]);
    }

    public function teams() {

        // $nbaplayers = Nbaplayers::all();
        // $nbaplayers = Nbaplayers::orderBy('name', 'desc')->get();
        // $nbaplayers = Nbaplayers::where('playerid', 66666)->get();
        // $nbaplayers = Nbaplayers::latest()->get();  
    
        $apikey = env('SPORTSDATA_API_KEY');
        // $teamPlayers =  Http::get('https://api.sportsdata.io/v3/nba/stats/json/Players/WAS?key='.$apikey)->json();
        $teams = Http::get('https://api.sportsdata.io/v3/nba/scores/json/AllTeams?key='.$apikey)->json();
       
        return view('nbateams.index',[
            'nbateams' => $teams,
        ]);
    }

    public function show($id) {
        $noob ='you are noob!';
        return view ('nbaplayers.show', compact('noob', 'id'));
    }

    public function create() {
        return view ('nbaplayers.create');
    }
}
