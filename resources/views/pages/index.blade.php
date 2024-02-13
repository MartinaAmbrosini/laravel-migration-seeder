@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
     <h1>Treni: {{count($trains)}}</h1>
@endsection
