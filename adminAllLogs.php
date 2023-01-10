<?php
    include('header.php');
    include('session.php');
    $user_query = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'") or die(mysqli_error());
    $user_row = mysqli_fetch_array($user_query);
?>

<body class="body" id="body">

    <header class="sidenav-header bg-success" id="sidenav-header">
        <div class="sidenav-toggle"> 
            <i class="fa-solid fa-bars" id="sidenav-toggle-icon" title="Menu"></i>
        </div>
        <div class="sidenav-title">
            <p>
                FILE MANAGEMENT SYSTEM
            </p>
        </div>
        <div class="sidenav-logo"> 
            <img src="<?php echo $user_row['location']; ?>" data-bs-toggle="modal" data-bs-target="#imageZoomAdmin" alt="">  
        </div>  
    </header>

    <div class="sidenavbar" id="sidenavbar">
        <nav class="sidenavbar-content">
            <div> 
                <a href="#" class="sidenavbar-logo" title="Cavite State University - Carmona (FMS)"><img class="sidenavbar-img" src="images/logo.png" alt=""><span class="sidenavbar-title">CVSU-CARMONA</span></a>
                <div class="sidenavbar-menus">
                    <a href="adminStudents.php" class="sidenavbar-menu" title="Students"> <i class="fa-solid fa-user-graduate fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Students</span> </a>
                    <a href="adminTeachers.php" class="sidenavbar-menu" title="Teachers"> <i class="fa-solid fa-user-tie fa-xl nav-icon" style="margin-left: 0.1rem;"></i> <span class="sidenavbar-menu-title">Teachers</span> </a>
                    <a href="adminAdmin.php" class="sidenavbar-menu" title="Admins"> <i class="fa-solid fa-users nav-icon"></i> <span class="sidenavbar-menu-title">Admins</span> </a>
                    <a href="#" class="sidenavbar-menu active" title="All Activity Logs"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">All Activity Logs</span> </a>
                </div>
            </div> 
            <a href="adminHome.php" role="button" name="backtomenu" class="sidenavbar-menu" title="Back to Main Menu"> <i class="fa-solid fa-circle-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Back</span> </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content bg-light">

        <div class="d-flex justify-content-start mt-3">
            <a href="adminHome.php" role="button" class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i>&nbsp&nbsp<strong>Back to Home</strong></a>
        </div> 

        <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <i class="fa-solid fa-clock-rotate-left fa-2xl me-2"></i>
            <div>
                <strong>All Activity Logs</strong>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-body">
            
                <table id="example" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th width="100">User Type</th>
                            <th>Name</th>
                            <th>Action</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($conn,"SELECT * FROM activitylogs ORDER BY date DESC") or die(mysqli_error());
                            while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                            <tr class="odd gradeX">
                                <td><?php echo $row['activity']; ?></td> 
                                <td><?php echo $row['user_type']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['action']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Location</th>
                            <th width="100">User Type</th>
                            <th>Name</th>
                            <th>Action</th>
                            <th>Date & Time</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <?php include('footer.php'); ?>

    </div>
    <!--Container Main end-->
<?php include('allJavaScripts.php'); ?>

</body>
