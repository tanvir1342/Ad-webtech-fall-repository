@extends('Layouts.app')
@section('content')

    <h1>contact</h1>


<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Age</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delet</th>
        </tr>
        @foreach ($students as $students)
            <tr>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->email}}</td>
                <td>{{$students->address}}</td>
                <td>{{$students->age}}</td>
                <td><a href="/student/{{$students->id}}"><button class="btn btn-success">View</button></a></td>
                <td><a href="/student/edit/{{$students->id}}"><button class="btn btn-primary">Edit</button></a></td>
                <td><a href="/student/delete/{{$students->id}}"><button class="btn btn-danger">Delte</button></a></td>
               
                
            </tr>
        @endforeach
    </table>
    
       
    
</div>





@endsection