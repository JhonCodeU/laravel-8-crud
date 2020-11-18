@extends('layouts.template')
@section('title','hospital')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Create new Category</h1>
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
                <form action="{{ route('categories.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control" value="{{old('status')}}">
                          <option selected>Choose...</option>
                          <option value="ACTIVE">ACTIVE</option>
                          <option value="INACTIVE">INACTIVE</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                <div class="col mt-4">
                        <a href="{{route('categories.index')}}" class="btn btn-danger btn-block">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
