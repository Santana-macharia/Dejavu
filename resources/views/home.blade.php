@extends('layouts.app')

@section('content')
  <h1>Product Form</h1>
  <form class="my-form" id="product-form" method="POST" action="{{ route('product.store') }}">
  @csrf
    <div class="form-row">
        <label for="date_created">Date Created:</label>
        <input type="date" name="date_created" id="date_created" required>
    </div>

    <div class="form-row">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    </div>

    <div class="form-row">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product" id="product" required>
    </div>

    <div class="form-row">
        <label for="current_quantity">Current Quantity:</label>
        <input type="number" name="current_quantity" id="current_quantity" required>
    </div>

    <div class="form-row">
        <label for="transfer_quantity">Transfer Quantity:</label>
        <input type="number" name="transfered_qty" id="transfered_qty" required>
    </div>

    <div class="form-row">
        <label for="department_name">Department Name:</label>
        <input type="text" name="department" id="department" required>
    </div>

    <button type="submit">Submit</button>
    </form>
  <!-- <div id="modal-container">
    <div id="modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modal-text"></p>
      </div>
    </div>
  </div> -->
  <!-- <script>
    function showModal(formData) {
      const modal = document.getElementById('modal');
      const modalText = document.getElementById('modal-text');

      // Display the form data in the modal
      modalText.innerText = JSON.stringify(Object.fromEntries(formData));

      // Show the modal
      modal.style.display = 'block';

      // Send a JSON POST request with the form data to the specified URL
      const url = 'https://dejavutechkenya.com/dejavuurls/dejavurecs.php';
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(Object.fromEntries(formData))
      })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));
    }

    const productForm = document.getElementById('product-form');

    productForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const formData = new FormData(productForm);

      showModal(formData);
    });

    const modal = document.getElementById('modal');
    const modalContainer = document.getElementById('modal-container');

    modal.querySelector('.close').addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
      if (event.target === modalContainer) {
        modal.style.display = 'none';
      }
    });
  </script> -->
@endsection