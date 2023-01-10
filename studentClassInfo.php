<?php
    $get_id = $_GET['id'];
    include('header.php');
    include('session.php');
    $user_query = mysqli_query($conn,"SELECT * FROM student WHERE student_id='$session_id'") or die(mysqli_error());
    $user_row = mysqli_fetch_array($user_query);
    ?>

    <?php
    $query_class = mysqli_query($conn,"SELECT * FROM class WHERE class_id='$get_id'") or die(mysqli_error());
    $row_class = mysqli_fetch_array($query_class);
    $teacher_id = $row_class['teacher_id'];

    $teacher_query = mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$teacher_id'")or die(mysqli_error());
    $teacher_row =  mysqli_fetch_array($teacher_query);
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
            <img src="<?php echo $user_row['location']; ?>" data-bs-toggle="modal" data-bs-target="#imageZoomStudent" alt=""> 
        </div>  
    </header>

    <div class="sidenavbar" id="sidenavbar">
        <nav class="sidenavbar-content">
            <div> 
                <a href="#" class="sidenavbar-logo" title="Cavite State University - Carmona (FMS)"><img class="sidenavbar-img" src="images/logo.png" alt=""><span class="sidenavbar-title">CVSU-CARMONA</span></a>
                <div class="sidenavbar-menus">
                    <a href="studentHome.php" class="sidenavbar-menu" title="Home"> <i class="fa-solid fa-house  nav-icon"></i> <span class="sidenavbar-menu-title">Home</span> </a> 
                    <a href="studentClass.php" class="sidenavbar-menu active" title="Class"> <i class="fa-solid fa-users-rectangle nav-icon"></i> <span class="sidenavbar-menu-title">Class</span> </a>
                    <a href="studentSettings.php" class="sidenavbar-menu" title="Settings"> <i class="fa-solid fa-gear fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Departments</span> </a>
                    <a href="studentLogs.php" class="sidenavbar-menu" title="My Activity"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">My Activity</span> </a>
                </div>
            </div>
            <a href="#" role="button" name="signout" onclick="out();" class="sidenavbar-menu signout" title="Sign Out"> <i class="fa-solid fa-right-from-bracket nav-icon"></i> <span class="sidenavbar-menu-title">Sign Out</span> </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content">

        <div class="d-flex justify-content-start mt-3">
            <a href="studentClass.php" role="button" class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i>&nbsp&nbsp<strong>Back to Class</strong></a>
        </div> 

        <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <i class="fa-solid fa-users-rectangle fa-2xl me-2"></i>
            <div class="text-dark">
                <strong>Class: <em class="text-primary"><?php echo $row_class['course_id']; ?></em></strong>
                &nbsp
                <strong>Subject: <em class="text-primary"><?php echo $row_class['subject_id']; ?></em></strong>
                &nbsp
                <strong>Teacher: <em class="text-primary"><?php echo $teacher_row['firstname']." ".$teacher_row['lastname']; ?></em></strong>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body bg-success bg-opacity-10">
                <table id="example" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Description</th>
                            <th>Date Uploaded</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $query = mysqli_query($conn,"SELECT * FROM files WHERE class_id = '$get_id'") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    $file_id = $row['file_id'];
                                ?>
                            <tr class="odd gradeX">
                                <td><i class="fa-regular fa-file"></i>&nbsp<?php echo $row['fname'] ?></td>
                                <td><?php echo $row['fdesc']; ?></td> 
                                <td><?php echo $row['fdatein']; ?></td>
                                <td class="text-center" width="50">
                                    <a href="<?php echo $row['floc']; ?>" class="download-file btn btn-info" title="Download File" id="d<?php echo $file_id; ?>" role="button"><i class="fa-solid fa-file-arrow-down fa-lg"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>File Name</th>
                            <th>Description</th>
                            <th>Date Uploaded</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <?php include('footer.php'); ?>

    </div>
    <!--Container Main end-->
    <?php include('allJavaScripts.php') ?>
</body>
