
<?php
    require_once __DIR__. "/../../fxn/config.php";

    $class_id = $_GET['class_id'];

    //for the form select
    require_once __DIR__. "/../queries/get_all_teacher_for_select.php";
    require_once __DIR__. "/../../subjects/queries/get_all_subjects.php";

    //to populate the table
    require_once __DIR__. "/../queries/class_subjects/get_all_class_subject_teachers.php";

    require_once __DIR__. "/../queries/class_subjects/get_name_of_class.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . "/../../includes/header.php"; ?>
<body>

  <!-- topbar -->
  <?php require_once __DIR__ . "/../../includes/topbar.html"; ?>

  
    <div class="container-fluid">
      <div class="row">
        
        <?php require_once __DIR__ . "/../../includes/sidebar.php"; ?>
      
        <main role="main" class="col-md-8 ml-sm-auto col-lg-9 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1><?php echo $className?></h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add class
            </a>
         
          </div>

          <p> <em>This is the classes dashboard page. To see all classes in the school .</em></p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <div class="form mb-3">
                  <form method="post" action="../queries/class_subjects/add_subject_to_class.php">
                      <div class="row mb-2">
                        
                      <input type="text" name="class_id" value="<?php echo $class_id; ?>" hidden>
                        <div class="col-sm-6">
                          <label for="Teacher">Select a Teacher:</label>
                          <select class="form-control" name="name">
                            <!-- including the teachers fetched using php. -->
                          <?php
                            foreach($response as $re){
                              echo "<option value=" .$re['id']. ">" .$re['name'] ."( " . $re['PNo'] . ")" ."</option>";
                            }

                          ?>

                          </select>
                        </div>
                        
                        <div class="col-sm-6">
                          <label for="subject">Select a subject:</label>
                          <select class="form-control" name="subjects">
                            <!-- including the subjects fetched using php. -->
                          <?php
                            foreach($result as $r){
                              echo "<option value=" .$r['id']. ">" .$r['subjectName'] ."( " . $r['subjectCode'] . ")" ."</option>";
                            }

                          ?>

                          </select>
                        </div>
            
                      </div>

                      <div class="btn-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                      </div>
                  </form>
              </div>
            </div>
          </div>
          
          <hr class="my-3cg,">

          <h6>All the Classes in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Teacher</th>
                <th>Subject</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($teachers as $r){
                    echo "<tr>";
                    echo "<td>" . $r['teacher'] . "</td>";
                    echo "<td>" . $r['subject'] . "</td>";
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
    <?php require_once __DIR__ . "/../../includes/script.php"; ?>

</body>
</html>






 