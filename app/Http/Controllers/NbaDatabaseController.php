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

        // Players like does not have headshot
        $playerNoImages  = array( 
            1630625, 1630567, 1630527, 1629091, 1630618, 1630551, 1630536, 
            1630245, 1629148, 1630525, 1630552, 1630553, 1630639, 1630575, 
            1630554, 1630317, 1630346, 1630250, 1630679, 1630688, 1630589,
            1630791, 1630793, 1630275, 1629596, 1630622, 1629788, 1630792,
            1630787, 1630672, 1630777, 1630651, 1628876, 1630844, 1629071,
            1629962, 1629958 
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
        $teams = Http::get('https://api.sportsdata.io/v3/nba/scores/json/AllTeams?key='.$apikey)->json();
       
        return view('nbateams.index',[
            'nbateams' => $teams,
        ]);
    }

    public function team($key) {

        $apikey = env('SPORTSDATA_API_KEY');
        $teamsDatas = Http::get('https://api.sportsdata.io/v3/nba/scores/json/AllTeams?key='.$apikey)->json();
        $team = Http::get('https://api.sportsdata.io/v3/nba/stats/json/Players/' . $key .'?key='.$apikey)->json();
        
        return view ('nbateams.team', [
            'team' => $team, 
            'teamsDatas' => $teamsDatas, 
            'key' => $key
        ]);
    }

    public function teamplayer($key, $id) {
        $apikey = env('SPORTSDATA_API_KEY');
        $playerDatas = Http::get('https://api.sportsdata.io/v3/nba/scores/json/Player/'. $id .'?key='.$apikey)->json();
        $teamsDatas = Http::get('https://api.sportsdata.io/v3/nba/scores/json/AllTeams?key='.$apikey)->json();
        $bgcolor = '';
        foreach ($teamsDatas as $data) {
            if($data['Key'] === $key) {
                $bgcolor = $data['PrimaryColor'];
            }
        }
        return view ('nbateams.teamplayer', [
            'playerDatas' => $playerDatas, 
            'id' => $id,
            'bgcolor' => $bgcolor
        ]);
        
    }

    public function create() {
        return view ('nbaplayers.create');
    }
}
