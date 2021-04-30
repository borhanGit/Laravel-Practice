@extends('master')
@section('content')
<form action="{{route('register')}}" method="post" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        @if ($errors->count()==1)
         {{$errors->first()}}
        
            
        @else
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
            
        @endif
            
   
       
    </div>
@endif
        @if (session()->has('message'))

             <div class="alert alert-success">
       
                  {{session('message')}}

            </div>
        @endif
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" value="{{old('password')}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Photo</label>
      <input type="file" name="photo" class="form-control"  id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection
