<?php
$path = 'http://php_dynamic_portal.localhost/';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo $path; ?>asset/dist/css/bootstrap.min.css" />
  <link rel="icon" type="image/x-icon" href="<?php echo $path; ?>asset/img/developer.png">
  <script src="<?php echo $path; ?>asset/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo $path; ?>asset/css/style.css" />
  <title>ASGMT PORTAL</title>
</head>

<body class="bg-light">
  <!-- TOP NAVABAR  -->
  <header class="bg-light fixed-top ">
    <nav>
      <div class="d-flex justify-content-between flex-wrap">
        <div class="narvar-brand d-flex py-2">
          <span class="px-3 py-2 fw-bold d-none" id="up">
            <img class="tottagel-button" src="<?php echo $path; ?>asset/dist/avg/bar-chart-steps.svg" alt="aa" /></span>
          <span class="px-3 py-2 fw-bold " id="down">
            <img class="tottagel-button" src="<?php echo $path; ?>asset/dist/avg/up-bar.svg" alt="aa" /></span>
          <h3 class="mt-2">
            <a href="<?php echo $path; ?>"><strong><u class="text-info">ASGMT</u> Portal</strong></a>
          </h3>
        </div>
        <div class="d-flex p-3 gap-5 ">
          <div class="input-group ">
            <input class="form-control border-end-0 border rounded-pill" type="text" placeholder="Search ... " id="search">

          </div>
          <div class="d-flex">
            <img class="img-fluid rounded-circle img-user d-none d-md-block" src="<?php echo $path; ?>asset/img/developer.png" alt="kp" />
            <span class="px-3 mt-2 d-none d-md-block"><strong>Kanhaiya Panchal</strong></span>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- LEFT NAVBAR  -->
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-3 mt-3 " id="sideBar">
          <div class="bubble-top ">
            <div class="sidebardiv">
              <!-- FOR PHP  -->

            </div>
          </div>
        </div>

        <!-- Main Content  -->
        <div class="col-12 col-md-9 mt-5 p-4" id='maindiv'>
          


        <!-- For Search data show  -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Searched Data </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body s-print">
                  
               
                </div>
               
              </div>
            </div>
          </div>
          
          