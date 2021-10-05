@extends('layouts.app')

@section('content')

    <div class='mb-5'>
        <h1 class="text-gray-200 p-5">2021 NBA Players</h1>
        <div class="container">
        <div class="row gx-2">
        @foreach($players['league']['standard'] as $player)
          @if(in_array($player['personId'], $playerNoImages))
          <div class="card col-lg-6 col-12" style="width: 450px;">
          <div class="row g-0">
            <div class="col-md-4 m-auto pl-3">
              <img class="img-fluid rounded-star" src="https://cdn.nba.com/headshots/nba/latest/260x190/logoman.png" alt="{{ $player['temporaryDisplayName']}}">  
            </div>
            <div class="col-md-7 d-flex align-items-end">
              <div class="card-body position-relative pb-0">
                <img src="{{'https://cdn.nba.com/logos/nba/' . (end($player['teams'])["teamId"]) . '/primary/L/logo.svg'}}" alt="" class='teamsicon'>
                <p class="card-text m-0">
                  <small>
                  @foreach($teams['league']['standard'] as $team)
                    @if( $team['teamId'] === end($player['teams'])["teamId"])
                      {{$team['fullName']}}
                    @endif
                  @endforeach
                  
                    | # {{$player['jersey']}} | {{$player['teamSitesOnly']['posFull']}}
                  </small>
                </p>
                <h5 class="card-title">{{$player['firstName']}} {{$player['lastName']}} </h5>
                <p class="card-text mb-0">
                  <small>HEIGHT: </small>
                  <small class="text-muted"> {{$player['heightFeet']}}' {{$player['heightInches']}}" ({{$player['heightMeters']}}m)</small>
                </p>
                <p class="card-text mb-0">
                  <small>WEIGHT: </small> 
                  <small class="text-muted"> {{$player['weightPounds']}}lb ({{$player['weightPounds']}}kg)</small>
                </p>
                <p class="card-text mb-0">
                  <small>BIRTHDATE: </small> 
                  <small class="text-muted"> {{$player['dateOfBirthUTC']}}</small>
                </p>
              </div>
            </div>
          </div>
        </div>
  
          @else
          <div class="card col-lg-6 col-12" style="width: 450px;">
          <div class="row g-0">
            <div class="col-md-5 m-auto pl-3">
              <img class="img-fluid rounded-start pt-2" src="{{ 'https://cdn.nba.com/headshots/nba/latest/260x190/' . $player['personId'] . '.png'}}" alt="{{ $player['temporaryDisplayName']}}">
            </div>
            <div class="col-md-7 d-flex align-items-end">
              <div class="card-body position-relative pb-0">
                <img src="{{'https://cdn.nba.com/logos/nba/' . (end($player['teams'])["teamId"]) . '/primary/L/logo.svg'}}" alt="" class='teamsicon'>
                <p class="card-text m-0">
                  <small>
                  @foreach($teams['league']['standard'] as $team)
                    @if( $team['teamId'] === end($player['teams'])["teamId"])
                      {{$team['fullName']}}
                    @endif
                  @endforeach
                  
                    | # {{$player['jersey']}} | {{$player['teamSitesOnly']['posFull']}}
                  </small>
                </p>
                <h5 class="card-title">{{$player['firstName']}} {{$player['lastName']}} </h5>
                <p class="card-text mb-0">
                  <small>HEIGHT: </small>
                  <small class="text-muted"> {{$player['heightFeet']}}' {{$player['heightInches']}}" ({{$player['heightMeters']}}m)</small>
                </p>
                <p class="card-text mb-0">
                  <small>WEIGHT: </small> 
                  <small class="text-muted"> {{$player['weightPounds']}}lb ({{$player['weightPounds']}}kg)</small>
                </p>
                <p class="card-text mb-0">
                  <small>BIRTHDATE: </small> 
                  <small class="text-muted"> {{$player['dateOfBirthUTC']}}</small>
                </p>
              </div>
            </div>
          </div>
        </div>

          @endif
        @endforeach

        </div>
      </div>   
    </div>

@endsection
