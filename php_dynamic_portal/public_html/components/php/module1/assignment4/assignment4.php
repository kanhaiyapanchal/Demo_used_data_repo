<?php include('../../../../header.include.php'); ?>
<div class="container mt-5  main-container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Module 1 : Assignement 1</h2>
            <div class='bg-white p-5'>
                <strong>Q1.</strong>
                <p>Create a simple Registration and Login form using HTML5. Validation should be available. Form accepts the following fields and display the fields through PHP echo statement:
                     First Name, Last Name, Email Address, Username, Password, Date of Birth,
                    Website, Age, Phone number, Address, Post Code, Country, State, City.
                </p>


                <div class="my-5 mx-3">
                    <h4>Solution: </h4>
                    <form action="asgin_sub.php" method='get'>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">First Name</span>
                            <input required type="text" class="form-control " name="fname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Last Name</span>
                            <input required type="text" class="form-control " name="lname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Email Address</span>
                            <input required type="email" id="address" name="email" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Username</span>
                            <input required type="text" class="form-control "name='username' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Password</span>
                            <input required type="password" class="form-control "name='password' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Date of Birth</span>
                            <input required type="date" class="form-control "name='dob' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Age</span>
                            <input required type="number" class="form-control "name='age' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Phone Number</span>
                            <input required type="number" class="form-control "name='contact' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Address</span>
                            <input required type="text" class="form-control "name='address' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Post Code</span>
                            <input required type="text" class="form-control "name='pcode' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Country</span>
                            <input required type="text" class="form-control "name='country' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">State</span>
                            <input required type="text" class="form-control "name='state' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">City</span>
                            <input required type="text" class="form-control "name='city' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="d-grid  w-50">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form> 
                    

                </div>

                
            </div>
        </div>
        <script src="script.js"></script>
        <?php include('../../../../footer.inlude.php'); ?>

        