<?php
   include "mysql_DB/db.php";
?>

<html lang='en'>

<head>
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <title>Student Management System</title>
   <script src='https://kit.fontawesome.com/526f94b3cb.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel='shortcut icon' href='images/' type='image/x-icon'>
   <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
   <link href='css/style.css' rel='stylesheet'>
</head>

<body onload="loadrecord()">
   
<!-- Start of Container -->
   <div class="container">
      <hr>
      <h1> <i class="fab fa-airbnb"></i> Student Management System</h1>
      <hr>
      <form action="" id="form">
         <!-- Start of Row -->
         <div class="row">
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname">
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="middlename">Middle Name</label>
                  <input type="text" class="form-control" id="middlename">
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname">
               </div>
            </div>
            <!-- End of Row -->
         </div>
      </form>

      <!-- Start Nested Row -->
      <div class="row">
         <div class="col-md-12">
            <hr>
            <button onclick="savingrecord(); resetForm()" type="submit" class="btn btn-primary"> <i
                  class="fa fa-save"></i> Save</button>
         </div>
      </div>
      <!-- End of Nested Row -->

      <!-- Start of Table -->
      <div class="row">
         <div class="col-lg-12">
            <hr>
            <div id="loadrecords">
               <!-- Load Data from ajaxquery.php -->
            </div>
         </div>
      </div>
      <!-- End of Table -->
   </div>
   <!-- End of Container -->

   <!-- Modal -->
   <div class="modal fade" id="editStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <input type="hidden" class="form-control" id="student_ID" placeholder="Student ID">
                     <label for="usrname"><span class="glyphicon glyphicon-user"></span>First Name</label>
                     <input type="text" class="form-control" id="edit_firstname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                     <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Middle Name</label>
                     <input type="text" class="form-control" id="edit_middlename" placeholder="Enter Middle Name">
                  </div>
                  <div class="form-group">
                     <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Last Name</label>
                     <input type="text" class="form-control" id="edit_lastname" placeholder="Enter Last Name">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" onclick="updaterecord()" class="btn btn-default btn-primary pull-left" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span>Confirm</button>
                  <button type="submit" class="btn btn-default btn-danger pull-left" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span>Cancel</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End of Modal -->

   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/script.js"></script>
</body>

</html>