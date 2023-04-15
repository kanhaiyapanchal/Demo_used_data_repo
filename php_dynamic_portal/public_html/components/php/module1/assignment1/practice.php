<?php include('../../../../header.include.php'); ?>
<div class="container mt-5  main-container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary">Module Create </h2>
            <div class='bg-white p-5'>
                <div class="my-5 mx-3">
                    <h4>Create your Folder </h4>
                    <form action="" method="post">
                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Module Name</span>
                            <input type="text" class="form-control " name="module" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3 w-50">
                            <span class="input-group-text " id="inputGroup-sizing-default">Assignment Name</span>
                            <input type="text" name="assignment" class="form-control " aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="d-grid  w-50">
                            <button type="submit" value="submit" name='submit' class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    <div class="my-5" id="output">                        
                    </div>
                </div>
            </div>
        </div>
<script src="script.js"></script>
<?php include('../../../../footer.inlude.php'); ?>





