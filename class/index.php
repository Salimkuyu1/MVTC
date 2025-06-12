<!DOCTYPE html>
<html lang="en">
<?php
// we can also include it like this:
// include "./queries/get_all_classes.php";

include __DIR__."\queries\get_all_classes.php";

// this is used to select a teacher and add to the select element.
include __DIR__ . "\queries\get_all_teacher_for_select.php";


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
            <h1>Class Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add Class
            </a>
         
          </div>

          <p> <em>This is the class dashboard page. To see all class in the school .</em></p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <div class="form mb-3">
                  <form method="post" action="queries/add_new_class.php">
                      <div class="row mb-2">  
                        <div class="col-sm-6">
                          <label for="classteacher">Select a Class Teacher:</label>
                          <select class="form-control" name="classteacher">
                            <!-- including the teachers fetched using php. -->
                          <?php
                            foreach($response as $re){
                              echo "<option value=" .$re['id']. ">" .$re['name'] ."( " . $re['PNo'] . ")" ."</option>";
                            }

                          ?>

                          </select>
                        </div>
                        
                        <div class="col-sm-6">
                          <label for="time">Time:</label>
                          <input type="times" id="time" name="time" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col-sm-4">
                          <label for="name">Class Name:</label>
                          <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="col-sm-4">
                          <label for="maxno">Maximum Number:</label>
                          <input type="number" id="maxno" name="maxno" class="form-control">
                        </div>
                        <div class="col-sm-4">
                          <label for="subjectsNo">Number of subjects:</label>
                          <input type="number" id="subjectsNo" name="subjectsNo" class="form-control">
                        </div>
                      </div>

                      <div class="row mb-2">
                          
                        <div class="col-sm-6">
                          <label for="CreationDate">Creation Date:</label>
                          <input type="date" id="CreationDate" name="CreationDate" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label for="class_code">class code:</label>
                          <input type="number" id="class_code" name="class_code" class="form-control">
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

          <h6>All the Classes in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Class Name</th>
                <th>Class code</th>
                <th>Class Teacher</th>
                <th>No of subjects</th>
                <th>Time</th>
                <tH>Creation Date</th>
                <th>maxno</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($result as $r){
                    echo "<tr>";
                    echo "<td> <a href='pages/class_subjects.php?class_id=". $r['id']."'>" . $r['name'] . "</a> </td>";
                    echo "<td>" . $r['class_code'] . "</td>";
                    echo "<td>" . $r['classteacher'] . "</td>";
                    echo "<td>" . $r['subjectsNo'] . "</td>";
                    echo "<td>" . $r['time'] . "</td>";
                    echo "<td>" . $r['CreationDate'] . "</td>";
                    echo "<td>" . $r['maxno'] . "</td>";
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






