@extends('layouts.app')

@section('content')

<header class="title d-flex align-items-center justify-content-center m-auto mt-4 mb-5">
    <a href="javascript:history.back()"><img src="../img/back.svg" alt="" class="back_icon"></a>
    <a href="index.html"><img src="../img/home.svg" alt="" class="home_icon"></a>
    <h1>SOUND DESIGN PROJECTS</h1>
</header>

<div class="box d-flex flex-row justify-content-center flex-wrap mb-5">
    @foreach ($sound as $s )

        <x-box :title="$s->title" :immagine="$s->img" :link="$s->id" />
                    
    @endforeach
</div>

@endsection  
