<?php
include "../Model/Suivi.php";
include "../Controller/SuiviC.php";
         

if (isset($_GET['id'])){

$suiviC = new SuiviC();
$result=$suiviC->recupererSuivi($_GET['id']);
foreach($result as $row){
$id=$row['id'];
$nom=$row['nom'];
$prenom=$row['prenom'];
$id_utilisateur=$row['id_utilisateur'];
$question1=$row['question1'];
$question2=$row['question2'];
$question3=$row['question3'];
$question4=$row['question4'];
$question5=$row['question5'];
$reponse1=$row['reponse1'];
$reponse2=$row['reponse2'];
$reponse3=$row['reponse3'];
$reponse4=$row['reponse4'];
$reponse5=$row['reponse5'];
$commentaire1=$row['commentaire1'];
$commentaire2=$row['commentaire2'];
$commentaire3=$row['commentaire3'];
$commentaire4=$row['commentaire4'];
$commentaire5=$row['commentaire5'];
    }
}

if($_POST['Repondre'])
{
$suivi=new Suivi($_POST['nom'],$_POST['prenom'],$id_utilisateur,$_POST['question1'],$_POST['question2'],$_POST['question3'],$_POST['question4'],$_POST['question5'],$_POST['reponse1'],$_POST['reponse2'],$_POST['reponse3'],$_POST['reponse4'],$_POST['reponse5'],$_POST['commentaire1'],$_POST['commentaire2'],$_POST['commentaire3'],$_POST['commentaire4'],$_POST['commentaire5']);
if($_POST['commentaire1']!="" && $_POST['commentaire2']!="" && $_POST['commentaire3']!="" && $_POST['commentaire4']!="" && $_POST['commentaire5']!="" )
{
  $suiviC->modifierSuivi($suivi,2,$_GET['id']);
}
else
{
  $suiviC->modifierSuivi($suivi,1,$_GET['id']);
}
header('Location: AfficherSuivis.php');
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Repondre Suivi
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
       <?php include'sidebar.php'  ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Suivi</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Repondre Suivi</h5>
              </div>
              <div class="card-body">
              <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data" action="" >
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $nom ?>" name="nom">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $prenom ?>" name="prenom">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Question 1 : <?PHP echo $question1 ?></label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $reponse1 ?>" name="reponse1">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control"  value="<?PHP echo $commentaire1 ?>" name="commentaire1">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Question 2 : <?PHP echo $question2 ?></label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $reponse2 ?>" name="reponse2">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control" value="<?PHP echo $commentaire2 ?>" name="commentaire2">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Question 3 : <?PHP echo $question3 ?></label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $reponse3 ?>" name="reponse3">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control" value="<?PHP echo $commentaire3 ?>" name="commentaire3">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Question 4 : <?PHP echo $question4 ?></label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $reponse4 ?>" name="reponse4">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control" value="<?PHP echo $commentaire4 ?>" name="commentaire4">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Question 5: <?PHP echo $question5 ?></label>
                        <input type="text" class="form-control" disabled="" value="<?PHP echo $reponse5 ?>" name="reponse5">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Commentaire</label>
                        <input type="text" class="form-control" value="<?PHP echo $commentaire5 ?>" name="commentaire5">
                      </div>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-warning" value="Repondre" name="Repondre" >

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>
  <script src="assets/js/Suivi.js"></script>

</body>

</html>