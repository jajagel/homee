$(document).ready(function () {
  $(".add-to-cart-full").click(function () {
    let product = $(this).closest(".full-details");
    let productId = product.data("id");
    let productPrice = product.data("price");
    let productName = product.data("name");
    let productImage = product.data("image");

    $.ajax({
      url: "add-to-cart.php",
      method: "POST",
      data: {
        id: productId,
        price: productPrice,
        name: productName,
        image: productImage,
      },
      success: function (response) {
        const product = JSON.parse(response);
        if (product[1] && product[1].count) {
          $("#item-count").html(product[1].count);
        }
        if (
          product[0] &&
          product[0].name &&
          product[0].price &&
          product[0].image &&
          product[0].message
        ) {
          showModal(
            product[0].name,
            product[0].price,
            product[0].image,
            product[0].message
          );
        } else {
          showMessage(product[0] && product[0].message);
        }
      },
    });
  });
});

$(document).ready(function () {
  $(".add-to-cart").click(function () {
    let product = $(this).closest(".add-btn-dv");
    let productId = product.data("id");
    let productPrice = product.data("price");
    let productName = product.data("name");
    let productImage = product.data("image");

    $.ajax({
      url: "add-to-cart.php",
      method: "POST",
      data: {
        id: productId,
        price: productPrice,
        name: productName,
        image: productImage,
      },
      success: function (response) {
        const product = JSON.parse(response);

        if (product[1] && product[1].count) {
          $("#item-count").html(product[1].count);
        }
        if (
          product[0] &&
          product[0].name &&
          product[0].price &&
          product[0].image &&
          product[0].message
        ) {
          showModal(
            product[0].name,
            product[0].price,
            product[0].image,
            product[0].message
          );
        } else {
          showMessage(product[0] && product[0].message);
        }
      },
    });
  });
});

function showModal(name, price, image, message) {
  const modal = document.getElementById("modal");
  modal.innerHTML = `
    <div class="modal">
      <div class="body">
        <h1>${message}</h1>
        <div class="added-itm">
          <img src="assets/images/furnitures/${image}" alt="">
          <div class="details">
            <h1>${name}</h1>
            <p>PHP ${price}</p>
          </div>
        </div>
        <div class="btns-cart">
          <a href="cart.php"><button>View Cart</button></a>
          <button onclick="closeModal()">Continue Shopping</button>
        </div>
      </div>
    </div>
  `;
  modal.style.display = "block";
}

function showMessage(message) {
  const modal = document.getElementById("modal");
  modal.innerHTML = `
    <div class="modal">
      <div class="body">
        <h1>${message}</h1>
        <div class="btns-cart">
          <a href="cart.php"><button>View Cart</button></a>
          <button onclick="closeModal()">Continue Shopping</button>
        </div>
      </div>
    </div>
  `;
  modal.style.display = "block";
}

function closeModal() {
  const modal = document.getElementById("modal");
  modal.style.display = "none";
}
