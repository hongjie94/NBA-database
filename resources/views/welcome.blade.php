@extends('layouts.app')

@section('content')
      <main class="px-3 bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 p-2">
               <img class='w-100 px-5 py-3' src="https://firebasestorage.googleapis.com/v0/b/imagesbucket-468ae.appspot.com/o/NBA%20DATABASE%2FNBAHERO.png?alt=media&token=4c931ddd-743c-44fc-819a-98bf52c5144d" alt="not-found">
            </div>
            <div class="col-lg-6 col-12 p-2 d-flex flex-column justify-content-center ">
              <h1 class="title text-white">2021 NBA DATABASE</h1>
              <p class="lead mt-4 text-white">NBA Basketball Statistics Data provides all 
                2021 NBA teams and players for season 2020-2021  all source from 
                Home of the Official <a href="https://www.nba.com" target="_blank" >NBA</a> 
                Advanced Statistics and Analytics.</p>
              <p class="lead pt-2">
                <a href="/teams" class="btn btn-lg btn-secondary fw-bold mr-2 px-4">TEAMS</a>
                <a href="/players" class="btn btn-lg btn-secondary fw-bold ml-2 px-4">PLAYERS</a>
              </p>
            </div>
          </div>

        </div>
       
       
      </main>
@endsection
