<?php 
	require_once 'mail/traitement.php';
	require_once 'header.php';
	
?>


			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
				
					<div class="message" ><?php echo $message ?></div>
				
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">
								
									<!-- Sidebar -->

										<section>
											<h3>Just a Sub</h3>
											<p>WCC regorge au minum 5 groupes d'équipes avec plus de 5 responsable d'équipe par groupe et 1 chef de plateaux. Veuillez cliquer sur ce bouton afin de retrouver tout les details des differentes équipes de notre entreprise.<i class="fa f" aria-hidden="true"></i></p>
											<footer>
												<a href="notreequipe.html" class="button">plus d'informations sur nos équipes</a>
											</footer>
										</section>
								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>Demande d'emploi</h2>
												<p>Postulez ici pour réjoindre l'un de nos equipes. </p>
											</header>

											<span class="image featured"><img src="images/banner02.jpg" alt="" /></span>

											<p>Afin de proceder à une candidature plus facile et rapide auprès de nos équipes nous vous invitons à remplir tout les champs de ce formulaire.</p>

											<h3> Formulaire de candidature</h3>
											<!--  -->
											<form method="post" action="" enctype="multipart/form-data">
												<div class="form-check form-check">
													<label class="form-check-label" for="inlineRadio"> Civilité <span class="text-danger">*</span></label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
														<label class="form-check-label" for="inlineRadio1">M</label>
													  </div>
													  <div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
														<label class="form-check-label" for="inlineRadio1">Mme</label>
													  </div>
												</div>
												<div class="mb-3">
													<span class="text-danger">*</span>
													<input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre Nom" required>
												</div>
												<div class="mb-3">
												<span class="text-danger">*</span>
													<input type="text" class="form-control" id="fristname" name="fristname"  placeholder="Entrez votre Prénom" required>
												</div>
												<div class="mb-3">
												<span class="text-danger">*</span>
													<input type="tel" class="form-control" id="phone" name="phone" placeholder="Entrez votre telephone" required>
												</div>
												<div class="mb-3">
												<span class="text-danger">*</span>
													<input type="email" class="form-control " id="email" name="email" placeholder="Entrez votre mail" required>
												</div>
												<div class="mb-3">
													<textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Faites nous part de votre savoir faire brièvement" name="message" required></textarea>
												</div>
												<div class="mb-3">
												<span class="text-danger">*</span>
													<label for="formFile" class="form-label">choix fichier</label>
													<input class="form-control" type="file"  id="formFile" name="file" required>
												  </div>
												  <div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
													<p>En cochant cette case, vous acceptez l'intégralité de notre Politique de gestion de Vos informations personnelles.</p>
												  </div>
												
												<button type="submit" class="btn btn-primary mx-auto" name="submit" id="btn">Postuler</button>
											  </form>
										</article>

								</div>
							</div>
						</div>
					</div>
				</section>
		
        
 

<?php
require 'footer.php';

?>