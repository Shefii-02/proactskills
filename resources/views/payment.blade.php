<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment Gateway </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            <div class="panel panel-default" style="margin-top: 30px;">
                <div class="panel-heading">
                    <h2>Pay With Razorpay</h2>
                    <form action="{!!route('payment')!!}" method="POST" >
                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="{{ env('RAZOR_KEY') }}"
                                data-amount="1000"
                                data-buttontext="Pay Amount"
                                data-name="ProactSkills"
                                data-description="Payment"
                                data-prefill.name="shafeeque km "
                                data-prefill.email="shefii.indigital@gmail.com"
                                data-theme.color="##0a58ca">
                        </script>
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>