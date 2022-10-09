@extends('Layouts.app')
@section('content')
<table class="table">
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
    </tr>
    @foreach ($products as $p)
    <tr>
        <td>{{$p->productId}}</td>
        <td>{{$p->productName}}</td>  
    </tr>
     
    @endforeach

 


</table>
@endsection