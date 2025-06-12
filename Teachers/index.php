<!DOCTYPE html>
<html lang="en">
<?php
// we can also include it like this:
// include "./queries/get_all_teachers.php";

include __DIR__."\queries\get_all_teachers.php";

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
          <h1>Teachers Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add teacher
            </a>
         
          </div>

          <p> <em>This is the teachers dashboard page. To see all teachers in the school .</em></p>
          <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <div class="form mb-3">
                <form method="post" action="queries/add_new_teachers.php">
                    <div class="row mb-2">
                        <!-- for teacher name: -->
                      <div class="col-sm-6">
                        <label for="TeacherName">Teacher Name:</label>
                        <input type="text" id="TeacherName" name="TeacherName" class="form-control">
                      </div>
                      <!-- for passport number -->
                      <div class="col-sm-6">
                        <label for="PNo">Passport No:</label>
                        <input type="number" id="PNo" name="PNo" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-2">
                        <!-- for teacher name: -->
                      <div class="col-sm-6">
                        <label for="gender">Gender:</label>
                        <input type="text" id="gender" name="gender" class="form-control">
                      </div>
                      <!-- for passport number -->
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

          <h6>All the teachers in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Teacher Name</th>
                <th>PNo</th>
                <tH>Gender</th>
                <th>Phone Number</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($result as $r){
                    echo "<tr>";
                    echo "<td>" . $r['name'] . "</td>";
                    echo "<td>" . $r['PNo'] . "</td>";
                     echo "<td>" . $r['gender'] . "</td>";
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


</body>
</html>






