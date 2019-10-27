Stripe.setPublishableKey("pk_test_mW4eDdrbC3sEPQ0BZip9rFrw00L1zRk3Em");

var $form = $("#checkout-form");

$form.submit(function(event) {
  $("#charger-error").addClass("d-none");
  $form.find("button").prop("disabled", true);
  Stripe.card.createToken(
    {
      number: $("#card-number").val(),
      cvc: $("#card-cvc").val(),
      exp_month: $("#card-expiry-month").val(),
      exp_year: $("#card-expiry-year").val(),
      name: $("#card-name").val()
    },
    stripeResponseHandler
  );
  return false;
});

function stripeResponseHandler(status, response) {
  if (response.error) {
    $("#charge-error").removeClass("d-none");
    $("#charge-error").text(response.error.message);
    $form.find("button").prop("disabled", false);
  } else {
    var token = response.id;

    $form.append($('<input type="hidden" name="stripeToken" />').val(token));

    $form.get(0).submit();
  }
}
