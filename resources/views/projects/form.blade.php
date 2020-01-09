  
    
    @csrf
    {{-- //           title           / --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="@if(isset($project)) {{$project->title}}  @endif {{old('title')}}">
        @error ('title')
            <p class="text-danger"> {{ $message}} </p>
        @enderror
    </div>

    {{-- //           body_script           / --}}
    <div class="form-group">
        <label for="body_script">Body Script</label>
        <textarea name="body_script" id="body_script" class="form-control @error('body_script') is-invalid @enderror" cols="30" rows="10" placeholder="Write Body script here ..." value="@if(isset($project)) {{$project->body_script}}  @endif  {{old('body_script')}}"></textarea>  
        @error('body_script')
            <p class="text-danger"> {{$message}} </p>
        @enderror
    </div>

    <div class="row">
        {{-- //           duration           / --}}
        <div class="col">
            <label for="duration">Duration</label>
            <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" value="@if(isset($project)) {{$project->duration}}  @endif {{old('duration')}} ">
            @error('duration')
                <p class="text-danger"> {{ $message }} </p>
            @enderror
        </div>
        
        {{-- //           completed at           / --}}
        <div class="col">
            <label for="completed_at">Completed at</label>
            <input type="date" class="form-control @error ('completed_at')  is-invalid @enderror" name="completed_at" id="completed_at" value="@if(isset($project)) {{$project->completed_at}}  @endif  {{old('completed_at')}}">
            @error('completed_at')
                <p class="text-danger"> {{$message }}</p>
            @enderror
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="submit" value="Create" class="button" style="background:none">
    </div>