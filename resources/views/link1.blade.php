@extends('layouts.app')

@section('content')

{{-- {{dd($sound)}} --}}

@foreach ($sound as $s )

    <x-box :title="$s->title" :immagine="$s->img" :link="$s->id" />
                 
@endforeach

@endsection  
