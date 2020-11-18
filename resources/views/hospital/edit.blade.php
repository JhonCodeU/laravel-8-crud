@extends('layouts.template')
@section('title','hospital')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Edit Hospital</h1>
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
                <form action="#" method="POST">

                    @csrf

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{old('name', $hospital->name)}}">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="city" >City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{old('city', $hospital->city)}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="entity">Entity</label>
                                <select id="entity" name="entity" class="form-control">
                                  <option selected>Choose...</option>
                                  <option value="publica" {{(old('entity', $hospital->status) == ('publica')) ? 'selected': '' }}>Publica</option>
                                  <option value="privada" {{(old('entity', $hospital->status) == ('privada')) ? 'selected': '' }}>Privada</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="is_active" name="is_active"
                      {{old('is_active') ? 'checked' : ''}}>
                      <label class="form-check-label" for="is_active">Active</label>
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
