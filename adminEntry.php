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
                    <a href="#" class="sidenavbar-menu active" title="Departments"> <i class="fa-solid fa-building-user nav-icon"></i> <span class="sidenavbar-menu-title">Department</span> </a> 
                    <a href="adminCourses.php" class="sidenavbar-menu" title="Courses"> <i class="fa-solid fa-users-rectangle nav-icon"></i> <span class="sidenavbar-menu-title">Courses</span> </a>
                    <a href="adminSubjects.php" class="sidenavbar-menu" title="Subjects"> <i class="fa-solid fa-book fa-xl nav-icon" style="margin-left: 0.1rem;"></i> <span class="sidenavbar-menu-title">Subject</span> </a>
                </div>
            </div>   
                <?php 
                    $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                    $admin_row=mysqli_fetch_array($admin_query);
                ?>
                <a href="adminHome.php" role="button" name="backtomenu" class="sidenavbar-menu" title="Back to Main Menu"> <i class="fa-solid fa-circle-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Back</span> </a>
                
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content">

        <div class="d-flex justify-content-start mt-3">
            <a href="adminHome.php" role="button" class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i>&nbsp&nbsp<strong>Back to Home</strong></a>
        </div> 

        <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <i class="fa-solid fa-building-user fa-2xl me-2"></i>
            <div>
                <strong>Department</strong>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-body bg-success bg-opacity-10"> 

            <div class="d-flex justify-content-end mb-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminAddDepartmentModal"><i class="fa-solid fa-square-plus"></i>&nbsp&nbsp<strong>Add Department</strong></button>
            </div> 
            
                <table id="example" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="display: none;"></th>
                            <th style="display: none;"></th>
                            <th style="display: none;"></th>
                            <th>Department</th>
                            <th>Person In Charge</th>
                            <th>Title</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($conn,"SELECT * FROM department ORDER BY dep_id DESC") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $dep_id = $row['dep_id'];
                                ?>
                        <tr class="odd gradeX">
                            <td style="display: none;"><?php echo $admin_row['user_id']; ?></td>
                            <td style="display: none;"><?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " . $admin_row['lastname']; ?></td>  
                            <td style="display: none;"><?php echo $row['dep_id']; ?></td> 
                            <td><?php echo $row['department']; ?></td> 
                            <td><?php echo $row['incharge']; ?></td> 
                            <td><?php echo $row['title']; ?></td> 

                            <td class="text-center" width="100">
                                <a title="Edit Department" role="button" class="adminEditDepartment btn btn-info"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                <a title="Delete Department" role="button" class="adminDeleteDepartment btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>    
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="display: none;"></th>
                            <th style="display: none;"></th>
                            <th style="display: none;"></th>
                            <th>Department</th>
                            <th>Person In Charge</th>
                            <th>Title</th>
                            <th class="text-center">Action</th>
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