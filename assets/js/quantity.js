document.addEventListener("DOMContentLoaded", function () {
  updateTotal();
});

function increment(id) {
  const input = document.getElementById(id);
  let quantity = parseInt(input.value);
  quantity++;
  input.value = quantity;
  updatePrice(input, id);
}

function decrement(id) {
  const input = document.getElementById(id);
  let quantity = parseInt(input.value);
  if (quantity > 1) {
    quantity--;
    input.value = quantity;
    updatePrice(input, id);
  }
}

function updatePrice(input, id) {
  const quantity = parseInt(input.value);
  const price = parseFloat(input.getAttribute("data-price"));
  const newTotal = quantity * price;
  const itemTotal = document.getElementById("item-total-" + id);
  itemTotal.innerHTML = `PHP ${newTotal.toLocaleString()}`;
  updateTotal();
}

function updateTotal() {
  const subTotals = document.getElementsByClassName("item-total");
  let subTotal = document.getElementById("sub-total");
  let finalTotal = document.getElementById("final-total");
  const itemsArray = Array.from(subTotals);
  let total = 0;

  itemsArray.forEach((item) => {
    let subtotal = parseInt(item.innerHTML.replace(/PHP |,/g, ""));
    total += subtotal;
  });

  subTotal.innerHTML = total.toLocaleString();
  finalTotal.innerHTML = total.toLocaleString();
}
