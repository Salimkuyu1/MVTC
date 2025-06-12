<?php
include __DIR__. "/queries/get_all_students.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . "/../includes/header.html"; ?>
<body>
 <!-- topbar -->
  <?php require_once __DIR__ . "/../includes/topbar.html"; ?>
<div class="container-fluid">
<div class="row"> 
     
      <?php require_once __DIR__ . "/../includes/sidebar.html"; ?>
       <main role="main" class="col-md-8 ml-sm-auto col-lg-9 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1>Student Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add Student
            </a>
          </div>

<div class="container">
    
<h1>Student Homepage.</h1>

<p>This is the student dashboard page. To see all students in the school.</p>

<div class="form mb-2">
    <form method="post" action="queries/add_new_students.php">
        <div class="row mb-2">
            <!-- for student name: -->
       <div class="col-sm-9">
        <label for="StudentName">Student Name:</label>
        <input type="text" name="StudentName" id="StudentName" class="form-control">
            </div>
            </div>

            <!--for admission number -->
            <div class="row mb-2">
            <div class="col-sm-3"> 
        <label for="AdmNo">Adm No:</label>
        <input type="number" name="AdmNo" id="AdmNo" class="form-control">
            </div>
           <div class="col-sm-3">
        <label for="Gender">gender:</label>
        <input type="text" name="Gender" id="Gender" class="form-control">
            </div>
            <div class="col-sm-3">
        <label for="DateOfBirth">Date Of Birth:</label>
        <input type="date" name="DateOfBirth" id="DateOfBirth" class="form-control">
            </div>
            <div class="col-sm-3">
        <label for="PhoneNumber">Phone Number:</label>
        <input type="number" name="PhoneNumber" id="PhoneNumber" class="form-control">
            </div>
    </div>
 

<div class="btn-group float-centre">
<button class="btn btn-primary id=savebtn">save</button>
</div>

<div class= "table-responsive">
<table class= "table table-striped table-primary">
    <thead>
        <tr>
        <th>Student Name</th>
        <th>Adm No</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Phone Number</th>
         </tr>
    </thead>

    <tbody>
        <?php

        foreach ($result as $r) {
            echo "<tr>";
            echo "<td>" . $r['name'] . "</td>";
            echo "<td>" . $r['id'] . "</td>";
            echo "<td>" . $r['gender'] . "</td>";
            echo "<td>" . $r['DoB'] . "</td>";
            echo "<td>" . $r['PhoneNumber'] . "</td>";
            echo"</tr>";
  
        }
        ?>   
</tbody>
            </table>
          </div>
        </main>
      </div>
  </div>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
</body>
</html>
