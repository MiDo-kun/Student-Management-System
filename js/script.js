// CRUD - Create, Read, Update and Delete

// Save student records
function savingrecord() {
   var firstname = $('#firstname').val();
   var middlename = $('#middlename').val();
   var lastname = $('#lastname').val();

   $.ajax({
      type: "POST",
      url: "ajaxquery.php",
      data:
      {
         "savingrecord": '1',
         "firstname": firstname,
         "middlename": middlename,
         "lastname": lastname
      },
      success: function (x) {
         loadrecord();
      }
   });
}

// load records from PHP to MySQL
function loadrecord() {
   $.ajax({
      type: "POST",
      url: "ajaxquery.php",
      data:
      {
         "loadingrecord": '1'
      },
      success: function (x) {
         $('#loadrecords').html(x);
      }
   });
}

// Update records 
function updaterecord() {
   var student_ID = $("#student_ID").val();
   var firstname = $("#edit_firstname").val();
   var middlename = $("#edit_middlename").val();
   var lastname = $("#edit_lastname").val();

   $.ajax({
      type: "POST",
      url: "ajaxquery.php",
      data:
      {
         "updatingrecord": '1',
         "student_ID": student_ID,
         "firstname": firstname,
         "middlename": middlename,
         "lastname": lastname
      },
      success: function (x) {
         loadrecord();
      }
   });
}

// Delete student records
function remove(id) {
   Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
      if (result.isConfirmed) {
         $.ajax({
            type: "POST",
            url: "ajaxquery.php",
            data:
            {
               "deleterecord": '1',
               "studentid": id
            },
            success: function (x) {
               loadrecord();
            }
         })
         Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
         )
      }
   });
}

// Edit student records 
function edit(id, firstname, middlename, lastname) {
   $("#student_ID").val(id);
   $("#edit_firstname").val(firstname);
   $("#edit_middlename").val(middlename);
   $("#edit_lastname").val(lastname);
}

// Reset form after submitting
function resetForm() {
   document.getElementById("form").reset();
}