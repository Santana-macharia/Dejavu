@extends('layouts.app')

@section('content')
  <h1>Records Table</h1>
  <table>
    <thead>
        <tr>
            <th>Date Created</th>
            <th>Username</th>
            <th>Product Name</th>
            <th>Current Quantity</th>
            <th>Transfer Quantity</th>
            <th>Department Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
            <tr>
            @if(isset($record['date_created']))
  <td>{{ $record['date_created'] }}</td>
@else
  <td>-</td>
@endif

@if(isset($record['username']))
  <td>{{ $record['username'] }}</td>
@else
  <td>-</td>
@endif

@if(isset($record['product']))
  <td>{{ $record['product'] }}</td>
@else
  <td>-</td>
@endif

@if(isset($record['current_quantity']))
  <td>{{ $record['current_quantity'] }}</td>
@else
  <td>-</td>
@endif

@if(isset($record['transfered_qty']))
  <td>{{ $record['transfered_qty'] }}</td>
@else
  <td>-</td>
@endif

@if(isset($record['department']))
  <td>{{ $record['department'] }}</td>
@else
  <td>-</td>
@endif

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
