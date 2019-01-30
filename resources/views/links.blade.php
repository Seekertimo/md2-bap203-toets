@extends('layouts.master')

@section('content')

@foreach($links as $link)
        @if ($loop->first)

        @endif

        @if ($loop->last)

        @endif

        <a href="{{$link->url}}" >Link</a>

    @endforeach

    @endsection