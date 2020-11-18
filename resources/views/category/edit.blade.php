@extends('layouts.template')
@section('title','hospital')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-4">Edit Category</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    - {{$error}} <br>
                @endforeach
            </div>
            @endif
            <form action="{{ route('categories.update', $idCategory) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name', $idCategory->name)}}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control">
                        <option selected>Choose...</option>
                        <option value="ACTIVE" {{(old('status', $idCategory->status) == ('ACTIVE')) ? 'selected': '' }}>Active</option>
                        <option value="INACTIVE" {{(old('status', $idCategory->status) == ('INACTIVE')) ? 'selected': '' }}>Inactive</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
            <div class="col mt-4">
                    <a href="{{route('categories.index')}}" class="btn btn-danger btn-block">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection