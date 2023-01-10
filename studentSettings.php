<?php
    include('header.php');
    include('session.php');
    $user_query = mysqli_query($conn,"SELECT * FROM student WHERE student_id='$session_id'") or die(mysqli_error());
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
            <img src="<?php echo $user_row['location']; ?>" data-bs-toggle="modal" data-bs-target="#imageZoomStudent" alt="">  
        </div>  
    </header>

    <div class="sidenavbar" id="sidenavbar">
        <nav class="sidenavbar-content">
            <div> 
                <a href="#" class="sidenavbar-logo" title="Cavite State University - Carmona (FMS)"><img class="sidenavbar-img" src="images/logo.png" alt=""><span class="sidenavbar-title">CVSU-CARMONA</span></a>
                <div class="sidenavbar-menus">
                    <a href="studentHome.php" class="sidenavbar-menu" title="Home"> <i class="fa-solid fa-house  nav-icon"></i> <span class="sidenavbar-menu-title">Home</span> </a> 
                    <a href="studentClass.php" class="sidenavbar-menu" title="Class"> <i class="fa-solid fa-users-rectangle nav-icon"></i> <span class="sidenavbar-menu-title">Class</span> </a>
                    <a href="#" class="sidenavbar-menu active" title="Settings"> <i class="fa-solid fa-gear fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">Settings</span> </a>
                    <a href="studentLogs.php" class="sidenavbar-menu" title="My Activity"> <i class="fa-solid fa-clock-rotate-left fa-xl nav-icon"></i> <span class="sidenavbar-menu-title">My Activity</span> </a>
                </div>
            </div>   
            <a href="#" role="button" name="signout" onclick="out();" class="sidenavbar-menu signout" title="Sign Out"> <i class="fa-solid fa-right-from-bracket nav-icon"></i> <span class="sidenavbar-menu-title">Sign Out</span> </a> 
        </nav>
    </div>

    <!--Container Main start-->
    <div class="main-content">
        <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <i class="fa-solid fa-users-rectangle fa-2xl me-2"></i>
            <div>
                <strong>Settings<?php $user_row['firstname']; ?></strong>
            </div>
        </div>
        

        <div class="card mb-3">
            <div class="card-body bg-success bg-opacity-10">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="upload-photo d-flex justify-content-center">
                    <label for="upload-photo" class="fw-bold ms-3 text-success">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="<?php echo $user_row['location']; ?>" id="photo-previewer7">
                                <input type="file" id="file-preview7" accept="image/*" name="image" onchange="previewImage7(event);">
                                <label for="file-preview7"><i class="fa-solid fa-image"></i> Choose Image</label>
                            </div>
                        </div>
                    </div> 

                    <div class="input-group d-flex justify-content-center">
                        <span class="input-group-text bg-success bg-opacity-25"><i class="fa-solid fa-marker fa-xl me-1 mx-1 text-success"></i></span>
                        <div class="col-sm-3 me-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="firstName" id="floatingFirstName" value="<?php echo $user_row['firstname']; ?>">
                                <label for="floatingFirstName">First Name</label>
                            </div>
                        </div>
                        
                        <span class="input-group-text bg-success bg-opacity-25"><i class="fa-solid fa-marker fa-xl me-1 mx-1 text-success"></i></span>
                        <div class="col-sm-3 me-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="middleName" id="floatingMiddleName" value="<?php echo $user_row['middle_name']; ?>">
                                <label for="floatingMiddleName">Last Name</label>
                            </div>
                        </div>

                        <span class="input-group-text bg-success bg-opacity-25"><i class="fa-solid fa-marker fa-xl me-1 mx-1 text-success"></i></span>
                        <div class="col-sm-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="lastName" id="floatingLastName" value="<?php echo $user_row['lastname']; ?>">
                                <label for="floatingLastName">Last Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group d-flex justify-content-center">
                        <span class="input-group-text bg-success bg-opacity-25"><i class="fa-solid fa-marker fa-xl me-1 mx-1 text-success"></i></span>
                        <div class="col-sm-3 me-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="username" id="floatingUsername" value="<?php echo $user_row['username']; ?>">
                                <label for="floatingUsername">Username</label>
                            </div>
                        </div>
                        
                        <span class="input-group-text bg-success bg-opacity-25"><i class="fa-solid fa-lock fa-xl me-1 mx-1 text-success"></i></span>
                        <div class="col-sm-3 me-4">
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="floatingPassword">
                                <label for="floatingPassword">Password (Change If Necessary)</label>
                            </div>
                        </div>
                    </div>
                    
                    <input type="hidden" name="studentSettingsPassword" value="<?php echo $user_row['password']; ?>">
                    <input type="hidden" name="studentEditSettingsId" value="<?php echo $session_id; ?>">
                    <input type="hidden" name="user-photo" value="<?php echo $user_row['location']; ?>">

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-2" name="studentSettings">&nbsp Save &nbsp</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <?php include('footer.php'); ?>

    </div>
    <!--Container Main end-->
    <?php include('allJavaScripts.php') ?>
</body>


















