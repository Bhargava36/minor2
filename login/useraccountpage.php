<?php
include('./../include/config.php');
session_start();
if(!isset($_SESSION["sess_user"])){
	echo "<script type='text/javascript'> document.location = './../index.php'; </script>";
	echo session_status();
}
else
{
	$active_user=$_SESSION["sess_user"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Main css-->
    <link rel="stylesheet" href="./../assets/css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Blood Bank</title>
    <style>
      h2{
        color:darkslateblue;
        font-size:2rem;
      }
      body::-webkit-crollbar{
        width:0px;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
        <div class="container-fluid px-md-5">
          <a class="navbar-brand  " href="#"><img  src="./../assets/images/logo.png" height="70px" width="70px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--<div class="collapse d-md-flex justify-content-end navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2">
              <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">Contact</a>
              </li>
              
            </ul>
            
          </div>-->
        </div>
      </nav>
      <div class="container register pt-5 mt-5 account-content">
      </div>
      <!--Bootstrap js Bundle-->
       <!--Bootstrap js Bundle-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!-- Popper.JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
			<!-- Bootstrap JS -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script><script src="./../script.js"></script>
        <script src="./loginscript.js"></script>
      <script>
        $(document).ready(function() {
            ajaxaccountPageCall();
			});
      </script>
</body>
</html>
<?php }?>