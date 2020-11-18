@extends('layouts.template')
@section('title','show')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="alert alert-info text-center">Details of "{{$category->name}}"</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="id"><strong>Id: </strong>{{$category->id}}</label>
                </div>  

                <div class="form-group">
                  <label for="name"><strong>Name: </strong>{{$category->name}}</label>
                </div>

                <div class="form-group">
                    <label for="status"><strong>Status: </strong>{{$category->status}}</label>
                </div>
    
                <div class="form-group">
                  <label for="created_at"><strong>Created: </strong>{{($category->created_at != null) ? $category->created_at : 'There is no information.'}}</label>
                </div>
                <div class="form-group">
                  <label for="updated_at"><strong>Updated: </strong>{{(($category->updated_at != null) && ($category->updated_at != $category->created_at)) ? $category->updated_at : 'Never been updated.'}}</label>
                </div>

                <div class="row">
                    <div class="col">
                      <a class="btn btn-outline-dark btn-block" role="button" href="{{ url('/categories/' . $category->id . '/edit')}}">Edit</a>
                    </div>
                  </div>   

                <h4 class="text-center m-4">Hospitals</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Entity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($category->hospital as $hospital)
                        <tr>
                            <td>{{$hospital->id}}</td>
                            <td>{{$hospital->name}}</td>
                            <td>{{$hospital->city}}</td>
                            <td>{{$hospital->entity}}</td>
                            <td>{{$hospital->is_active ? 'True' : 'False'}}</td>
                            <td>

                              <form action="{{url('/categories/' . $category->id . '/hospitals/' . $hospital->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{url('/categories/' . $category->id . '/hospitals/' . $hospital->id . '/edit')}}" class="block btn btn-primary">Edit</a>

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro quieres Borrar este archivo?');">
                                  Delete
                                </button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="row">
                      <div class="col">
                        <button class="btn btn-success btn-block mt-2">
                          <a style="text-decoration: none; color: white" href="{{ url('categories/' . $category->id . '/hospitals/create')}}" role="button">Add Hospital</a>
                        </button>
                      </div>

                      <div class="col">
                        <form action="{{ route('categories.sendEmail', $category) }}" method="POST">
                          @csrf
                          <button 
                            type="submit" 
                            class="btn btn-primary btn-block mt-2"
                            onclick="return confirm('Estas seguro que deseas enviar el Email ?')">Send Email</button>
                        </form>
                      </div>
                  </div>
                
                <div class="row">
                  <div class="col">
                    <a href="{{ route('categories.index') }}" class="btn btn-danger btn-block mt-2">Go back</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection