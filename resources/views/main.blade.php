@extends('layouts._layout')

@section('content')
    @include('mainContent/slidebanner')
    @include('mainContent/searchMap')
    @include('mainContent/features')
    @include('mainContent/popular')
    @include('mainContent/testimonial')
    @include('mainContent/properties')
    @include('mainContent/aboutAgent')
    @include('mainContent/blogSection')
    @include('mainContent/contactUs')

@stop
