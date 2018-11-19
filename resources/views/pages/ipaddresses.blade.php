@extends('layouts.default')
@section('content')
<div class="card text-white bg-primary" style="width: 100%;">
    <div class="card-header">IP Addresses</div>
    <div class="card-body">
      <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Hostname</th>
                <th scope="col">IP Address</th>
                <th scope="col">Operating System</th>
                <th scope="col">VM</th>
                <th scope="col">Notes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Inception</th>
                <td>192.168.5.123</td>
                <td>Windows 10</td>
                <td>False</td>
                <td>Dell Laptop</td>
            </tr>
            <tr>
                <th scope="row">Inception</th>
                <td>192.168.5.123</td>
                <td>Windows 10</td>
                <td>False</td>
                <td>Dell Laptop</td>
            </tr>
            <tr>
                <th scope="row">Inception</th>
                <td>192.168.5.123</td>
                <td>Windows 10</td>
                <td>False</td>
                <td>Dell Laptop</td>
            </tr>
        </tbody>
    </table>
    </div>

</div>
@stop