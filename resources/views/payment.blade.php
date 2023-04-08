<form action="{{ url('payment') }}" method="post" id="addPaymentForm">
    @csrf
    <div class="popupForm">
        <div class="popupHeading">
            <h2>Payment</h2>
        </div>
        <div class="form-group floating-field">
            <input type="hidden" name="razorpay_payment_id" value="" id="razorpay_payment_id">
            <input type="hidden" name="razorpay_order_id" value="" id="razorpay_order_id">
            <input type="hidden" name="razorpay_signature" value="" id="razorpay_signature">
            <input type="hidden" name="generated_signature" value="" id="generated_signature">
             <input type="text" name="amount" value="" id="payment">

    </div><!--//popupForm-->

            <div class="col-sm-6 text-right">                                 
                <button class="btn btn-primary" type="button" id="addPaymentButton">Submit</button>
            </div>

    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
    console.log(122)
$('#addPaymentButton').on('click', function (e) {
    console.log(1)
    e.preventDefault();
    var amount = $('#payment').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "post",
        url: "/orderid-generate",
        data: $("#addPaymentForm").serialize(),
        success: function (data) {
            var order_id = '';
            if (data.order_id) {
                order_id = data.order_id;
            }

            var options = {
                "key": "{{ config('app.razorpay_api_key') }}", // Enter the Key ID generated from the Dashboard
                "amount": amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "{{ config('app.currency') }}",
                "name": "{{ config('app.account_name') }}",
                "description": remarks,
                "image": "{{ asset('images/logo-black.svg') }}",
                "order_id": order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response) {
                    $('#razorpay_payment_id').val(response.razorpay_payment_id);
                    $('#razorpay_order_id').val(response.razorpay_order_id);
                    $('#razorpay_signature').val(response.razorpay_signature);
                    $('#addPaymentForm').submit();
                },
                "prefill": {
                    "name": "{{ auth()->user()->name }}",
                    "email": "{{ auth()->user()->email }}",
                    "contact": "{{ auth()->user()->mobile }}"
                },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function (response) {

            });

            rzp1.open();


        },

    });

});
</script>
