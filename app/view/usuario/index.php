<?
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
	<head>
		<?php include "../templates/header.php" ?>

		<style>
			:root {
				--jumbotron-padding-y: 3rem;
			}

			.jumbotron {
				padding-top: var(--jumbotron-padding-y);
				padding-bottom: var(--jumbotron-padding-y);
				margin-bottom: 0;
				background-color: #fff;
			}
			@media (min-width: 768px) {
				.jumbotron {
					padding-top: calc(var(--jumbotron-padding-y) * 2);
				}
			}

			.jumbotron p:last-child {
				margin-bottom: 0;
			}

			.jumbotron-heading {
				font-weight: 300;
			}

			.jumbotron .container {
				max-width: 40rem;
			}

			footer {
				padding-top: 3rem;
				padding-bottom: 3rem;
			}

			footer p {
				margin-bottom: .25rem;
			}

			.box-shadow { 
				box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); 
			}

		</style>
	</head>
	<body>
		<header>
			<nav class="navbar fixed-top navbar-dark bg-primary">
  				<a class="navbar-brand" href="#">Abstract Questionnaire</a>
			</nav>
		</header>
		<main role="main">
			<section class="jumbotron text-center">
				<div class="container">
					<h1 class="jumbotron-heading">User Registration</h1>
				</div>
			</section>
			<div class="container">
			<div class="row">
		        <div class="col-md-12 order-md-1">
		          <form class="needs-validation" novalidate="">
		            <div class="row">
		              <h4 class="col-md-12 mb-3">Personal Information</h4>
		              <div class="col-md-6 mb-3">
		                <label for="firstName">Full Name</label>
		                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
		                <div class="invalid-feedback">
		                  Valid first name is required.
		                </div>
		              </div>

		              <div class="col-md-4 d-block my-3">
							<label>Age</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">15 - 17</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">18 - 24</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">25 & over</label>
							</div>
						</div>
		            </div>

		            <hr class="mb-4">

					<div class="row">

						<h4 class="col-md-12 mb-3">Academic Information</h4>

						<div class="col-md-4 d-block my-3">
							<label>Academic Level</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">High School</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">Graduate</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Undergraduate</label>
							</div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>Research Branch</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">Human Sciences</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">Exact Sciences</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Biological Sciences</label>
							</div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>Research Field</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">Computing</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">Engineering</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Chemistry</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Physics</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Business</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Agronomy</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Health</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Telecommunication</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Linguistics</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Other</label>
							</div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>What kind of researcher/scientist are you?</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">beginner/junior</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">experienced/senior</label>
							</div>
						</div>

					</div>

		            <hr class="mb-4">

					<div class="row">
						
						<h4 class="col-md-12 mb-3">Language Information</h4>

						<div class="col-md-4 d-block my-3">
							<label>Native Language</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">Portuguese</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">English</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Spanish</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Italian</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">Other</label>
							</div>
							
						</div>

						<div class="col-md-4 d-block my-3">
							<label>Level of Reading</label>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">basic</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">intermediate</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">advanced</label>
							</div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>How long have you studied/learned English?</label>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">Less than a year</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">1 - 5 years</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">5 - 10 years</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">longer than 10 years</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="paypal" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="paypal">advanced</label>
							</div>
						</div>

					</div>
					
					<hr class="mb-4">
		            
		            <div class="row">


						<h4 class="col-md-12 mb-3">Complementary Information</h4>

						<div class="col-md-4 d-block my-3">
							<label>Why are you participating on this experiment?</label>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">as part of a Laletec program just to contribute to it</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="debit" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="debit">for learning</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="credit" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="credit">for credit course</label>
							</div>
						</div>		            	
		            </div>				

		            <hr class="mb-4">
		            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
		          </form>
		        </div>
		      </div>
      		</div>
		</main>
		<?php include "../templates/footer.php" ?>
	</body>
</html>