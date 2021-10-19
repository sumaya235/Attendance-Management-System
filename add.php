<?php 
include"inc/header.php" ;
?>

        <div class="container">
            <div class= "panel panel-default">

            <div class="panel-heading">
                    
                
                    <h2>
                        <a class= "btn btn-success"href="add.php">Add Student</a>
                        <a class= "btn btn-info float-end"href="index.php">Back</a>
                    </h2>
                   
            </div>

            <div class="panel-body">
                   
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="name">Student Name :</label>
                            <input type="text" class= "form-control" name="name" id="name" required="">
                        </div>
</br>
                        <div class="form-group">
                            <label for="roll">Student Roll :</label>
                            <input type="text" class= "form-control"name="roll" id="roll" required="">
                        </div>
</br>
                        <div class="form-group">
                            
                            <input type="submit" name="submit" class="btn btn-primary" value="add student">
                        </div>

                    </form>
            </div>

        </div>
        </div>
</br>
<?php 
include"inc/footer.php" ;
?>


