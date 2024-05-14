<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa | DALETSYS </title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }

      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-6 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>Mpesa </span></div>
          <div><span>Paypal</span></div>
          <div><span>Card</span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="./resources/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" />
          <div class="media-body">
            <h6 class="mt-1">Enter Amount & Number</h6>
          </div>
        </div>
		<br/>

		<div class="media mt-6 pl-4">		
			<form action="pesapal-iframe.php" method="post" class="row g-6">
					<div class="row col-12">
						<div class="col-md-6">
							<label for="inputAddress" class="form-label">Order ID*</label>
						</div>
						<div class="col-md-6"> 
							<input type="text" style="font-size: 9pt" class="form-control" name="reference" value="<?php $six = random_int(100000, 999999); echo $six; ?>" readonly="readonly"/> 
						</div>
					</div> 

					<br/>
					<br/>

					<div class="row col-12">
						<div class="col-md-6">
						<label for="inputAddress" class="form-label">TR. Type</label>
						</div>
						<div class="col-md-6">
							<input type="text" style="font-size: 9pt" class="form-control" name="type" value="MERCH" readonly="readonly" style="font-size: 9pt"/>
						</div>
					</div>

					<br/>
					<br/>

					<div class="row col-12">
						<div class="col-md-6">
							<label for="inputAddress" style="font-size: 9pt" class="form-label">Ksh (*Non Refundable) </label>	
						</div>
						<div class="col-md-6">
							<input type="text" style="font-size: 14pt" class="form-control" name="amount" type="number" placeholder="Eg:1000" required />
						</div>
					</div> 
          
					<br/>
					<br/>

          <div class="row col-12">
						<div class="col-md-3">
					  	<label for="inputAddress" class="form-label">First <br/> Name</label>	
						</div>
						<div class="col-md-9">						
              <input type="text" style="font-size: 10pt" class="form-control" name="first_name" placeholder="First" />
						</div>
					</div>

          <br/>
					<br/>

          <div class="row col-12">
						<div class="col-md-3">
					  	<label for="inputAddress" class="form-label">Second <br/> Name</label>	
						</div>
						<div class="col-md-9">
							<input type="text" style="font-size: 10pt" class="form-control" name="last_name" placeholder="Second" />           
						</div>
					</div>

					<br/>
					<br/>

          <div class="row col-12">
						<div class="col-md-3">
					  	<label for="inputAddress" class="form-label">Email<br/> Addrs</label>	
						</div>
						<div class="col-md-9">
            <input type="text" style="font-size: 10pt" class="form-control" name="email" placeholder="john@yahoo.com" />          
						</div>
					</div>

          <br/>
					<br/>

					<div class="row col-12">
						<label for="inputAddress" class="form-label">Description (Optional)</label>	
					</div>
					<div class="row col-12">
						<textarea type="text" style="font-size: 10pt" style="font-size: 9pt" class="form-control" name="description" placeholder="Order Description"  rows="3"></textarea>
					</div>

          <div class="row col-12">
            <div class="col-md-12">
              <hr/>
            </div>
          </div>

					<div class="row col-12">
						  <button type="submit" class="btn btn-success" name="submit" value="submit">Do the Ting!</button>
					</div>
			</form>
		</div>
		</div>
	</div>
<script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
	</body>
</html>