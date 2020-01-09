@extends('layout')
@section('header')
    <h3 class="display-3 m-3">Project Details</h3>
    
    <a href="{{route('projects.index')}}" class="btn btn-info">Return to Projects</a>
    <table class="table mt-5 text-light">
        <thead >
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col"> Body Script</th>
                <th scope="col"> Completed At</th>
                <th scope="col"> Created_at</th>
            </tr>
        </thead>
            <tbody>
                    <tr>     
                        <td>{{$project->id}}</td> 
                        <td>
                            <a href="{{route('projects.create')}}">
                                {{$project->title}} 
                            </a>
                        </td>
                        <td>{{$project->body_script}}</td> 
                        <td>{{$project->completed_at}}</td> 
                        <td>{{$project->created_at}}</td> 
                    </tr>
            </tbody>
    </table>
@endsection