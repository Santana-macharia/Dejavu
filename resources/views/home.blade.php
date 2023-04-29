@extends('layouts.app')

@section('content')
  <h1>Product Form</h1>
  <form class="my-form" id="product-form">
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

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="modal-text"></p>
    </div>
  </div>

  <script src="{{ asset('js/home.js') }}"></script>
  <script>
    const productForm = document.getElementById('product-form');
    const modal = document.getElementById('modal');
    const modalText = document.getElementById('modal-text');

    productForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const formData = new FormData(productForm);
      const url = 'https://dejavutechkenya.com/dejavuurls/dejavuurls.php';

      fetch(url, {
        method: 'POST',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: {
          'Content-Type': 'application/json'
        }
      })
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          modalText.innerText = JSON.stringify(data);
          modal.style.display = 'block';
        })
        .catch(error => {
          modalText.innerText = 'Error: ' + error;
          modal.style.display = 'block';
        });
    });

    modal.querySelector('.close').addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>
@endsection
