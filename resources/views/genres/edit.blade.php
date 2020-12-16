@extends('layouts.backend',['title' => $title])

@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('genres.edit',$genre) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-4">
                    <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name')?? $genre->name }}" placeholder="Name" aria-describedby="helpId">
                </div>
              <button type="submit" class="btn btn-primary">Update</button>    
            </form>
        </div>
    </div>
@endsection