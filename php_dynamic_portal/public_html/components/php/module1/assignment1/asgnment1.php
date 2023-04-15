<?php include('../../../../header.include.php'); ?>
<div class="container mt-5  main-container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Module 1 : Assignement 1</h2>
            <div class='bg-white p-5'>
                <strong>Q1.</strong>
                <p>Create a form which contains two field name ,address and button . on button click value should be
                    posted to the array. and display this data into the table format
                </p>


                <div class="my-5 mx-3">
                    <h4>Solution: </h4>
                    <form action="">
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Name</span>
                            <input type="text" class="form-control " id="fname" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Address</span>
                            <input type="text" id="address" class="form-control " aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </form>
                    <small id="error-msg"></small>
                    <div class="d-grid  w-50">
                        <button type="button" onclick='return submitData(fname.value,address.value)'
                            class="btn btn-primary">Button</button>
                    </div>

                    <div class="my-5" id="table">
                        
                    </div>

                </div>


            </div>
        </div>
        <script src="script.js"></script>
        <?php include('../../../../footer.inlude.php'); ?>