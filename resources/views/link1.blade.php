@extends('layouts.app')

@section('content')

{{-- {{dd($sound)}} --}}

<div class="box d-flex flex-row justify-content-center flex-wrap m-0 p-0" style="border:2px solid red;">
    @foreach ($sound as $s )

        <x-box :title="$s->title" :immagine="$s->img" :link="$s->id" />
                    
    @endforeach
</div>

@endsection  
