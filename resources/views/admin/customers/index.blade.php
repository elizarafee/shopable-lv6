@extends('layouts.admin')

@section('content')

<table class="table table-sm table-bordered table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">No of Order(s)</th>
    </tr>
  </thead>
  <tbody>
      @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->first_name}}</td>
      <td>{{$customer->last_name}}</td>
      <td>{{$customer->email}}</td>
      <td>23</td>
    </tr>
    @endforeach 
    
  </tbody>
</table>

@endsection