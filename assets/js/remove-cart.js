$(document).ready(function () {
  $(".btn-remove").click(function () {
    let product = $(this).closest(".cart-itm-details");
    let productId = product.data("id");
    $.ajax({
      url: "remove-cart.php",
      method: "POST",
      data: {
        id: productId,
      },
      success: function (response) {
        $(".btn-remove").prop("disabled", true);
        if (response) {
          $(".btn-remove").prop("disabled", false);
          location.reload();
        }
      },
    });
  });
});
