<?php
$nom = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars($_POST['password']);

include('../../dbInfos.php');

try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$dbc = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $pdo_options);
	$encoding = $dbc->prepare("SET NAMES UTF8");
	$encoding->execute();
	$query = $dbc->prepare("SELECT DISTINCT name, prenom, adresse, pays, email, username, password, nameBanque, iban, bicswift, montant, devise, image  FROM " . DB_CLIENTS_TABLE . " HAVING username = '" .$nom. "' AND password = '" .$password. "'");
	$query->execute();
	while($data = $query->fetch())
	{
		$userNom = $data['name'];
		$userPrenom = $data['prenom'];
		$email = $data['email'];
		$adresse = $data['adresse'];
		$pays = $data['pays'];
		$banque = $data['nameBanque'];
		$iban = $data['iban'];
		$bicswift = $data['bicswift'];
		$montant = $data['montant'];
		$devise = $data['devise'];
		$photo = $data['image'];
	}
}
catch(Exception $err)
{
	die('Erreur: ' . $err->getMessage());
}
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fortex Institut</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="css/fontastic.css">
	<!-- Google fonts - Poppins -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="css/custom.css">
	<!-- Favicon-->
	<link href="../images/ico/favicon.png" rel="icon">

</head>
<body>
 <div class="page">
  <!-- Main Navbar-->
  <header class="header">
   <nav class="navbar">
    <!-- Search Box-->
    <div class="search-box">
     <button class="dismiss"><i class="icon-close"></i></button>
     <form id="searchForm" action="#" role="search">
      <input type="search" placeholder="What are you looking for..." class="form-control">
    </form>
  </div>
  <div class="container-fluid">
   <div class="navbar-holder d-flex align-items-center justify-content-between">
    <!-- Navbar Header-->
    <div class="navbar-header">
     <!-- Navbar Brand --><a href="../../index.php" class="navbar-brand d-none d-sm-inline-block">
      <div class="brand-text d-none d-lg-inline-block"><strong>Fortex</strong> <span>Banque</span></div>

      <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
      <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
    </div>
    <!-- Navbar Menu -->

    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">


      <?php include("../lang.php") ?>
      <!-- End lang-->


 </div>


 <li class="nav-item" style="margin-top: 20px"><form action="virement/information.php#inscrit" method="post"><input type="hidden" name="name" value="<?php echo $userNom . ' ' . $userPrenom; ?>"/><input type="hidden" name="banque" value="<?php echo $banque; ?>"/><input type="hidden" name="montant" value="<?php echo $montant; ?>"/><input type="hidden" name="iban" value="<?php echo $iban; ?>"/><input type="hidden" name="bicswift" value="<?php echo $bicswift; ?>"/><input type="submit" value="Completer le virement" class="fa fa-sign-out" /></form></li>
 <li class="nav-item" style="margin-top: 20px"><a href="../../user/connexion.php#pricing" class="nav-link logout"> <span class="d-none d-sm-inline">Se deconnecter</span><i class="fa fa-sign-out"></i></a></li>

</ul>


</div>


</div>
</nav>
</header>
<div class="page-content d-flex align-items-stretch">
 <!-- Side Navbar -->
 <nav class="side-navbar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">

   <div class="title">


    <center><div class="title" ><center><span>    <?php echo'<center ><img width="150" height="150" src="../Photos/' . @$photo . '" alt="photo"></center>'; ?> </span></center>

    </div></center>
    <!--p>Web Designer</p-->
    <br>
    <div class="item d-flex align-items-center">
      <div class="icon bg-violet"></div>
      <div class="title"><h3><?php echo @$userNom . ' ' . @$userPrenom; ?></h3>

      </div>
      <!--div class="number"><strong>25</strong></div-->
    </div>


    <br>
    <div class="item d-flex align-items-center">
      <div class="icon bg-violet"></div>
      <div class="title"><h2><?php echo @$pays; ?></h2>

      </div>
      <!--div class="number"><strong>25</strong></div-->
    </div>


    <br>
    <div class="item d-flex align-items-center">
      <div class="icon bg-violet"></div>
      <div class="title"><h2><?php echo @$adresse; ?></h2>

      </div>
      <!--div class="number"><strong>25</strong></div-->
    </div>

    <br>
    <div class="item d-flex align-items-center">
      <div class="icon bg-violet"></div>
      <div class="title"><h2><?php echo @$email; ?></h2>

      </div>
      <!--div class="number"><strong>25</strong></div-->
    </div>

    <br>
    <div class="item d-flex align-items-center">
      <div class="icon bg-violet"></div>
      <div class="title"><h2><?php echo @$banque; ?></h2>

      </div>
      <!--div class="number"><strong>25</strong></div-->
    </div>

  </div>
</div>



</nav>
<div class="content-inner">
	<!-- Page Header-->
	<header class="page-header">
		<div class="container-fluid">
			<h2 class="no-margin-bottom">Votre solde actuel est de : <?php echo @$montant. " " . strtoupper(@$devise) . ""; ?> </h2>

		</div>

	</header>
	<!-- Dashboard Counts Section-->
	<section class="dashboard-counts no-padding-bottom">
		<div class="container-fluid">
			<div class="row bg-white has-shadow">
				<!-- Item -->
				<div class="col-xl-3 col-sm-6">
					<div class="item d-flex align-items-center">
						<div class="icon bg-violet"><i class="icon-user"></i></div>
						<div class="title"><span><?php echo @$userNom; ?></span>

            </div>
            <!--div class="number"><strong>25</strong></div-->
          </div>
        </div>





                  <!-- Item -->
                  <div class="col-xl-3 col-sm-6">
                   <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-user"></i></div>
                    <div class="title"><span><?php  echo @$userPrenom; ?></span>

                    </div>
                    <!--div class="number"><strong>70</strong></div-->
                  </div>
                </div>
              </div>
              <p></p>

              <center> <h3 class="h4">Information sur votre compte</h3></center>


              <div class="project">
               <div class="row bg-white has-shadow">
                <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                 <div class="project-title d-flex align-items-center">

                  <div class="text">
                   <h3 class="h4">IBAN</h3>
                 </div>
               </div>
               <div class="project-date"><span class="hidden-sm-down"><?php echo @$iban; ?></span></div>
             </div>
           </div>
         </div>
         <div class="project">
           <div class="row bg-white has-shadow">
            <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
             <div class="project-title d-flex align-items-center">

              <div class="text">
               <h3 class="h4">BIC</h3>
             </div>
           </div>
           <div class="project-date"><span class="hidden-sm-down"><?php echo @$bicswift; ?></span></div>
         </div>

       </div>
     </div>

     <div class="project">
       <div class="row bg-white has-shadow">
        <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
         <div class="project-title d-flex align-items-center">

          <div class="text">
           <h3 class="h4">Montant disponible sur le compte</h3>
         </div>
       </div>
       <div class="project-date"><span class="hidden-sm-down"><?php echo @$montant. " " . strtoupper(@$devise) . ""; ?></span></div>
     </div>
     <div class="right-col col-lg-6 d-flex align-items-center">


     </div>
     <div class="right-col col-lg-6 d-flex align-items-center">

     </div>
   </div>
 </div>

</div>

</div>
<p>

</div>
</div>
</section>

<!-- Projects Section-->
<section class="projects no-padding-top">
 <div class="container-fluid">

  <!-- Project-->

  <!-- Project-->

  <!-- Project-->




</div>
</section>
<!-- Client Section-->
<section class="client no-padding-top">
 <div class="container-fluid">
  <div class="row">

  </div>
</div>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/charts-home.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
</body>
</html>
