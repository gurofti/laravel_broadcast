@extends('layouts.app')

@section('content')
    <example-component v-bind:id="{{ \Illuminate\Support\Facades\Auth::user()->id }}"></example-component>
@endsection
