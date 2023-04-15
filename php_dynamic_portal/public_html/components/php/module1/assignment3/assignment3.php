<?php include('../../../../header.include.php'); ?>
<div class="container mt-5  main-container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Module 1 : Assignement 3</h2>
            <div class='bg-white p-5'>
                <strong>Q1.</strong>
                <p>  Create a PHP program that prints your name, email address and department using the php functions . Also, Include comments in the PHP code.
                </p>


                <div class="my-5 mx-3">
                    <h4>Solution: </h4>
                   
                  <?php 
                    // data print function 
                    function displayUserData($name, $email,$department){
                      echo "<br> Name :".$name;
                      echo "<br> Email address :".$email;
                      echo "<br> Department :".$department;
                    }

                    // Calling function 
                    displayUserData('Rajesh','rj@gamil.com','PHP OPS');
                  ?>
                  
                </div>


            </div>
        </div>
        <script src="script.js"></script>
        <?php include('../../../../footer.inlude.php'); ?>