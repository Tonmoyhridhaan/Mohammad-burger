<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List & Cart</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Product List & Cart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Left Part - Product List -->
            <div class="col-lg-7">
              <h6>Product List</h6>
              <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active" onclick="filterProducts('Category 1')">
                  <input type="radio" name="category" id="category1" autocomplete="off" checked> Category 1
                </label>
                <label class="btn btn-secondary" onclick="filterProducts('Category 2')">
                  <input type="radio" name="category" id="category2" autocomplete="off"> Category 2
                </label>
              </div>
              <div id="productList">
                <!-- Product list will be dynamically populated here -->
                <div class="product-item" data-category="Category 1" data-name="Product 1" data-price="10">
                  <img src="product1.jpg" alt="Product 1" class="img-fluid mb-2">
                  <span>Product 1 - $10</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="addToCart('Product 1', 10)">Add</button>
                </div>
                <div class="product-item" data-category="Category 1" data-name="Product 2" data-price="15">
                  <img src="product2.jpg" alt="Product 2" class="img-fluid mb-2">
                  <span>Product 2 - $15</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="addToCart('Product 2', 15)">Add</button>
                </div>
                <div class="product-item" data-category="Category 2" data-name="Product 3" data-price="20" style="display: none;">
                  <img src="product3.jpg" alt="Product 3" class="img-fluid mb-2">
                  <span>Product 3 - $20</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="addToCart('Product 3', 20)">Add</button>
                </div>
                <div class="product-item" data-category="Category 2" data-name="Product 4" data-price="25" style="display: none;">
                  <img src="product4.jpg" alt="Product 4" class="img-fluid mb-2">
                  <span>Product 4 - $25</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="addToCart('Product 4', 25)">Add</button>
                </div>
              </div>
            </div>
            <!-- Right Part - Cart -->
            <div class="col-lg-5">
              <h6>Cart</h6>
              <div id="cart">
                <!-- Cart items will be dynamically populated here -->
              </div>
              <hr>
              <div id="totalPrice">
                Total: $0.00
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="confirmOrder()">Confirm Order</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript to handle dynamic content and interactions -->
  <script>
    // Function to add product to cart
    function addToCart(name, price) {
      const existingCartItem = document.querySelector(`.cart-item[data-name="${name}"]`);
      if (existingCartItem) {
        const quantityInput = existingCartItem.querySelector('input');
        const newQuantity = parseInt(quantityInput.value) + 1;
        quantityInput.value = newQuantity;
      } else {
        const cart = document.getElementById('cart');
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.setAttribute('data-name', name);
        cartItem.setAttribute('data-price', price);
        cartItem.innerHTML = `
          <div class="mb-2">
            <img src="product1.jpg" alt="${name}" class="img-fluid mb-1" style="max-width: 50px;">
            <span>${name} - $${price}</span>
            <input type="number" class="form-control form-control-sm ml-2" value="1" onchange="updateCartItem(this)">
            <button class="btn btn-sm btn-danger ml-2" onclick="removeFromCart(this)">Remove</button>
          </div>
        `;
        cart.appendChild(cartItem);
      }
      updateTotalPrice();
    }

    // Function to remove product from cart
    function removeFromCart(button) {
      button.parentElement.parentElement.remove();
      updateTotalPrice();
    }

    // Function to update cart item quantity
    function updateCartItem(input) {
      const quantity = parseInt(input.value);
      if (quantity <= 0) {
        input.value = 1;
      }
      updateTotalPrice();
    }

    // Function to update total price
    function updateTotalPrice() {
      const cartItems = document.querySelectorAll('.cart-item');
      let totalPrice = 0;
      cartItems.forEach(item => {
        const price = parseFloat(item.getAttribute('data-price'));
        const quantity = parseInt(item.querySelector('input').value);
        totalPrice += price * quantity;
      });
      document.getElementById('totalPrice').textContent = `Total: $${totalPrice.toFixed(2)}`;
    }

    // Function to filter products by category
    function filterProducts(category) {
      const productItems = document.querySelectorAll('.product-item');
      productItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (itemCategory === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }

    // Function to confirm order
    function confirmOrder() {
      const cartItems = document.querySelectorAll('.cart-item');
      if (cartItems.length === 0) {
        alert('Your cart is empty!');
      } else {
        let orderDetails = '';
        let totalPrice = 0;
        cartItems.forEach(item => {
          const name = item.getAttribute('data-name');
          const price = parseFloat(item.getAttribute('data-price'));
          const quantity = parseInt(item.querySelector('input').value);
          const subtotal = price * quantity;
          orderDetails += `${name} - Quantity: ${quantity} - Subtotal: $${subtotal.toFixed(2)}\n`;
          totalPrice += subtotal;
        });
        alert(`Your order has been confirmed!\n\n${orderDetails}\nTotal Price: $${totalPrice.toFixed(2)}`);
      }
    }
  </script>

</body>
</html>

