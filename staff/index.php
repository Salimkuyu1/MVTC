<!DOCTYPE html>
<html lang="en">
<?php
// we can also include it like this:
// include "./queries/get_all_staff.php";

include __DIR__."\queries\get_all_staffs.php";

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . "/../includes/header.php"; ?>
<body>

  <!-- topbar -->
  <?php require_once __DIR__ . "/../includes/topbar.html"; ?>

  
    <div class="container-fluid">
      <div class="row">
        
      <?php require_once __DIR__ . "/../includes/sidebar.php"; ?>
      
        <main role="main" class="col-md-8 ml-sm-auto col-lg-9 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1>Support  Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add staff
            </a>
         
          </div>

          <p> <em>This is the support staff  dashboard page. To see all support staff in the school .</em></p>
          <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <div class="form mb-3">
                <form method="post" action="queries/add_new_staff.php">
                    <div class="row mb-2">
                        <!-- for staff name: -->
                      <div class="col-sm-6">
                        <label for="staffname">Staff Name:</label>
                        <input type="text" id="staffnaame" name="staffname" class="form-control">
                      </div>
                      <!-- for  residence -->
                      <div class="col-sm-6">
                        <label for="Residence">Residence:</label>
                        <input type="text" id="Residence" name="Residence" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-2">  
                      <div class="col-sm-6">
                        <label for="JobType">Job Type:</label>
                        <input type="text" id="JobType" name="JobType" class="form-control">
                      </div>
                      <!-- for phone number -->
                      <div class="col-sm-6">
                        <label for="PhoneNumber">Phone Number:</label>
                        <input type="number" id="PhoneNumber" name="PhoneNumber" class="form-control">
                      </div>
                    </div>

                    <div class="btn-group">
                      <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
          
      
          <hr class="my-3">

          <h6>All the support staffs in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Staff Name</th>
                <th>Residence</th>
                <tH>Job Type</th>
                <th>Phone Number</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($result as $r){
                    echo "<tr>";
                    echo "<td>" . $r['staffname'] . "</td>";
                    echo "<td>" . $r['Residence'] . "</td>";
                     echo "<td>" . $r['JobType'] . "</td>";
                    echo "<td>" . $r['PhoneNumber'] . "</td>";
                    echo "</tr>";
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
    <?php require_once __DIR__ . "/../includes/script.php"; ?>

</body>
</html>






