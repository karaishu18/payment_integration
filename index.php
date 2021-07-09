 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=button] {
  background-color: #56918b;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #046b61;
}

.container {
  border-radius: 5px;
  background-color: #ebdcfc;
  padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" name="name" id="name" placeholder="Enter your name">

    <label for="lname">Last Name</label>
    <input type="text" name="amt" id="amt" placeholder="Enter your amount">

    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()">
  </form>
</div>


<script>  
  
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();

        var options = {
            "key": "rzp_test_TKL4GMZ9WRY9bA", 
            "amount": amt*100, 
            "currency": "INR",
            "name": "The Dreamer",
            "description": "Test Transaction",
            "image": "https://thumbs.dreamstime.com/b/print-161420195.jpg",
            "handler": function (response){
                jQuery.ajax({
                    type:'post',
                    url:'payment_process.php',
                    data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
                    sucess:function(result){
                        window.location.href="thank_you.php";
                    }
                });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>