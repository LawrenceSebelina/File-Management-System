<?php
    include('header.php');
    include('session.php');
    $user_query = mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'") or die(mysqli_error());
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
            <img src="<?php echo $user_row['location']; ?>" data-bs-toggle="modal" data-bs-target="#imageZoomTeacher" alt=""> 
        </div>  
    </header>

    <div class="sidenavbar" id="sidenavbar">
        <nav class="sidenavbar-content">
            <div> 
                <a href="#" class="sidenavbar-logo" title="Cavite State University - Carmona (FMS)"><img class="sidenavbar-img" src="images/logo.png" alt=""><span class="sidenavbar-title">CVSU-CARMONA</span></a>
                <div class="sidenavbar-menus">
                    <a href="teacherHome.php" class="sidenavbar-menu" title="Home"> <i class="fa-solid fa-house nav-icon"></i> <span class="sidenavbar-menu-title">Home</span> </a> 
                    <a href="teacherClass.php" class="sidenavbar-menu" title="Class"> <i class="fa-solid fa-users-rectangle nav-icon"></i> <span class="sidenavbar-menu-title">Class</span> </a>
                    <a href="teacherSubject.php" class="sidenavbar-menu" title="Subjects"> <i class="fa-solid fa-book-open nav-icon"></i> <span class="sidenavbar-menu-title">Subjects</span> </a>
                    <a href="teacherStudents.php" class="sidenavbar-menu" title="Students"> <i class="fa-solid fa-graduation-cap nav-icon"></i> <span class="sidenavbar-menu-title">Students</span> </a>
                    <a href="teacherSettings.php" class="sidenavbar-menu" title="Settings"> <i class="fa-solid fa-gear fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Settings</span> </a>
                    <a href="#" class="sidenavbar-menu active" title="My Activity"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">My Activity</span> </a>
                </div>
            </div>   
                <?php 
                    $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                    $teacher_roww=mysqli_fetch_array($teacher_query);
                ?>
                <a href="#" role="button" name="signout" onclick="out();" class="sidenavbar-menu signout" title="Sign Out"> <i class="fa-solid fa-right-from-bracket nav-icon"></i> <span class="sidenavbar-menu-title">Sign Out</span> </a>
                
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content bg-light">

        <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <i class="fa-solid fa-clock-rotate-left fa-2xl me-2"></i>
            <div>
                <strong>My Activity Logs</strong>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-body">
            
                <table id="example" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>My Name</th>
                            <th>Action</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($conn,"SELECT * FROM activitylogs WHERE user_type = 'Teacher' AND teacher_id = '$session_id' ORDER BY date DESC") or die(mysqli_error());
                            while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                            <tr class="odd gradeX">
                                <td><?php echo $row['activity']; ?></td> 
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['action']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Location</th>
                            <th>My Name</th>
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
