<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" async defer></script>
    <script src="https://js.paystack.co/v2/inline.js" async defer></script> 
    <script src="payment.js" async defer></script>
</head>
<body>
    <!-- <h1 class= "page-header"> PAYMENT</h1> -->
<main id="main">
	<section id="pricing" class="pricing">
		<div class="container">
			<div class="row justify-content-center">
				<div class="clo-lg-3 col-md-6 mt-4 mt-md-0">
					<div class="box featured" data-aos="zoom-in" data-aos-delay="100">
						<div class="btn-wrap">
							<div class="container d-flex justify-content-center">
								<div class="card mt-5 p-4 text-white">
									<p class="top mb-1">Paystack payment only</p>
									<div class="d-flex flex-row justify-content-between text-align-center xyz">
										<!-- <h2><span>GHC100</span></h2> -->
									</div>
									<div class="card-content mt-4">
										<!-- <p>Skip the hustle, let us do talking for you. With GHC100 per year, you can enjoy the best of PropertyDash</p> -->
									</div>
									<div class="btn-wrap">
										<div class="mt-2">
										<form id="paymentForm">
											<div class="form-group">
											<!-- <div class="container"> -->
												<div class="group">      
      												<!-- <input type="text" required> -->
      												<!-- <span class="highlight"></span> -->
      												<!-- <span class="bar"></span> -->
      												<!-- <label>Email</label> -->
													<input type="email" name="email" placeholder="Enter email here" id="email">
    											</div>
												<!-- <input type="email" name="email" placeholder="Enter email here" id="email"> -->
											<!-- </div> -->
											</div>
										    <div class="form-group">
										        <input type="hidden" name="amount" value="0.1" id="amount">
										    </div>
										    <div class="form-group">
										        <button class="btn btn-block btn-lg btn-primary" type="submit" name="submit" onclick="payWithPaystack(event)"> Pay </button>
										    </div>
											<!--<a href="https://paystack.com/pay/twc-standard-ann" ><button class="btn btn-block btn-lg btn-primary">Make Payment</button></a>-->
										</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</body>

<style>
body {
  background-image: url('images/dash.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  /* background-size: cover;
} */
}
</style>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" >
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

body{
	background-color: #D3D3D3;
	font-family: 'Roboto', sans-serif;
}

.card{
	width: 500px;
	border: none;
	border-radius: 10px;
	background: #36454F;
}
p.top{
	font-size: 14px;
}
.discount{
	background-color: #1BC5DF;
	border: none;
	border-top-left-radius: 25px;
	border-bottom-left-radius: 25px;
	padding: 5px 15px;
	transform: translateX(24px);
	height: 35px;
}
.discount span{
	font-size: 15px;
}
h2{
	letter-spacing: 2px;
}
.fa-euro-sign{
	font-size: 27px;
	color: #B3C4FA;
}
.card-content p{
	line-height: 20px;
	font-size: 18px;
	color: #abbef6;
}
.btn-primary{
	border: none;
	border-radius: 6px;
	background-color: #647EDF;
	padding-top: 0;
	height: 46px;
}
.btn-primary span{
	font-size: 13px;
	color: #D1E2FF;
	margin-right: 10px;
}
.fa-arrow-right{
	font-size: 12px;
	color: #D1E2FF;
}
.btn-primary:hover,
.btn-primary:focus
{
	background-color: #647EDF;
	box-shadow: none;
}
</style>

<style>
* { box-sizing:border-box; }

/* basic stylings ------------------------------------------ */
/*body*/
/*.container    { */
/*  font-family:'Roboto';*/
/*  width:600px; */
/*  margin:30px auto 0; */
/*  display:block; */
/*  background:#FFF;*/
/*  padding:10px 50px 50px;*/
/*}*/
h2     { 
  text-align:center; 
  margin-bottom:50px; 
}
h2 small { 
  font-weight:normal; 
  color:#888; 
  display:block; 
}
.footer   { text-align:center; }
.footer a  { color:#53B2C8; }

/* form starting stylings ------------------------------- */
.group        { 
  position:relative; 
  margin-bottom:45px; 
}
input         {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:450px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus     { outline:none; }

/* LABEL ======================================= */
label          {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label    {
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
</style>

