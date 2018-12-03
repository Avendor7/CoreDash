@extends('layouts.default')
@section('content')
<div class="card text-white bg-primary" style="width: 100%;">
    <div class="card-header">IP Addresses</div>
    <div class="card-body">
      <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Hostname</th>
                <th scope="col">IP Address</th>
                <th scope="col">Operating System</th>
                <th scope="col">VM</th>
                <th scope="col">Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ipaddresses as $ipaddress)
        <tr>
            <td>{{$ipaddress->id}}</td>
            <td>{{$ipaddress->hostname}}</td>
            <td>{{$ipaddress->ip_address}}</td>
            <td>{{$ipaddress->operating_system}}</td>
            <td>{{$ipaddress->vm}}</td>
            <td>{{$ipaddress->notes}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>
</div>


  
  @include('includes.ipaddress.create')


@stop
