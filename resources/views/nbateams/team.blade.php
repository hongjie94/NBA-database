@extends('layouts.app')

@section('content')

@foreach($teamsDatas  as $teamData )
  @if($teamData['Key'] === $key)
  <div class="pt-5">
    <div class='container card' style="background: #FFFF">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="imgdiv">
          <img src="https://cdn.nba.com/logos/nba/{{$teamData['NbaDotComTeamID']}}/primary/L/logo.svg" alt="{{$key}}"  style="width: 15rem;">
        </div>
       
        <div class="d-flex flex-column align-items-center justify-content-center">
          <h1 class="text-center p-2 title text-uppercase">{{$teamData['City']}} {{$teamData['Name']}}</h1>
          <h3 class='text-center text-muted sub-title'>2021 Team Players 
            <span class="badge rounded-pill text-white" style="background: #{{$teamData['PrimaryColor']}}">
              {{count($team)}}
            </span> 
          </h3>
        </div>

        <div class='pb-5 pt-3'>
          <button class='btn px-5 rounded-pill text-white d-flex align-items-center justify-content-center' style="background: #{{$teamData['PrimaryColor']}}">
          <svg class="starSvg" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
          {{$teamData['City']}} </button>
        </div>
       
       
      </div>
    </div>
   
  @endif
@endforeach
<div class="container pb-5 pt-3">
  <div class="row py-5 row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
  @foreach($team as $teamplayer)
  <div class="col my-3 xs-teamplayers_col">
  @foreach($teamsDatas  as $teamData )
    @if($teamData['Key'] === $key)
    <a href="/team/{{$key}}/player/{{$teamplayer['PlayerID']}}" class='cardlinks'>
      <div class="card teamplayercards">
        <div class="row xs-teamplayers_row">
          <div class="col-4 p-2">
            <img src="{{$teamplayer['PhotoUrl']}}" alt="{{$teamplayer['FirstName']}}" class='px-3'>
          </div>
          <div class="col-8 pl-3 line-height-sm d-flex align-items-end p-1">
            <div>
              <p class='mb-0'>#{{$teamplayer['Jersey']}} | {{$teamplayer['Position']}} </p>
              <p class='mb-0 text-truncate' style="max-width: 156px;">
                {{$teamplayer['FirstName']}} {{$teamplayer['LastName']}}
              </p>
              <small class='text-muted'>
                Height: {{floor($teamplayer['Height'] / 12) }}' {{(($teamplayer['Height']/ 12 )- floor($teamplayer['Height'] / 12)) * 12}}"
              </small>
              <br>
              <small class='text-muted'>
                Weight: {{$teamplayer['Weight']}}lb
              </small>
              <br>
              <small class='text-muted'>
                DOB: {{str_replace('T00:00:00', '', $teamplayer['BirthDate']) }}
              </small>
            </div>
          </div>
        </div>
      </div>
    </a> 
    @endif
  @endforeach 
  </div>
  @endforeach
  </div>
</div>
</div>
@endsection
