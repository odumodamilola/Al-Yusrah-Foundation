@extends('layouts.app')
@section('content')
    <!-- END nav -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <div class="hero-wrap" style="background-image: url('https://img.freepik.com/free-photo/carpenter-cutting-mdf-board-inside-workshop_23-2149451062.jpg?size=626&ext=jpg&ga=GA1.1.1308267680.1706603080&semt=ais');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
          </div>
        </div>
      </div>
    </div>
<style>
        body {
            background-color: #f8f9fa;
        }

        .donation-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .donation-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .donation-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .donate-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .donate-btn:hover {
            background-color: #0056b3;
        }
    </style>


    <div class="donation-container mb-5">
        <h2 class="donation-title">Support Us</h2>

        <form class="donation-form" method="POST">
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" placeholder="Enter amount" required>
            </div>

            <div class="form-group">
                <label for="paymentMethod">Choose Your Payment Method:</label>
                <select class="form-control" id="paymentMethod" required>
                    <option value="card">Payment By Card</option>
                    <option value="offline">Offline Donation</option>
                </select>
            </div>

            <!-- Card Payment Fields -->
            <div id="cardPaymentFields">
                <div class="form-group">
                    <label for="cardHolderName">Card Holder Name:</label>
                    <input type="text" class="form-control" id="cardHolderName" placeholder="Enter card holder name" required>
                </div>

                <div class="form-group">
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number" required>
                </div>

                <div class="form-group">
                    <label for="expiry">Expiry Date:</label>
                    <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required>
                </div>

                <div class="form-group">
                    <label for="cvv">CVV:</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" required>
                </div>
            </div>

            <button type="button" class="donate-btn">Donate Now</button>
        </form>
    </div>

    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            var cardFields = document.getElementById('cardPaymentFields');
            cardFields.style.display = this.value === 'card' ? 'block' : 'none';
        });
    </script>

    
    

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3 text-light">Be a volunteer</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
             input type="submit"
                                style="background-color: #007bff; color: #fff; border: 1px solid #007bff; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
                                value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>

@endsection
    
  