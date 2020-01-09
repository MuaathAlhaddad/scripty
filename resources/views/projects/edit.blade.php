@extends('layout')
@section('header')
<div class="container  border border-dark m-5">
    
    <form action="{{ route('projects.update') }}" method="POST">
        @method('PATCH')
        <input type="hidden" name="project_id" value="@if(isset($project)) {{$project->id}}  @endif ">
        @include('projects.form')
    </form>
</div>
@endsection