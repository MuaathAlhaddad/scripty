@extends('layout')
@section('header')
{{-- <div class="container  border border-dark m-5"> --}}
    <h5 class="display-4 text-light text-uppercase">Create New Project</h5>
    <form action="{{ route('projects.store') }}" class="border border-light p-3" method="POST">
        @include('projects.form')
    </form>
{{-- </div> --}}
@endsection