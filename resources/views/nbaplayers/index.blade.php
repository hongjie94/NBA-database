@extends('layouts.app')

@section('content')
    
<div class='bg'>
  <h1 class="text-center p-2 my-3 title">2021 NBA Players</h1>
  <div class="container py-5 mt-5">
    <div class="row">
      @foreach($players['league']['standard'] as $player)
        @if(in_array($player['personId'], $playerNoImages) && $player['isActive'])
        <div class="col-lg-6 col-12">
          <div class="card rounded mb-4" style="width: 100%;">
            <div class="row">
              <div class="col-md-5 col-sm-6 m-auto pl-3 pb-3 xs-playerimages">
                <img class="img-fluid rounded-start" src="https://cdn.nba.com/headshots/nba/latest/260x190/logoman.png" alt="{{ $player['temporaryDisplayName']}}">  
              </div>
              <div class="col-md-7 col-sm-6 d-flex align-items-end">
                <div class="card-body position-relative xs-card-body pl-0">
                   <img src="https://cdn.nba.com/logos/nba/{{$player['teams'][0]['teamId']}}/primary/L/logo.svg" alt="TEAM" class='teamsicon'> 
                  <p class="card-text m-0">
                    <small class="d-inline-block text-truncate" style="max-width: 150px;">
                    @foreach($teams['league']['standard'] as $team)
                      @if($team['teamId'] === end($player['teams'])['teamId'])
                          {{$team['fullName']}}
                      @elseif($team['teamId'] === end($player['teams'])['teamId'] && !($team['fullName']))
                          -
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
        </div>

        @elseif(!in_array($player['personId'], $playerNoImages) && $player['isActive']) 
        <div class="col-lg-6 col-12">
          <div class="card rounded mb-4" style="width: 100%;">
            <div class="row">
              <div class="col-md-5 col-sm-6 m-auto pl-3 pb-3 xs-playerimages">
                <img class="img-fluid rounded-start pt-2" src="https://cdn.nba.com/headshots/nba/latest/260x190/{{$player['personId']}}.png"  alt="{{ $player['personId']}}">
              </div>
              <div class="col-md-7 col-sm-6 d-flex align-items-end">
                <div class="card-body position-relative xs-card-body pl-1">
                  <img src="https://cdn.nba.com/logos/nba/{{end($player['teams'])['teamId']}}/primary/L/logo.svg" alt="UNKNOWN TEAM" class='teamsicon'>
                  <p class="card-text m-0">
                    <small class="d-inline-block text-truncate" style="max-width: 250px;">
                      @foreach($teams['league']['standard'] as $team)
                        @if( $team['teamId'] === end($player['teams'])["teamId"])
                          {{$team['fullName']}}
                          {{$team['tricode']}}
                        @endif
                      @endforeach
                        @if($player['jersey'] && $player['teamSitesOnly']['posFull'])
                        | # {{$player['jersey'] }} | {{$player['teamSitesOnly']['posFull']}}
                        @elseif(!$player['jersey'] || !$player['teamSitesOnly']['posFull'])
                        | # - | -
                      @endif
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
        </div>
        @endif
      @endforeach
    </div>
</div>   
</div>
@endsection
