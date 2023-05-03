@extends('layouts.app')

@section('content')
  <h1>Products List</h1>
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
      @foreach($products as $product)
        <tr>
          <td>{{ $product->date_created }}</td>
          <td>{{ $product->username }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->current_quantity }}</td>
          <td>{{ $product->transfer_quantity }}</td>
          <td>{{ $product->department_name }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
