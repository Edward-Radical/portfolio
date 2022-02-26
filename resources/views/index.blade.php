@extends('layouts.app')



@section('content')

    
    <div class="container flex-column">
        
        <div class="row mt-3">
            <div class="col">
                <ul class="nav d-flex justify-content-around">
                    <a class="text-decoration-none" href="about">
                        <li class="d-flex justify-content-center align-items-center">item 1</li>
                    </a>
                    <a class="text-decoration-none" href="#">
                        <li class="d-flex justify-content-center align-items-center">item 2</li>
                    </a>
                    <a class="text-decoration-none" href="#">
                        <li class="d-flex justify-content-center align-items-center">item 3</li>
                    </a>
                  </ul>
            </div>
        </div>

        <div class="center d-flex flex-column justify-content-center align-items-center align-self-center mt-5">

            <div class="row">
                <div class="col d-flex justify-content-center flex-column align-items-center">
                    <h1>greetins</h1>
                    <h4 class="mt-2">greetins</h4>
                </div>
            </div>
    
            <div class="row d-flex justify-content-between w-50 mt-4">
                <div class="col-4 cat_sound d-flex justify-content-center align-items-center">
                    <a href="link1" class="text-decoration-none" >link 1</a>   
                </div>

                <div class="col-4 cat_dev d-flex justify-content-center align-items-center">
                    <a href="link2" class="text-decoration-none" >link 2</a>
                </div>
            </div>

        </div>

        

        <div class="row fixed-bottom mb-3 w-100 d-flex justify-content-center align-items-center">
            <div class="col-10 footer d-flex justify-content-center align-items-center">
               <p class="mb-0">footer</p>
            </div>
        </div>
       
    </div>

@endsection  
