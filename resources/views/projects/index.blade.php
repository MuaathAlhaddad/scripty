@extends('layout')
@section('header')
    <h1 class="display-3 m-3">Projects</h1>
    
    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    
    <table class="table mt-5 text-light">
        <div class="text-right mt-3">
            <a class="btn btn-success" href="{{route('projects.create')}}"> Create new project <li class="material-icons" style="font-size: 18px">add</li> </a>
        </div>
        <thead >
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col"> Body Script</th>
                <th scope="col"> Completed At</th>
                <th scope="col"> Created_at</th>
                <th scope="col" colspan="3">Action</th>
            </tr>
        </thead>
        @foreach ($projects as $project)
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
                        <td> 
                            <form  action="{{route('projects.edit')}}" method="POST">
                                @csrf
                                <input type="hidden" name="project_id" value="{{$project->id}}">
                                <button class="btn btn-primary" type="submit"><i class="small material-icons" style="font-size: 15px;">edit</i></button>
                            </form>
                        </td>
                        <td>
                            <form  action="{{route('projects.destroy')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="project_id" value="{{$project->id}}">
                                <button class="btn btn-danger" type="submit"><i class="material-icons" style="font-size: 15px;">delete</i></button>
                            </form>
                        </td> 
                        <td>
                            <form  action="{{route('projects.show')}}" method="POST">
                                @csrf
                                <input type="hidden" name="project_id" value="{{$project->id}}">
                                <button class="btn btn-info" type="submit"><i class="material-icons" style="font-size: 15px;">open_in_new</i></button>
                            </form>
                        </td> 
                    </tr>
            </tbody>
        @endforeach
    </table>
@endsection