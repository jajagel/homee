$(document).ready(function () {
  $(".btn-remove").click(function () {
    $(".btn-remove").prop("disabled", true);
    let product = $(this).closest(".cart-itm-details");
    let productId = product.data("id");
    $.ajax({
      url: "remove-cart.php",
      method: "POST",
      data: {
        id: productId,
      },
      success: function (response) {
        if (response) {
          $(".btn-remove").prop("disabled", false);
          location.reload();
        }
      },
    });
  });
});
