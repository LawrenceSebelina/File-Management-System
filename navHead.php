<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a href=""><img src="images/cvsu_logo.png" alt=""></a>
    <a class="navbar-brand" href="#">CVSU-Camona</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#history-content">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#missionvision-content">Mission & Vision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contactus-content">Contact Us</a>
        </li>
      </ul>
        <!-- Example split danger button -->
        <div class="btn-group d-flex justify-content-center">
            <button type="button" class="btn btn-success sign-btn fw-bold">SIGN IN</button>
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a data-bs-target="#studentlogin" role="button" data-bs-toggle="modal" class="dropdown-item"><span style="margin-right: 1.2rem;"><i class="fa-solid fa-user-graduate me-1 mx-1"></i></span>Student</a></li>
                <li><a data-bs-target="#teacherlogin" role="button" data-bs-toggle="modal" class="dropdown-item"><span style="margin-right: 1.3rem;"><i class="fa-solid fa-user-tie me-1 mx-1"></i></span>Teacher</a></li>
                <li><a data-bs-target="#adminlogin" role="button" data-bs-toggle="modal" class="dropdown-item"><span style="margin-right: 1.4rem;"><i class="fa-solid fa-user-secret me-1 mx-1"></i></span>Admin</a></li>
                <!-- <li><a href="index.php" role="button" class="dropdown-item">Admin</a></li> -->
            </ul>
        </div>
    </div>
  </div>
</nav>

<?php include('allModals.php'); ?>