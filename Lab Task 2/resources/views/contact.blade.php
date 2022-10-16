@extends('Layouts.app')
@section('content')

    <h1>contact</h1>
<form action="{{route('contact')}}" method="POST" class="form-group">
    {{csrf_field()}}
    @if ($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>

    </div>
        
    @endif

    <div class="col-md-4 form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>
        <label>Password</label>
        <input type="text" name="comment" value="{{old('comment')}}" class="form-control">
        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">


    </div>
</form>

<div>
    
    @foreach ($person as $persons)
        <li>{{$persons->email}}</li>
       
    @endforeach
</div>





@endsection