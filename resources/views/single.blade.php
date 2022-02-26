@extends('layouts.app')

@section('content')

<x-Header :title="$sound->title" :role="$sound->role" />


<div class="video">
    <iframe width="1176px" height="533px" src="https://www.youtube.com/embed/ILwLN6hV-X8?autoplay=1" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
</div>

@endsection  
