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
                    <a href="#" class="sidenavbar-menu active" title="Admins"> <i class="fa-solid fa-users nav-icon"></i> <span class="sidenavbar-menu-title">Admins</span> </a>
                    <a href="adminAllLogs.php" class="sidenavbar-menu" title="All Activity Logs"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">All Activity Logs</span> </a>
                </div>
            </div>   
                <?php 
                    $admin_query = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                    $admin_row = mysqli_fetch_array($admin_query);
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
            <i class="fa-solid fa-users fa-2xl me-2"></i>
            <div>
                <strong>Admins</strong>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-body bg-success bg-opacity-10"> 

            <div class="d-flex justify-content-end mb-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminAddAdminModal"><i class="fa-solid fa-square-plus"></i>&nbsp&nbsp<strong>Add Admin</strong></button>
            </div> 
            
                <table id="example" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="display:none;"></th>
                            <th style="display:none;"></th>
                            <th style="display:none;"></th>
                            <th style="display:none;"></th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th style="display:none;"></th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($conn,"SELECT * FROM user WHERE user_id != $session_id ORDER BY user_id DESC") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $user_id = $row['user_id'];
                                ?>
                        <tr class="odd gradeX">  
                            <td style="display:none;"><?php echo $admin_row['user_id']; ?></td>
                            <td style="display:none;"><?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " . $admin_row['lastname']; ?></td>
                            <td style="display:none;"><?php echo $row['user_id']; ?></td>
                            <td style="display:none;"><?php echo $row['location']; ?></td>
                            <td width="50"><img class="rounded-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                            <td><?php echo $row['username']; ?></td> 
                            <td style="display:none;"><?php echo $row['password']; ?></td> 
                            <td><?php echo $row['firstname']; ?></td> 
                            <td><?php echo $row['middlename']; ?></td> 
                            <td><?php echo $row['lastname']; ?></td> 
                            <td class="text-center" width="100">
                                <a title="Edit Admin" role="button" class="adminEditAdmin btn btn-info"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                <a title="Delete Admin" role="button" class="adminDeleteAdmin btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
                            <th>Username</th>
                            <th style="display:none;"></th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
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