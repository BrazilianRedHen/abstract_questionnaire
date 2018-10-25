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
		          <form class="userRegistration" novalidate="" method="post" action="../postHandler.php">
		          	<input type="hidden" name="method" value="userRegistration">
		            <div class="row">
		              <h4 class="col-md-12 mb-3">Personal Information</h4>
		              <div class="col-md-6 mb-3">
		                <label for="firstName">Email</label>
		                <input type="text" class="form-control" id="email" placeholder="E-mail" value="" required="">
		                <div class="invalid-feedback">
		                  E-mail is required.
		                </div>
		              </div>

		              <div class="col-md-4 d-block my-3">
							<label>Age</label>
							<div class="custom-control custom-radio">
								<input id="15-17" name="age" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="15-17">15 - 17</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="18-24" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="18-24">18 - 24</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="25+" name="age" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="25+">25 & over</label>
							</div>
						</div>
		            </div>

		            <hr class="mb-4">

					<div class="row">

						<h4 class="col-md-12 mb-3">Academic Information</h4>

						<div class="col-md-4 d-block my-3 academicLevel">
							<label>Academic Level</label>
							<div class="custom-control custom-radio">
								<input id="highSchool" name="academicLevel" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="highSchool">High School</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="undergraduate" name="academicLevel" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="undergraduate">Undergraduate</label>
							</div>
                            <div class="custom-control custom-radio">
                                <input id="graduate" name="academicLevel" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="graduate">Graduate</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="otherDegree" name="academicLevel" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="otherDegree">Other</label>
                                <div class="hidden otherDegreeInput">
                                    <input type="text" class="form-control" id="otherDegreeInput" placeholder="Input Your custom Degree">
                                    <div class="invalid-feedback">
                                        If you have a different degree you must put it in.
                                    </div>
                                </div>

                            </div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>Research Branch</label>
							<div class="custom-control custom-radio">
								<input id="humanSciences" name="researchBranch" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="humanSciences">Human Sciences</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="exactSciences" name="researchBranch" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="exactSciences">Exact Sciences</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="biologicalSciences" name="researchBranch" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="biologicalSciences">Biological Sciences</label>
							</div>
						</div>

						<div class="col-md-4 d-block my-3 researchField">
							<label>Research Field</label>
							<div class="custom-control custom-radio">
								<input id="computing" name="researchField" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="computing">Computing</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="engineering" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="engineering">Engineering</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="chemistry" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="chemistry">Chemistry</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="physics" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="physics">Physics</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="business" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="business">Business</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="agronomy" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="agronomy">Agronomy</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="health" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="health">Health</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="telecommunication" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="telecommunication">Telecommunication</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="linguistics" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="linguistics">Linguistics</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="otherResearchField" name="researchField" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="otherResearchField">Other</label>
								<div class="hidden otherResearchFieldInput">
									<input type="text" class="form-control" id="otherResearchFieldInput" placeholder="Input Your custom Research Field">
					                <div class="invalid-feedback">
					                  If your Research Field is Other, you must insert your Research Field.
					                </div>
								</div>
				                
							</div>
						</div>

						<div class="col-md-4 d-block my-3">
							<label>What kind of researcher/scientist are you?</label>
							<div class="custom-control custom-radio">
								<input id="beginnerJunior" name="scientistType" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="beginnerJunior">beginner/junior</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="experiencedSenior" name="scientistType" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="experiencedSenior">experienced/senior</label>
							</div>
						</div>

					</div>

		            <hr class="mb-4">

					<div class="row">
						
						<h4 class="col-md-12 mb-3">Language Information</h4>

						<div class="col-md-4 d-block my-3 nativeLanguage">
							<label>Native Language</label>
							<div class="custom-control custom-radio">
								<input id="portuguese" name="nativeLanguage" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="portuguese">Portuguese</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="english" name="nativeLanguage" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="english">English</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="spanish" name="nativeLanguage" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="spanish">Spanish</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="italian" name="nativeLanguage" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="italian">Italian</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="otherLanguage" name="nativeLanguage" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="otherLanguage">Other</label>
								<div class="hidden otherNativeLanguage">
					                <input type="text" class="form-control" id="otherNativeLanguage" placeholder="Input Your custom Language">
					                <div class="invalid-feedback">
					                  If your Language is Other, you must insert your Language.
					                </div>
					            </div>
							</div>
							
						</div>

						<div class="col-md-4 my-3 englishApptitudeFields">
							<label>Level of Reading</label>
							<div class="custom-control custom-radio">
								<input id="basic" name="englishReadingLevel" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="basic">basic</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="intermediate" name="englishReadingLevel" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="intermediate">intermediate</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="advanced" name="englishReadingLevel" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="advanced">advanced</label>
							</div>
						</div>

						<div class="col-md-4 my-3 englishApptitudeFields">
							<label>How long have you studied/learned English?</label>
							<div class="custom-control custom-radio">
								<input id="lessOne" name="englishStudyTime" type="radio" class="custom-control-input" checked="" required="">
								<label class="custom-control-label" for="lessOne">Less than a year</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="oneToFive" name="englishStudyTime" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="oneToFive">1 - 5 years</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="fiveToTen" name="englishStudyTime" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="fiveToTen">5 - 10 years</label>
							</div>
							<div class="custom-control custom-radio">
								<input id="moreTen" name="englishStudyTime" type="radio" class="custom-control-input" required="">
								<label class="custom-control-label" for="moreTen">longer than 10 years</label>
							</div>
						</div>

					</div>
					
					<hr class="mb-4">
		            
		            <div class="row">

						<h4 class="col-md-12 mb-3">Complementary Information</h4>

						<div class="col-md-4 d-block my-3 complementaryInformation">
							<label>Why are you participating on this experiment?</label>
							<div class="form-check">
								<input id="laletec" name="participationReason" type="checkbox" class="form-check-input" checked="" required="">
								<label class="form-check-label" for="laletec">as part of a Laletec program just to contribute to it</label>
							</div>
							<div class="form-check">
								<input id="learning" name="participationReason" type="checkbox" class="form-check-input" required="">
								<label class="form-check-label" for="learning">for learning</label>
							</div>
							<div class="form-check">
								<input id="credit" name="participationReason" type="checkbox" class="form-check-input" required="">
								<label class="form-check-label" for="credit">for credit course</label>
							</div>
                            <div class="form-check">
                                <input id="otherComplementaryInformation" name="participationReason" type="checkbox" class="form-check-input" required="">
                                <label class="form-check-label" for="otherComplementaryInformation">other</label>
                                <div class="hidden otherComplementaryInformation">
                                    <input type="text" class="form-control" id="otherComplementaryInformation" placeholder="Input Your custom Reason">
                                    <div class="invalid-feedback">
                                        If your have other reason, you must insert your Reason.
                                    </div>
                                </div>
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