@extends('layouts.app')



@section('content')

    
    <div class="container flex-column" >
        
        <div class="row mt-5">
            <div class="col">
                <ul class="nav d-flex justify-content-around">
                    <a class="text-decoration-none" href="about">
                        <li class="d-flex justify-content-center align-items-center">ABOUT</li>
                    </a>
                    <a class="text-decoration-none" href="#">
                        <li class="d-flex justify-content-center align-items-center">CV</li>
                    </a>
                    <a class="text-decoration-none" href="#">
                        <li class="d-flex justify-content-center align-items-center">CONTACT</li>
                    </a>
                  </ul>
            </div>
        </div>

        <div class="center w-75 d-flex flex-column justify-content-center align-items-center">

            <div class="row mb-3">
                <div class="col d-flex justify-content-center flex-column align-items-center">
                    <h1>HI, I'M ARIANNA</h1>
                    <h4 class="mt-2">Sound Designer and Programmer</h4>
                </div>
            </div>
    
            <div class="row d-flex justify-content-between mt-4" style="width:779px;">
                <div class="col-6 cat_sound d-flex justify-content-center align-items-center">
                    <a href="link1" class="text-decoration-none" >SOUND</a>   
                </div>

                <div class="col-6 cat_dev d-flex justify-content-center align-items-center">
                    <a href="link2" class="text-decoration-none" >PROGRAMMING</a>
                </div>
            </div>

        </div>

        

        <div class="row fixed-bottom mb-3 w-100 d-flex justify-content-center align-items-center">
            <div class="col-10 footer d-flex justify-content-center align-items-center">
               <p class="mb-0">Copyright - Arianna Parisi parisi.arianna@aol.com 2021</p>
            </div>
        </div>
       
    </div>

@endsection  
