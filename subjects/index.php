<!DOCTYPE html>
<html lang="en">
<?php
// we can also include it like this:
// include "./queries/get_all_subjects.php";

include __DIR__."\queries\get_all_subjects.php";

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
          <h1>Subject Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add subject
            </a>
         
          </div>

          <p> <em>This is the subjects dashboard page. To see all subjects in the school .</em></p>
          <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <div class="form mb-3">
                <form method="post" action="queries/add_new_subject.php">
                    <div class="row mb-2">
                        <!-- for subject name: -->
                      <div class="col-sm-6">
                        <label for="subjectName">Subject Name:</label>
                        <input type="text" id="subjectName" name="subjectName" class="form-control">
                      </div>
                      <!-- for subject code -->
                      <div class="col-sm-6">
                        <label for="subjectCode">Subject Code:</label>
                        <input type="number" id="subjectCode" name="subjectCode" class="form-control">
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

          <h6>All the subjects in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>subjectName</th>
                <th>subjectCode</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($result as $r){
                    echo "<tr>";
                    echo "<td>" . $r['subjectName'] . "</td>";
                    echo "<td>" . $r['subjectCode'] . "</td>";
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






