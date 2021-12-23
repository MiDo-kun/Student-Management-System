<!-- Check console if you found any problem here, when it comes to setting up AJAX -->
<!-- CRUD - Create, Read, Update and Delete -->
<?php
   include 'mysql_DB/db.php';

   // Start of Saving Records into the Database
   if(isset($_POST['savingrecord']))
   {
      
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

      $insert = "INSERT INTO `tblinformation` (firstname, middlename, lastname) VALUES ('$firstname', '$middlename', '$lastname')";
      $runinsert = mysqli_query($conn, $insert);
   }
   // End of Saving Records into the Database

   // Start of Getting Records into the Database
   if(isset($_POST['loadingrecord']))
   {
      $selectcount = "SELECT * FROM `tblinformation`";
      $runselectcount = mysqli_query($conn, $selectcount);
      
      // Output total records
      echo ' <p> Total Record/s:  '. mysqli_num_rows($runselectcount). '</p>';

      echo 
      '
      <table class="table table-bordered">
         <thead class="thead-dark">
            <tr>
               <th width="1%">#</th>
               <th>First Name</th>
               <th>Middle Name</th>
               <th>Last Name</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
      '; ?>

         <?php
            $select = "SELECT * FROM `tblinformation` ORDER BY `firstname` ASC";
            $runselect = mysqli_query($conn, $select);
            $count = 1;
            while($rowselect = mysqli_fetch_assoc($runselect))
            {
               echo 
               '
                  <tr>
                     <td>'.$count++.'.</td>
                     <td>'.$rowselect['firstname'].'</td>
                     <td>'.$rowselect['middlename'].'</td>
                     <td>'.$rowselect['lastname'].'</td>
                     <td width="3%">
                        <div class="btn-group" role="group">
                           <button onclick="remove(\''.$rowselect['studentid'].'\' )" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                           <button onclick="edit(\''.$rowselect['studentid'].'\', \''.$rowselect['firstname'].'\', \''.$rowselect['middlename'].'\' , \''.$rowselect['lastname'].'\')" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editStudent"><i class="fas fa-edit"></i></button>
                        </div> 
                     </td>
                  </tr>
               ';
            }
         ?>
   <?php
      echo 
      '
         </tbody>
      </table>
      ';
   }
   // End of Getting Records into the Database

   // Start Update Records into the Database
   if(isset($_POST['updatingrecord']))
   {
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

      $update = "UPDATE `tblinformation` SET firstname='$firstname', middlename='$middlename', lastname='$lastname' WHERE studentid = '$_POST[student_ID]'";
      $updateRecord = mysqli_query($conn, $update);
   }
   // End of Update Records into the Database 

   // Start of Deleting Records into the Database
   if(isset($_POST['deleterecord']))
   {
      $student_ID = $_POST['studentid'];
      $delete = "DELETE FROM `tblinformation` WHERE studentid = '$student_ID'";
      $rundelete = mysqli_query($conn, $delete);
   }
   // End of Deleting Records into the Database
?>