<?php include"inc/header.php";?>

       <div class="container">
       <div class= "panel panel-default">

<div class="panel-heading">
        
    
        <h2>
            <a class= "btn btn-success"href="add.php">Add Student</a>
            <a class= "btn btn-info float-end"href="">View All</a>
        </h2>
       
</div>

<div class="panel-body">
        <div class="well text-center "style= "font-size:20px" >
            <strong>Date: </strong>
            <?php $cur_date = date('y-m-d'); echo $cur_date ; ?>
        </div>
        <form action="" method="post">
            <table class=" table table-striped">
                <tr>
                    <th width="25%">Serial</th>
                    <th width="25%">Student Name</th>
                    <th width="25%">Student Roll</th>
                    <th width="25%">Attendance</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Sanjina Esha</td>
                    <td>23</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>
                <tr>
                    <td>02</td>
                    <td>Sumaya Islam</td>
                    <td>11</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>
                <tr>
                    <td>03</td>
                    <td>S.N Sumi</td>
                    <td>34</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>
                <tr>
                    <td>04</td>
                    <td>Samia Anjum</td>
                    <td>22</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>
                <tr>
                    <td>05</td>
                    <td>Maria Tonny</td>
                    <td>17</td>
                    
                </tr>
                <tr>
                    <td>06</td>
                    <td>Eti</td>
                    <td>34</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>
                <tr>
                    <td>07</td>
                    <td>Bristy</td>
                    <td>46</td>
                    <td>
                        <input type="radio" name="attend" value="present">P

                        <input type="radio" name="attend" value="present">A

                    </td>
                    
                </tr>

                <tr>
                    <td colspan="4">
                        <input type="submit" class="btn btn-primary"name="submit"value="submit">
                    </td>
                </tr>
            </table>
        </form>
</div>

</div>
       </div> 



        
    <?php include"inc/footer.php";?>


</body>
</html>