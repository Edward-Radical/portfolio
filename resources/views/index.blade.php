@extends('layouts.app')



@section('content')

    
    <div class="container">
        
        <div class="row" style="border:2px solid black;">
            <div class="col">
                <ul class="nav d-flex justify-content-around">
                    <li class="nav-item">
                      <a class="nav-link active" href="about">item 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">item 2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">item 3</a>
                    </li>
                  </ul>
            </div>
        </div>

        <div class="row" style="height:70vh">
            <div class="col d-flex justify-content-center flex-column align-items-center">
                <p class="d-block">greetins</p>
                <a href="link1" class="btn btn-primary btn-lg active mb-2" role="button" aria-pressed="true">link 1</a>
                <a href="link2" class="btn btn-primary btn-lg active mt-2" role="button" aria-pressed="true">link 2</a>
            </div>
        </div>

        <div class="row fixed-bottom" style="border:2px solid black;">
            <div class="col d-flex justify-content-center">
                footer
            </div>
        </div>
       
    </div>

@endsection  
