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
            @foreach ($data->body as $row)
                <tr>
                    <td>{{ $row->date_created }}</td>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->product }}</td>
                    <td>{{ $row->current_quantity }}</td>
                    <td>{{ $row->transfered_qty }}</td>
                    <td>{{ $row->department }}</td>
                </tr>
            @endforeach
        </tbody>
</table>

@endsection
