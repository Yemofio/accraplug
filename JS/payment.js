const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(event) {
  event.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amount").value * 100,
    currency: "GHS",
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    callback: function(response){
      $.ajax({
        url: 'payprocess.php?reference='+response.reference,
        method: 'get',
        sucess: function (data) {
          alert("gese")
          let json = JSON.parse(data);
          alert(json.message);
        }
      });
    },
    onClose: function(){
      alert('Transaction closed.');
    },
  });
  handler.openIframe();



  //verification/checker for admin server
  //ensure dynamic reference



}