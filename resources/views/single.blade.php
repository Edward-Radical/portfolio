@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col justify-content-center">
            <a href="javascript:history.back()"><img src="../img/back.svg" alt="back_icon" class="back_icon"></a>
            <a href="index"><img src="../img/home.svg" alt="home_icon" class="home_icon"></a>
            <x-Header :title="$sound->title" :role="$sound->role" />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="video">
                <iframe width="1176px" height="533px" src="https://www.youtube.com/embed/ILwLN6hV-X8?autoplay=1" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection  
