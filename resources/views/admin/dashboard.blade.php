@extends('layouts.admin')

@section('content')

@if(session('message'))
    {{ session('message') }}
@endif

@endsection