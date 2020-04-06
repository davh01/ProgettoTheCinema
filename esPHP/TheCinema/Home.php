<html>


<head>

	<script
				src="https://kit.fontawesome.com/81c2c05f29.js"
				crossorigin="anonymous">
			const openIcon = document.querySelector('.icon');
			const linksWrapper = document.querySelector('.links-wrapper');
			const backdrop = document.querySelector('.backdrop');
			const closeIcon = document.querySelector('.close-btn');

			openIcon.addEventListener('click', () => {
				linksWrapper.classList.add('open');
			});
			closeIcon.addEventListener('click', () => {
				linksWrapper.classList.remove('open');
			});
			backdrop.addEventListener('click', () => {
				linksWrapper.classList.remove('open');
			});
	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
  @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap');

	* {
		margin: 0;
		padding: 0;
	}
	body {
		background: rgb(253,187,45);
		background: linear-gradient(0deg, rgba(253,187,45,1) 0%, rgba(34,193,195,1) 100%);
		min-height: 100vh;
		font-family: 'Poppins';
		overflow-x: hidden;
	}
	/* Desktop view */
	.navbar {
		z-index: 9999;/* non faccio sovrapporre gli altri oggetti*/
		width: 100%;
		background: rgba(34,193,195,1);
		border-bottom: 1px solid #ccc;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 5px 30px;
		box-sizing: border-box;
		position: fixed;
	}
	.icon,
	.close-btn {
		display: none;
		font-size: 1.2em;
		cursor: pointer;
	}
	.links {
		display: flex;
		list-style: none;
		background: rgba(34,193,195,1);
	}
	.links li {
		margin-top: 20px;
		margin-bottom: 10px;
		margin-right: 24px;
	}
	.links li a {
		text-decoration: none;
		color: #575757;
		letter-spacing: -0.5px;
	}
	.links li a:hover {
		color: #000;
	}
	.backdrop {
		display: none;
		animation: 0.4s ease-in-out fadeIn forwards;
		position: absolute;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
		background: rgba(0, 0, 0, 0);
		cursor: pointer;
	}
	@keyframes fadeIn {
		to {
			background: rgba(0, 0, 0, 0.8);
		}
	}
	/* Mobile view */
	@media (max-width: 675px) {
		.icon,
		.close-btn {
			display: block;
		}
		.icon {
			position: absolute;
			right: 24px;
		}
		.links {
			position: absolute;
			top: 0;
			height: 100%;
			width: 90%;
			right: -90%;
			background: #f8eeee;
			flex-direction: column;
			justify-content: center;
			text-align: center;
			z-index: 2;
			transition: 0.3s ease-in-out;
		}
		.links li {
			margin-right: 0;
			margin-bottom: 50px;
			font-size: 1.5em;
		}
		.close-btn {
			position: absolute;
			top: 24px;
			right: -90vh;
			color: #575757;
			font-size: 2em;
			z-index: 3;
			transition: 0.3s ease-in-out;
		}
		.close-btn:hover {
			color: #000;
			cursor: pointer;
		}
		/* Open class */
		.open .links {
			right: 0;
		}
		.open .close-btn {
			right: 32px;
		}
		.open .backdrop {
			display: block;
		}
	}


	.container2 {
		width: 30%;
		border:3px;
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.footer, .push {
		border-top: 1px solid #ccc;
		background: black;
		text-align: center;
	  height: 100px; /* .push must be the same height as .footer */
	}

	</style>

</head>

<body>
	<body>
		<?php
		session_start();
			//non sono admin
			$_SESSION["dataDaMantenere"]=null;
			$_SESSION["datiLoginNonPresenti"]=null;
			$_SESSION["logFallito"]=null;
			$_SESSION["regsterFall"]=null;
			if(empty($_SESSION["log"])){
					//home senza aver effettuato il login
					$home = "

					<nav class=\"navbar\">
					 <h3 class=\"logo\">Immagine Logo</h3>
					 <div class=\"icon\"><i class=\"fas fa-bars\"></i></div>
					  <div class=\"links-wrapper active\">
					    <div class=\"backdrop\"></div>
					    <div class=\"close-btn\"><i class=\"fas fa-times\"></i></div>
					    <ul class=\"links\">
								<li><a href=\"Home.php\"><b>HOME</b></a></li>
								<li><a href=\"Prenotazione/prenotazione.php\"><b>PRENOTAZIONE</b></a></li>
								<li><a href=\"Registrazione/loginregister/Login-Registra.php\"><b>REGISTRATI - ACCEDI</b></a></li>
					    </ul>
					  </div>
					</nav>


					</p>
					<div class=\"container2\">
					<!--https://getbootstrap.com/docs/4.4/utilities/embed/ -->
					<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
						<ol class=\"carousel-indicators\">
							<li data-target=\"#carouselExa
						mpleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
							<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
							<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
						</ol>
						<div class=\"carousel-inner\">
							<div class=\"carousel-item active\">
								<img src=\"Immagini\Jack.jfif\" class=\"d-block w-100\" alt=\"...\" >
							</div>
							<div class=\"carousel-item\">
								<img src=\"Immagini\Ferencz.jfif\" class=\"d-block w-100\" alt=\"...\">
							</div>
							<div class=\"carousel-item\">
								<img src=\"Immagini\Jack.jfif\" class=\"d-block w-100\" alt=\"...\">
							</div>
						</div>
						<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
							<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
							<span class=\"sr-only\">Previous</span>
						</a>
						<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
							<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
							<span class=\"sr-only\">Next</span>
						</a>
					</div>
					</div>

					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>
					<p>Ciao</p>

					";

				echo $home;


			}else{

				echo $_SESSION["privilegiAdmin"];
				if(empty($_SESSION["privilegiAdmin"])){
					//Utente con privilegi normali
					$_SESSION["editMode"]=null;
							$home="
							<nav class=\"navbar\">
							 <h3 class=\"logo\">Immagine Logo</h3>
							 <div class=\"icon\"><i class=\"fas fa-bars\"></i></div>
								<div class=\"links-wrapper active\">
									<div class=\"backdrop\"></div>
									<div class=\"close-btn\"><i class=\"fas fa-times\"></i></div>
									<ul class=\"links\">
										<li><a href=\"Home.php\"><b>HOME</b></a></li>
										<li><a href=\"Prenotazione/prenotazione.php\"><b>PRENOTAZIONE</b></a></li>
										<li><a href=\"areaLogin.php\"><b>Area Personale</b></a></li>
									</ul>
								</div>
							</nav>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
 							";
							echo $home;

				}else{
					$_SESSION["editMode"]=null;
							//sono admin
							$home="
							<nav class=\"navbar\">
							 <h3 class=\"logo\">Immagine Logo</h3>
							 <div class=\"icon\"><i class=\"fas fa-bars\"></i></div>
								<div class=\"links-wrapper active\">
									<div class=\"backdrop\"></div>
									<div class=\"close-btn\"><i class=\"fas fa-times\"></i></div>
									<ul class=\"links\">
										<li><a href=\"Home.php\"><b>HOME</b></a></li>
										<li><a href=\"Prenotazione/prenotazione.php\"><b>PRENOTAZIONE</b></a></li>
										<li><a href=\"areaLoginAdmin.php\"><b>Area Admin</b></a></li>
									</ul>
								</div>
							</nav>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
							<p>Ciao</p>
 								";
							echo $home;
				}
			}

			?>

			 <div class="footer">
					 <p>theCinema@gmail.com | Progetto gestione anno 2019/2020</p>
			 </div>
</body>
</html>