<?php include('../../../../header.include.php'); ?>
<div class="container mt-5  main-container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Module 1 : Assignement 2</h2>
            <div class='bg-white p-5'>
                <strong>Q1.</strong>
                <p> Create a PHP program to get the PHP version and configuration information.
                </p>


                <div class="my-5 mx-3">
                    <h4>Solution: </h4>
                   
                  <?php 
                    echo 'PHP Version : '.phpversion();
                    
                  ?>
                  <br> PHP configuration INFo <a href="http://php_dynamic_portal.localhost/components/php/module1/assignment1/phpinfo.php">click here</a>

                </div>


            </div>
        </div>
        <script src="script.js"></script>
        <?php include('../../../../footer.inlude.php'); ?>