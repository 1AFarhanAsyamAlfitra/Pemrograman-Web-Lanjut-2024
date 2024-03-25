@extends('layout.app')

@section('subtitle', 'welcome')
@section('content_header_title', 'home')
@section('content_header_subtitle', 'welcome')

{{-- 
@section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content_body')
    <P>Welcome to this beautiful admin panel. </P>
@stop

@push('css')
    
@endpush

@push('js')
    <script>console.log("Hi, I'm using the laravel-AdminLTE package!")</script>
@endpush