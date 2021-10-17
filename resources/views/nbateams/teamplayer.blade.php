@extends('layouts.app')

@section('content')
<div class='p-5' style="background: #{{$bgcolor}}; min-height: 100vh">
<h1 class="text-center text-white px-2 pt-5 title">Player Info</h1>
 <div class="container p-5">
   <div class="row">
    <div class="col-lg-5 col-md-12 offset-lg-1 imageWrap">
      <img class='rounded shadow-lg img-thumbnail w-100 p-2 playerinfoimg'  src="https://www.imagn.com/image/thumb/700-490/{{str_replace('http://cdn.usatsimg.com/api/download/?imageID=', '', $playerDatas['UsaTodayHeadshotUrl']) }}.jpg" alt="{{$playerDatas['FirstName']}} {{$playerDatas['LastName']}}">
    </div>
    <div class="col-lg-5 col-md-12 offset-lg-1 playerinfo text-white">
      <h2 class='title pb-2'>{{$playerDatas['FirstName']}} {{$playerDatas['LastName']}}</h2>
      <div>
        <div>
          <b>Position:</b>
          <span>{{$playerDatas['Position']}} </span>
        </div>
        <div>
          <b>Jersey:</b>
          <span>#{{$playerDatas['Jersey']}} </span>
        </div>
        <div>
          <b>Height:</b>
          <span>{{floor($playerDatas['Height'] / 12) }}' {{(($playerDatas['Height']/ 12 )- floor($playerDatas['Height'] / 12)) * 12}}"</span>
        </div>
        <div>
          <b>Weight:</b>
          <span>{{$playerDatas['Weight']}} lb</span>
        </div>
        <div>
          <b>Birth Date:</b>
          <span>{{str_replace('T00:00:00', '', $playerDatas['BirthDate']) }} </span>
        </div>
        <div>
          <b>Birth City:</b>
          <span>{{$playerDatas['BirthCity']}} </span>
        </div>
        <div>
          <b>Birth Country:</b>
          <span>{{$playerDatas['BirthCountry']}} </span>
        </div>
        <div>
          <b>High School:</b>
          @if($playerDatas['HighSchool'])
          <span>{{$playerDatas['HighSchool']}} </span>
          @else
          <span>Unknown</span>
          @endif
        </div>
        <div>
          <b>College:</b>
          <span>{{$playerDatas['College']}} </span>
        </div>
        <div>
          <b>Salary:</b>
          @if($playerDatas['Salary'])
          <span>${{$playerDatas['Salary']}} </span>
          @else
          <span>Unknown</span>
          @endif
         
        </div>
        <div>
          <b>Experience:</b>
          <span>{{$playerDatas['Experience']}} Years</span>
        </div>
      </div>
    </div>
  </div>
 </div>

</div>  
@endsection