<?php
    $get_id = $_GET['id'];
    include('header.php');
    include('session.php');
    $user_query = mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'") or die(mysqli_error());
    $user_row = mysqli_fetch_array($user_query);

    $course_query = mysqli_query($conn,"SELECT * FROM class WHERE teacher_id='$session_id' AND class_id='$get_id'") or die(mysqli_error());
    $course_row = mysqli_fetch_array($course_query);
    $course_id = $course_row['course_id'];
?>

<?php
    $query_class = mysqli_query($conn,"SELECT * FROM class WHERE teacher_id='$session_id' AND class_id='$get_id'") or die(mysqli_error());
    $row_class = mysqli_fetch_array($query_class);
    $id_class = $row_class['class_id'];
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
                    <a href="teacherClass.php" class="sidenavbar-menu active" title="Class"> <i class="fa-solid fa-users-rectangle nav-icon"></i> <span class="sidenavbar-menu-title">Class</span> </a>
                    <a href="teacherSubject.php" class="sidenavbar-menu" title="Subjects"> <i class="fa-solid fa-book-open nav-icon"></i> <span class="sidenavbar-menu-title">Subjects</span> </a>
                    <a href="teacherStudents.php" class="sidenavbar-menu" title="Students"> <i class="fa-solid fa-graduation-cap nav-icon"></i> <span class="sidenavbar-menu-title">Students</span> </a>
                    <a href="teacherSettings.php" class="sidenavbar-menu" title="Settings"> <i class="fa-solid fa-gear fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Settings</span> </a>
                    <a href="teacherLogs.php" class="sidenavbar-menu" title="My Activity"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">My Activity</span> </a>
                </div>
            </div>   
                <?php 
                    $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                    $teacher_row=mysqli_fetch_array($teacher_query);
                ?>
                <a href="#" role="button" name="signout" onclick="out();" class="sidenavbar-menu signout" title="Sign Out"> <i class="fa-solid fa-right-from-bracket nav-icon"></i> <span class="sidenavbar-menu-title">Sign Out</span> </a>
                
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content row">

        <div class="d-flex justify-content-start mt-3">
            <a href="teacherClass.php" role="button" class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i>&nbsp&nbsp<strong>Back to Class</strong></a>
        </div> 

        <div class="col-md-12">
            <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
                <i class="fa-solid fa-book-open fa-2xl me-2"></i>
                <div>
                    <strong>Subject: <em class="text-primary"><?php echo $course_row['subject_id']; ?></em></strong> 
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-success d-flex align-items-center mt-1" role="alert">
                <i class="fa-solid fa-user-graduate fa-2xl me-2"></i>
                <div>
                    <strong>Students</strong>
                </div>
            </div>
        
            <div class="card mb-3">
                <div class="card-body bg-success bg-opacity-10">

                <div class="d-flex justify-content-end mb-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal"><i class="fa-solid fa-square-plus"></i>&nbsp&nbsp<strong>Add Student</strong></button>
                </div>  
                
                    <table id="example" class="table table-striped display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($conn,"SELECT * FROM sws WHERE cys = '$course_id' AND class_id='$get_id' ORDER BY sws_id DESC") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    $id = $row['sws_id'];
                                    $student_id = $row['student_id'];

                                    $student_query = mysqli_query($conn,"SELECT * FROM student WHERE student_id='$student_id'") or die(mysqli_error());
                                    $student_row = mysqli_fetch_array($student_query);
                                    ?>
                            <tr class="odd gradeX">
                                <td style="display:none;"><?php echo $teacher_row['teacher_id']; ?></td>
                                <td style="display:none;"><?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname'];  ?></td>
                                <td style="display:none;"><?php echo $id; ?></td>    
                                <td style="display:none;"><?php echo $id_class; ?></td>  
                                <td width="50"><img class="rounded-circle" src="<?php echo $student_row['location']; ?>" height="50" width="50"></td>
                                <td><?php echo $student_row['firstname'] . " " . $student_row['middle_name'] . " " . $student_row['lastname']; ?></td>
                                <td class="text-center" width="50">
                                    <a class="deleteStudent btn btn-danger" title="Delete Student" role="button"><i class="fa-solid fa-trash-can"></i></a>          
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
        
        <!-- Upload Files Table-->
        
        <div class="col-md-6">
            <div class="alert alert-success d-flex align-items-center mt-1" role="alert">
                <i class="fa-solid fa-file-arrow-up fa-2xl me-2"></i>
                <div>
                    <strong>Uploaded Files</strong>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body bg-success bg-opacity-10">

                <div class="d-flex justify-content-end mb-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadFileModal"><i class="fa-solid fa-upload"></i>&nbsp&nbsp<strong>Upload Files</strong></button>  
                </div>   

                    <table id="example2" class="table table-striped display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th>Class</th>
                                <th class="text-center">&nbsp&nbspActions&nbsp&nbsp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $file_query = mysqli_query($conn,"SELECT * FROM files WHERE class_id='$id_class' ORDER BY file_id DESC") or die(mysqli_error());
                                while ($file_row = mysqli_fetch_array($file_query)) {
                                    $file_id = $file_row['file_id'];
                                    ?>
                                <tr>
                                    <td style="display:none;"><?php echo $teacher_row['teacher_id']; ?></td>
                                    <td style="display:none;"><?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname'];  ?></td>
                                    <td style="display:none;"><?php echo $file_id; ?></td>
                                    <td style="display:none;"><?php echo $id_class; ?></td>
                                    <td><i class="fa-regular fa-file"></i>&nbsp<?php echo $file_row['fname']; ?></td>
                                    <td class="text-center" width="90">
                                        <a class="deleteFile btn btn-danger" title="Delete File" role="button" ><i class="fa-solid fa-trash-can"></i></a>
                                        <a class="download-file btn btn-info" title="Download File" id="<?php echo $file_id; ?>" href="<?php echo $file_row['floc']; ?>" role="button"><i class="fa-solid fa-download"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th style="display:none;"></th>
                                <th>Class</th>
                                <th class="text-center">&nbsp&nbspActions&nbsp&nbsp</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>

    </div>
    <!--Container Main end-->
<?php include('allJavaScripts.php'); ?>


</body>
