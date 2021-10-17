@extends('layouts.app')

@section('content')
<div class="bg">
<h1 class="text-center p-2 my-3 title">All Teams</h1>
<div class='container py-5'>
  <h2 class='pb-2 border-bottom text-uppercase sub-title'>Atlantic</h2>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Atlantic'  ) 
    
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
      <a href="/team/{{$team['Key']}}" class='cardlinks'>
        <div class='card shadow p-3 rounded my-3 teamcard'>
          <img class="card-img-top p-3 xs-height" style="height:200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
          <small >City: {{$team['City']}}</small>
          <small>Team: {{$team['Name']}}</small>
        </div>
      </a>  
      </div>
   
      @endif
    @endforeach
  </div> 
 
  <h2 class='pb-2 border-bottom text-uppercase sub-title'>Central</h2>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Central'  ) 
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
        <a href="/team/{{$team['Key']}}" class='cardlinks'>
          <div class='card shadow p-3 rounded my-3 teamcard'>
            <img class="card-img-top p-3 xs-height" style="height:200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
            <small >City: {{$team['City']}}</small>
            <small>Team: {{$team['Name']}}</small>
          </div>
        </a>  
      </div>
      @endif
    @endforeach
  </div> 


  <h2 class='pb-2 border-bottom text-uppercase sub-title'>Southeast</h2>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Southeast'  ) 
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
        <a href="/team/{{$team['Key']}}" class='cardlinks'>
          <div class='card shadow p-3 rounded my-3 teamcard'>
            <img class="card-img-top p-3 xs-height" style="height: 200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
            <small >City: {{$team['City']}}</small>
            <small>Team: {{$team['Name']}}</small>
          </div>
        </a>  
      </div>
      @endif
    @endforeach
  </div>

  <h2 class='pb-2 border-bottom text-uppercase sub-title'>Northwest</h1>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Northwest') 
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
        <a href="/team/{{$team['Key']}}" class='cardlinks'>
          <div class='card shadow p-3 rounded my-3 teamcard'>
            <img class="card-img-top p-3 xs-height" style="height: 200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
            <small >City: {{$team['City']}}</small>
            <small>Team: {{$team['Name']}}</small>
          </div>
        </a>
      </div>
      @endif
    @endforeach
  </div> 
  

  <h2 class='pb-2 border-bottom text-uppercase sub-title'>PACIFIC</h2>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Pacific'  ) 
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
        <a href="/team/{{$team['Key']}}" class='cardlinks'>
          <div class='card shadow p-3 r ounded my-3 teamcard'>
            <img class="card-img-top p-3 xs-height" style="height: 200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
            <small >City: {{$team['City']}}</small>
            <small>Team: {{$team['Name']}}</small>
          </div>
        </a>
      </div>
      @endif
    @endforeach
  </div> 


  <h2 class='pb-2 border-bottom text-uppercase sub-title'>SOUTHWEST</h2>
  <div class="row mb-5 pb-5 justify-content-md-between auto-p">
    @foreach($nbateams as $team)
      @if( $team['City'] != 'Team' && $team['Division'] === 'Southwest'  ) 
      <div class="col-lg-2 col-md-3 col-sm-4 col-12 p-1 xs-display" style="max-width: 230px; min-width: 175px;">
        <a href="/team/{{$team['Key']}}" class='cardlinks'>
          <div class='card shadow p-3 rounded my-3 teamcard'>
            <img class="card-img-top p-3 xs-height" style="height: 200px;" src="{{$team['WikipediaLogoUrl']}}" alt="{{$team['Name']}}">
            <small >City: {{$team['City']}}</small>
            <small>Team: {{$team['Name']}}</small>
          </div>
        </a>
      </div>
      @endif
    @endforeach
  </div> 
</div>
</div>
@endsection