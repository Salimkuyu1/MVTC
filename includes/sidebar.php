<?php
$baseURL = $_SERVER['REQUEST_SCHEME'] . '://' .  $_SERVER['HTTP_HOST'] ;

?>

<nav class="col-md-3 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo $baseURL ?>/mvtc1/">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/student/">
                  <span data-feather="file"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/teachers/">
                  <span data-feather="shopping-cart"></span>
                  Teachers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/class/">
                  <span data-feather="users"></span>
                  Classes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/subjects/">
                  <span data-feather="bar-chart-2"></span>
                  Subjects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/results/">
                  <span data-feather="layers"></span>
                  Results
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $baseURL ?>/mvtc1/staff/">
                  <span data-feather="file"></span>
                  support_staff
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../finance/">
                  <span data-feather="currency"></span>
                  
                </a>
              </li>
            </ul>
          </div>
        </nav>