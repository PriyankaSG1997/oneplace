<?php include("header.php"); ?>

<!-- partial:index.partial.html -->
<section class="pricing-section">
    <div class="container">
        <div class="sec-title text-center">
            <span class="title">Get plan</span>
            <h2>Choose a Plan</h2>
        </div>

        <div class="outer-box">
            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Day Pass</div>
                            <h4 class="price">₹ 35.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference plans</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="false">Easy Access</li>
                            <li class="false">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn" onclick="buyPlan('Day Pass', 3599)">BUY plan</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-gem"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Full Pass</div>
                            <h4 class="price">₹ 99.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference plans</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="true">Easy Access</li>
                            <li class="false">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn" onclick="buyPlan('Full Pass', 9999)">BUY plan</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-rocket"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title">Group Pass</div>
                            <h4 class="price">₹ 199.99</h4>
                        </div>
                        <ul class="features">
                            <li class="true">Conference plans</li>
                            <li class="true">Free Lunch And Coffee</li>
                            <li class="true">Certificate</li>
                            <li class="true">Easy Access</li>
                            <li class="true">Free Contacts</li>
                        </ul>
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn" onclick="buyPlan('Group Pass', 19999)">BUY plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- partial -->

<?php include("footer.php"); ?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
function buyPlan(planName, amount) {
    var options = {
        "key": "YOUR_RAZORPAY_KEY", // Replace with your Razorpay Key ID
        "amount": amount * 100, // Razorpay accepts amount in paise (multiply by 100)
        "currency": "INR",
        "name": "Your Company Name",
        "description": planName,
        "image": "https://yourwebsite.com/logo.png", // Optional logo URL
        "handler": function (response) {
            alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
            // Optionally send response to server for verification
        },
        "prefill": {
            "name": "User Name",
            "email": "user@example.com",
            "contact": "9876543210"
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp = new Razorpay(options);
    rzp.open();
}
</script>
