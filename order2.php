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

  <!-- Main Modal -->
  <div class="modal fade" id="exampleModal" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel"
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
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 1', 10)">+</button>
                </div>
                <div class="product-item" data-category="Category 1" data-name="Product 2" data-price="15">
                  <img src="product2.jpg" alt="Product 2" class="img-fluid mb-2">
                  <span>Product 2 - $15</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 2', 15)">+</button>
                </div>
                <div class="product-item" data-category="Category 2" data-name="Product 3" data-price="20" style="display: none;">
                  <img src="product3.jpg" alt="Product 3" class="img-fluid mb-2">
                  <span>Product 3 - $20</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 3', 20)">+</button>
                </div>
                <div class="product-item" data-category="Category 2" data-name="Product 4" data-price="25" style="display: none;">
                  <img src="product4.jpg" alt="Product 4" class="img-fluid mb-2">
                  <span>Product 4 - $25</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 4', 25)">+</button>
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

  <!-- Sub-Modal for Add-ons -->
  <div class="modal fade" id="addOnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Select Add-ons</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="addonOptions">
          <!-- Add-on options will be dynamically populated here based on the selected category -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="addToCartWithAddOns()">Add</button>
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
    let selectedProduct;
    let selectedProductPrice;

    // Function to show add-on modal
    function showAddOnModal(productName, price) {
      selectedProduct = productName;
      selectedProductPrice = price;
      
      // Clear previous add-on options
      document.getElementById('addonOptions').innerHTML = '';

      // Populate add-on options based on the selected category
      const category = document.querySelector('input[name="category"]:checked').getAttribute('id');
      let addOnsHTML = '';
      if (category === 'category1') {
        addOnsHTML += `
          <div class="form-group">
            <label for="addon1">Add-on 1 for Category 1 ($2.00)</label>
            <input type="checkbox" class="form-check-input addon-checkbox" id="addon1" value="Add-on 1" data-price="2.00">
          </div>
          <div class="form-group">
            <label for="addon2">Add-on 2 for Category 1 ($3.00)</label>
            <input type="checkbox" class="form-check-input addon-checkbox" id="addon2" value="Add-on 2" data-price="3.00">
          </div>
        `;
      } else if (category === 'category2') {
        addOnsHTML += `
          <div class="form-group">
            <label for="addon3">Add-on 1 for Category 2 ($1.50)</label>
            <input type="checkbox" class="form-check-input addon-checkbox" id="addon3" value="Add-on 3" data-price="1.50">
          </div>
          <div class="form-group">
            <label for="addon4">Add-on 2 for Category 2 ($2.50)</label>
            <input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="Add-on 4" data-price="2.50">
          </div>
        `;
      }

      document.getElementById('addonOptions').innerHTML = addOnsHTML;
      $('#addOnModal').modal('show');
    }

    // Function to add product to cart with selected add-ons
    function addToCartWithAddOns() {
      const selectedAddOns = [];
      const selectedAddOnInputs = document.querySelectorAll('.addon-checkbox:checked');
      selectedAddOnInputs.forEach(input => {
        selectedAddOns.push({
          name: input.value,
          price: parseFloat(input.getAttribute('data-price'))
        });
      });

      let itemDescription = selectedProduct;
      let totalPrice = selectedProductPrice;

      selectedAddOns.forEach(addOn => {
        itemDescription += ` + ${addOn.name}`;
        totalPrice += addOn.price;
      });

      const cart = document.getElementById('cart');
      const cartItem = document.createElement('div');
      cartItem.classList.add('cart-item');
      cartItem.innerHTML = `
        <div class="mb-2">
          <span>${itemDescription} - $${totalPrice.toFixed(2)}</span>
          <button class="btn btn-sm btn-danger ml-2" onclick="removeFromCart(this)">x</button>
        </div>
      `;
      cart.appendChild(cartItem);
      updateTotalPrice();
      $('#addOnModal').modal('hide');
    }

    // Function to remove product from cart
    function removeFromCart(button) {
      button.parentElement.parentElement.remove();
      updateTotalPrice();
    }

    // Function to update total price
    function updateTotalPrice() {
      const cartItems = document.querySelectorAll('.cart-item');
      let totalPrice = 0;
      cartItems.forEach(item => {
        const price = parseFloat(item.textContent.match(/\$([\d.]+)/)[1]);
        totalPrice += price;
      });
      document.getElementById('totalPrice').textContent = `Total: $${totalPrice.toFixed(2)}`;
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
          orderDetails += `${item.textContent.trim()}\n`;
          totalPrice += parseFloat(item.textContent.match(/\$([\d.]+)/)[1]);
        });
        alert(`Your order has been confirmed!\n\n${orderDetails}\nTotal Price: $${totalPrice.toFixed(2)}`);
      }
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
  </script>

</body>
</html>
