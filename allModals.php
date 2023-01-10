<!-- Login Student Modal -->
<div class="modal fade" id="studentlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-success border-2">
        <div class="modal-body">

            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                    <strong>Login Student!</strong>&nbspPlease Enter the Details Below.
                </div>
            </div>
            
            <form class="mt-4" method="POST" enctype="multipart/form-data">

                <div class="input-group d-flex justify-content-center mb-3">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-user-graduate fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                            <input type="text" name="username" id="inputUsername" class="form-control" id="floatingInput" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                    </div>
                </div>

                <div class="input-group d-flex justify-content-center mb-4">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-lock fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                            <input type="password" name="password" id="inputPassword" class="form-control" id="floatingInput" placeholder="Passwordd" required>
                            <label for="floatingInput">Password</label>
                        </div>
                    </div>
                </div>

                <div class="control-group d-flex justify-content-end">
                    <div class="controls">
                        <button type="submit" name="studentLogin" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<strong>&nbsp&nbspSign In&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
  </div>
</div>
<!-- Ending of Login Student Modal -->

<!-- Login Teacher Modal -->
<div class="modal fade" id="teacherlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-success border-2">
        <div class="modal-body">
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                    <strong>Login Teacher!</strong>&nbsp;Please Enter the Details Below.
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data">

                <div class="input-group d-flex justify-content-center mb-3">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-user-tie fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                            <input type="text" name="username" id="inputUsername" class="form-control" id="floatingInput" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                    </div>
                </div>

                <div class="input-group d-flex justify-content-center mb-4">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-lock fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                        <input type="password" name="password" id="inputPassword" class="form-control" id="floatingInput" placeholder="Password" required>
                            <label for="floatingInput">Password</label>
                        </div>
                    </div>
                </div>

                <div class="control-group d-flex justify-content-end">
                    <div class="controls">
                        <button type="submit" name="teacherLogin" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<strong>&nbsp&nbspSign In&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
  </div>
</div>
<!-- Ending of Login Teacher Modal -->

<!-- Login Admin Modal -->
<div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-success border-2">
        <div class="modal-body">
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                    <strong>Login Admin!</strong>&nbsp;Please Enter the Details Below.
                </div>
            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">


                <div class="input-group d-flex justify-content-center mb-3">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-user-secret fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                            <input type="text" name="username" id="inputUsername" class="form-control" id="floatingInput" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                    </div>
                </div>

                <div class="input-group d-flex justify-content-center mb-3">
                    <span class="input-group-text bg-succss bg-opacity-25"><i class="fa-solid fa-lock fa-xl me-1 mx-1 alert-success"></i></span>
                    <div class="col-sm-10">
                        <div class="form-floating">
                            <input type="password" name="password" id="inputPassword" class="form-control" id="floatingInput" placeholder="Password" required>
                            <label for="floatingInput">Password</label>
                        </div>
                    </div>
                </div>

                <div class="control-group d-flex justify-content-end">
                    <div class="controls">
                        <button type="submit" name="adminLogin" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<strong>&nbsp&nbspSign In&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
<!-- Ending of Login Admin Modal -->

<!-- Login Function for Studnet, Teacher, and Admin  -->
<?php include('loginFunctions.php') ?>
<!-- Ending of Login Function for Studnet, Teacher, and Admin -->

<!-- Adding of Class Modal -->
<div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">       
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                    <div>
                        <strong>Add Class</strong>
                    </div>
                </div>
                

                <form class="row g-3 mt-2" action="mainFunctions.php" method="POST" enctype="multipart/form-data">
                
                    <?php 
                        $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                        $teacher_row=mysqli_fetch_array($teacher_query);
                    ?>

                    <input type="hidden" name="adderclass_teacherid" value="<?php echo $teacher_row['teacher_id']; ?>">
                    <input type="hidden" name="adderclass_teachername" value="<?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname']; ?>">

                    <label for="chooseClass" class="col-sm-3 col-form-label ms-3 fw-bold">Class</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-info"></i></span>
                            <select name="cys" class="form-select" onchange='CheckUnit(this.value);' required>
                                <?php
                                $query = mysqli_query($conn,"SELECT * FROM course") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <option><?php echo $row['cys']; ?></option>
                                <?php } ?>
                            </select>  
                        </div>
                    </div>

                    <label for="chooseSubject" class="col-sm-3 col-form-label ms-3 fw-bold">Subject</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-info"></i></span>

                            <select name="subject" class="form-select" required>
                                <?php
                                $teacher_subject_query = mysqli_query($conn,"SELECT * FROM teacher_subject") or die(mysqli_error());
                                $teacher_row = mysqli_fetch_array($teacher_subject_query);
                                $subject_id = $teacher_row['subject_id'];

                                $query = mysqli_query($conn,"SELECT * FROM subject WHERE subject_id in (SELECT subject_id FROM teacher_subject)") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <option><?php echo $row['subject_title']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>          
                    
                    
                    <input type="hidden" name="teacher_id" value="<?php echo $session_id; ?>">
            
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="addClass"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Adding of Class Modal -->

<!-- Deleting of Class Modal -->
<div class="modal fade" id="deleteClassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Class</strong>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <h4>Are you sure you want to delete the<strong><span id="classname" name="classname" class="text-danger"></span></strong> class?</h4>    
                    </div>

                    <input type="hidden" id="deleterclass_teacherid" name="deleterclass_teacherid">
                    <input type="hidden" id="deleterclass_teachername" name="deleterclass_teachername">
                    <input type="hidden" id="classname2" name="classname2">
                    <input type="hidden" id="deleteclass_id" name="deleteclass_id">

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteClass"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Class Modal -->

<!-- Adding of Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                    <div>
                        <strong>Add Student</strong>
                    </div>
                </div>

                <form class="row g-3 mt-2" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                        $teacher_row=mysqli_fetch_array($teacher_query);
                    ?>

                    <label for="addStudent" class="col-sm-3 col-form-label ms-3 fw-bold">Student</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-primary"></i></span>
                            <select name="student" class="form-select" required>
                            <?php
                                $query = mysqli_query($conn,"SELECT * FROM teacher_student WHERE teacher_id = '$session_id'") or die(mysqli_error());
                                while ($row = mysqli_fetch_array($query)) {
                                    $student_id = $row['student_id'];
                                    $student_query = mysqli_query($conn,"SELECT * FROM student WHERE student_id='$student_id'") or die(mysqli_error());
                                    $student_row = mysqli_fetch_array($student_query);
                                    ?>
                                    <option value="<?php echo $student_id; ?>"><?php echo $student_row['firstname'] . " " . $student_row['middle_name'] . " " . $student_row['lastname']; ?></option>
                                <?php } ?>
                            </select>  
                        </div>
                    </div>    

                    <input type="hidden" name="addstudentteacherid" value="<?php echo $teacher_row['teacher_id']; ?>">
                    <input type="hidden" name="addstudentteachername" value="<?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname']; ?>">
                    <input type="hidden" name="get_id" value="<?php echo $id_class; ?>">
                    <input type="hidden" name="teacher_id" value="<?php echo $session_id; ?>">
                    <input type="hidden" name="cys" value="<?php echo $course_row['course_id']; ?>">
                    <input type="hidden" name="subject" value="<?php echo $course_row['subject_id']; ?>">      
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="addStudent"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- End of Adding of Student Modal -->

<!-- Deleting of Student Modal -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Student</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete student<strong><span id="studentname" name="studentname" class="text-danger"></span></strong>?</h4>    
                    </div>

                    <input type="hidden" name="student_deletesteacherid" id="student_deletesteacherid">
                    <input type="hidden" name="teacher_deletesteachername" id="teacher_deletesteachername">
                    <input type="hidden" name="studentname2" id="studentname2">
                    <input type="hidden" name="studentid_deletes" id="studentid_deletes">
                    <input type="hidden" name="teacherid_deletes" id="teacherid_deletes">

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteStudent"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- End of Deleteing of Student Modal -->

<!-- Uploading of File Modal -->
<div class="modal fade" id="uploadFileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-upload fa-xl me-2"></i>
                    <div>
                        <strong>Upload File</strong>
                    </div>
                </div>

                <form class="row g-3 mt-2" action="mainFunctions.php" method="POST" enctype="multipart/form-data" name="upload">

                    <?php 
                        $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                        $teacher_row=mysqli_fetch_array($teacher_query);
                    ?>

                    <input type="hidden" name="uploadfileteacherid" value="<?php echo $teacher_row['teacher_id']; ?>">
                    <input type="hidden" name="uploadfileteachername" value="<?php echo $teacher_row['firstname'] . " " . $teacher_row['firstname'] . " " . $teacher_row['firstname']; ?>">

                    <label for="File" class="col-sm-3 col-form-label ms-3 fw-bold">File</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-image alert-primary"></i></span>
                            <input type="file" name="uploaded_file" class="form-control" id="inputGroupFile">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                            <input type="hidden" name="id_class" value="<?php echo $get_id; ?>">
                        </div>
                    </div>

                    <label for="FileName" class="col-sm-3 col-form-label ms-3 fw-bold">Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" name="name" class="form-control" id="inputGroupFileName">
                        </div>
                    </div>

                    <label for="FileDescription" class="col-sm-3 col-form-label ms-3 fw-bold">Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="desc" placeholder="Insert description here..." id="floatingTextarea" style="height: 100px"></textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="uploadFile" value="Upload"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
                
                
            </div> 
        </div>
    </div>
</div>
<!-- End of Uploading of File Modal -->

<!-- Deleting of File Modal -->
<div class="modal fade" id="deleteFileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete File</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete the<strong><span id="filename" name="filename" class="text-danger"></span></strong>  file?</h4>
                    </div> 

                    <input type="hidden" name="deletefileteacherid" id="deletefileteacherid">
                    <input type="hidden" name="deletefileteachername" id="deletefileteachername">
                    <input type="hidden" name="filename2" id="filename2">
                    <input type="hidden" name="fileid_deletef" id="fileid_deletef">
                    <input type="hidden" name="teacherid_deletef" id="teacherid_deletef">
            
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteFile"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- End of Deleting of File Modal -->

<!-- Adding of Subjectts Modal -->
<div class="modal fade" id="addSubjectTSModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                    <div>
                        <strong>Add Subject</strong>
                    </div>
                </div>

                <form class="row g-3 mt-2" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                        $teacher_row=mysqli_fetch_array($teacher_query);
                    ?>

                    <label for="addSubject" class="col-sm-3 col-form-label ms-3 fw-bold">Subject</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-primary"></i></span>
                            <select name="subject" class="form-select" required>
                                <?php
                                    $query = mysqli_query($conn,"SELECT * FROM subject") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_title']; ?></option>
                                <?php } ?>
                            </select>  
                        </div>
                    </div>

                    <input type="hidden" name="subject_adderststeacherid" value="<?php echo $teacher_row['teacher_id']; ?>">
                    <input type="hidden" name="subject_adderststeachername" value="<?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname']; ?>">
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="addSubjectTS"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- End of Adding of Subjectts Modal -->

<!-- Deleting of Subjectts Modal -->
<div class="modal fade" id="deleteSubjectTSModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Subject</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete the <strong><span id="cccdname" name="cccdname" class="text-danger"></span></strong>  subject?</h4>
                    </div> 

                    <input type="hidden" name="subject_deleterststeacherid" id="subject_deleterststeacherid">
                    <input type="hidden" name="subject_deleterststeachername" id="subject_deleterststeachername">
                    <input type="hidden" name="cccdname2" id="cccdname2">
                    <input type="hidden" name="subjectid_deletests" id="subjectid_deletests"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteSubjectTS"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Subjectts Modal -->

<!-- Adding of Studentts Modal -->
<div class="modal fade" id="addStudentTSModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                    <div>
                        <strong>Add Students</strong>
                    </div>
                </div>

                <?php 
                    $teacher_query=mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id='$session_id'")or die(mysqli_error());
                    $teacher_row=mysqli_fetch_array($teacher_query);
                ?>

                <table id="example2" class="table table-striped display2" style="width:100%">
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
                            $query = mysqli_query($conn,"SELECT * FROM student ORDER BY student_id DESC") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $student_id = $row['student_id'];
                                ?>

                            <tr class="odd gradeX">
                                <td style="display:none;"><?php echo $teacher_row['teacher_id']; ?></td>
                                <td style="display:none;"><?php echo $teacher_row['firstname'] . " " . $teacher_row['middlename'] . " " . $teacher_row['lastname']; ?></td>
                                <td style="display:none;"><?php echo $session_id; ?></td>
                                <td style="display:none;"><?php echo $student_id; ?></td>
                                <td width="50"><img class="rounded-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td>
                                <td><?php echo $row['firstname'] . " " . $row['middle_name'] . " " . $row['lastname']; ?></td> 

                                <td class="text-center" width="50">
                                    <button type="button" title="Add this student" class="addStudentTS btn btn-success bi bi-arrow-repeat"><i class="fa-solid fa-user-plus"></i></button>
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
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                </div>
                
            </div> 
        </div>
    </div>
</div>
<!-- End of Adding of Studentts Modal -->

<!-- Add of Studentts Modal Next Modal-->
<div class="modal fade" id="addStudentTSModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-user-plus fa-xl me-2"></i>
                        <div>
                            <strong>Add Student</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to add student <strong><span id="studentnameaddsts" name="studentnameaddsts" class="text-danger"></span></strong>?</h4>
                    </div> 

                    <input type="hidden" name="addststeacherid" id="addststeacherid"> 
                    <input type="hidden" name="addststeachername" id="addststeachername"> 
                    <input type="hidden" name="studentnameaddsts2" id="studentnameaddsts2"> 
                    <input type="hidden" name="teacherid_addsts" id="teacherid_addsts"> 
                    <input type="hidden" name="subjectid_addsts" id="subjectid_addsts"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="addStudentTSS"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Add of Studentts Modal Next Modal-->

<!-- Viewing of Studentts Modal -->
<div class="modal fade" id="viewStudentsInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-id-badge fa-xl me-2"></i>
                        <div>
                            <strong>View Student Information</strong>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img class="img rounded-circle" src="" id="image" name="image" width="100">
                    </div>

                    <div class="row mt-2 d-flex justify-content-center">
                        <label for="Name" class="col-sm-3 col-form-label ms-3 fw-bold mt-4">Name</label>
                        <div class="col-sm-8 mt-4">
                            <div class="input-group"><span class="input-group-text"><i class="fa-solid fa-trash-can"></i></span><input type="text" class="form-control" id="name" name="name" readonly></div>
                        </div>
                        <label for="Name" class="col-sm-5 col-form-label ms-3 fw-bold mt-3">Product Description</label>
                        <div class="col-sm-6 mt-3">
                            <div class="input-group"><span class="input-group-text"><i class="fa-solid fa-trash-can"></i></span><input type="text" class="form-control" required></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Viewing of Studentts Modal -->

<!-- Deleting of Studentts Modal -->
<div class="modal fade" id="deleteStudentInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Student</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete student <strong><span id="studentnamets" name="studentnamets" class="text-danger"></span></strong>?</h4>
                    </div> 

                    <input type="hidden" name="deletessteacherid" id="deletessteacherid">
                    <input type="hidden" name="deletessteachername" id="deletessteachername">
                    <input type="hidden" name="studentnamets2" id="studentnamets2">

                    <input type="hidden" name="teacherid_deletess" id="teacherid_deletess">
                    <input type="hidden" name="studentid_deletess" id="studentid_deletess">

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteStudents"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- End of Deleteing of Studentts Modal -->

<!-- Deleting of Material Modal -->
<div class="modal fade" id="deleteMaterialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Material</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete the <strong><span id="materialname" name="materialname" class="text-danger"></span></strong>  material?</h4>
                    </div> 

                    <input type="hidden" name="deletermaterialadminid" id="deletermaterialadminid"> 
                    <input type="hidden" name="deletermaterialadminname" id="deletermaterialadminname"> 
                    <input type="hidden" name="materialname2" id="materialname2"> 
                    <input type="hidden" name="materialid" id="materialid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="deleteMaterial"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Material Modal -->

<!-- Adding of teacher Modal -->
<div class="modal fade" id="adminAddTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Teacher</strong>
                        </div>
                    </div>

                    <?php 
                        $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row=mysqli_fetch_array($admin_query);
                    ?>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="uploads/teacher-default-img.png" id="photo-previewer">
                                <input type="file" id="file-preview" accept="image/*" name="image" onchange="previewImage(event);">
                                <label for="file-preview"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div>
                    
                    <input type="hidden" value="<?php echo $admin_row['user_id']; ?>" name="teacheradderadminid">
                    <input type="hidden" value="<?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " . $admin_row['lastname']; ?>" name="teacheradderadminname">
                    <input type="hidden" value="uploads/teacher-default-img.png" name="default-photo">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-lock alert-primary"></i></span>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                    </div>
                          
                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="middleName" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                    </div>

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-primary"></i></span>
                            <select name="department" class="form-select" required>
                                <?php
                                    $query = mysqli_query($conn,"SELECT * FROM department");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['title']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>  
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddTeacher"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of teacher Modal -->

<!-- Deleting of Teacher Modal -->
<div class="modal fade" id="adminDeleteTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Teacher</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete teacher <strong><span id="deleteteachername" name="deleteteachername" class="text-danger"></span></strong>?</h4>
                    </div> 

                    <input type="hidden" name="deleterteacheradminid" id="deleterteacheradminid"> 
                    <input type="hidden" name="deleterteacheradminname" id="deleterteacheradminname"> 
                    <input type="hidden" name="deleteteachername2" id="deleteteachername2"> 
                    <input type="hidden" name="deleteteacherid" id="deleteteacherid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteTeacher"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Teacher Modal -->

<!-- Editing of Teacher Modal -->
<div class="modal fade" id="adminEditTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-pen-to-square fa-xl me-2"></i>
                        <div>
                            <strong>Edit Teacher</strong>
                        </div>
                    </div>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img id="photo-previewer2" name="photo-previewer2">
                                <input type="file" id="file-preview2" accept="image/*" name="image" onchange="previewImage2(event);">
                                <label for="file-preview2"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div>
                    
                    <input type="hidden" name="editorteacheradminid" id="editorteacheradminid">
                    <input type="hidden" name="editorteacheradminname" id="editorteacheradminname">
                    <input type="hidden" name="editteacherid" id="editteacherid">
                    <input type="hidden" name="user-photo" id="user-photo">
                    <input type="hidden" name="password2" id="password2">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-lock alert-info"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Change Password (If Necessary)">
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                    </div>

                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="middleName" name="middleName" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-info"></i></span>
                            <select id="department" name="department" class="form-select" required>
                                <?php
                                    $query = mysqli_query($conn,"SELECT * FROM department");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['title']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>  
                        </div>
                    </div>

                    <input type="hidden" name="deleteteacherid" id="deleteteacherid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditTeacher"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Editing of Teacher Modal -->

<!-- Adding of Student Modal -->
<div class="modal fade" id="adminAddStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Student</strong>
                        </div>
                    </div>

                    <?php 
                        $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row=mysqli_fetch_array($admin_query);
                    ?>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="uploads/student-default-img.png" id="photo-previewer3">
                                <input type="file" id="file-preview3" accept="image/*" name="image" onchange="previewImage3(event);">
                                <label for="file-preview3"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div> 

                    <input type="hidden" name="studentadderadminid" value="<?php echo $admin_row['user_id']; ?>">
                    <input type="hidden" name="studentadderadminname" value="<?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " .  $admin_row['lastname']; ?>">
                    <input type="hidden" value="uploads/student-default-img.png" name="default-photo">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-user-tie alert-primary"></i></span>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-lock alert-primary"></i></span>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                    </div>
                          
                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="middleName" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddStudent"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of Student Modal -->

<!-- Deleting of Student Modal -->
<div class="modal fade" id="adminDeleteStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Student</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete student <strong><span id="deletestudentname" name="deletestudentname" class="text-danger"></span></strong>?</h4>
                    </div> 

                    <input type="hidden" name="deleterstudentadminid" id="deleterstudentadminid"> 
                    <input type="hidden" name="deleterstudentadminname" id="deleterstudentadminname"> 
                    <input type="hidden" name="deletestudentname2" id="deletestudentname2"> 
                    <input type="hidden" name="deletestudentid" id="deletestudentid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteStudent"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Student Modal -->

<!-- Editing of Student Modal -->
<div class="modal fade" id="adminEditStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-pen-to-square fa-xl me-2"></i>
                        <div>
                            <strong>Edit Student</strong>
                        </div>
                    </div>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="photo-previewer4" id="photo-previewer4">
                                <input type="file" id="file-preview4" accept="image/*" name="image" onchange="previewImage4(event);">
                                <label for="file-preview4"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div> 
    
                    <input type="hidden" name="editorstudentadminid" id="editorstudentadminid">
                    <input type="hidden" name="editorstudentadminname" id="editorstudentadminname">
                    <input type="hidden" name="editstudentid" id="editstudentid">
                    <input type="hidden" name="user-photos" id="user-photos">
                    <input type="hidden" name="passwords2" id="passwords2">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-user-tie alert-info"></i></span>
                            <input type="text" class="form-control" id="usernames" name="usernames" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-lock alert-info"></i></span>
                            <input type="password" class="form-control" name="passwords" placeholder="Change Password (If Necessary)">
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="firstNames" name="firstNames" required>
                        </div>
                    </div>
                          
                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="middleNames" name="middleNames" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="lastNames" name="lastNames" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditStudent"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Editing of Student Modal -->

<!-- Adding of Department Modal -->
<div class="modal fade" id="adminAddDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row=mysqli_fetch_array($admin_query);
                    ?>

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Department</strong>
                        </div>
                    </div>

                    <input type="hidden" name="adderdepartmentadminid" value="<?php echo $admin_row['user_id']; ?>">
                    <input type="hidden" name="adderdepartmentadminname" value="<?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " . $admin_row['lastname']; ?>">                    

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="department" required>
                        </div>
                    </div>

                    <label for="inputPIC" class="col-sm-4 col-form-label ms-3 fw-bold">Person In Charge</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="picharge" required>
                        </div>
                    </div>

                    <label for="inputTitle" class="col-sm-3 col-form-label ms-3 fw-bold">Title</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddDepartment"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of Department Modal -->

<!-- Deleting of Department Modal -->
<div class="modal fade" id="adminDeleteDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Department</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete this <strong><span id="deletdepartmentname" name="deletdepartmentname" class="text-danger"></span></strong> department?</h4>
                    </div> 

                    <input type="hidden" name="deleterdepartmentadminid" id="deleterdepartmentadminid">
                    <input type="hidden" name="deleterdepartmentname" id="deleterdepartmentname">
                    <input type="hidden" name="deletedepartmentid" id="deletedepartmentid">
                    <input type="hidden" name="deletdepartmentname2" id="deletdepartmentname2"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteDepartment"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Department Modal -->

<!-- Editing of Department Modal -->
<div class="modal fade" id="adminEditDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-pen-to-square fa-xl me-2"></i>
                        <div>
                            <strong>Edit Department</strong>
                        </div>
                    </div>

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="department" id="editdepartmentname" required>
                        </div>
                    </div>

                    <label for="inputPIC" class="col-sm-4 col-form-label ms-3 fw-bold">Person In Charge</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="picharge" id="editpic" required>
                        </div>
                    </div>

                    <label for="inputTitle" class="col-sm-2 col-form-label ms-3 fw-bold">Title</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="title" id="edittitle" required>
                        </div>
                    </div>

                    <input type="hidden" name="editordepartmentadminid" id="editordepartmentadminid"> 
                    <input type="hidden" name="editordepartmentadminname" id="editordepartmentadminname"> 
                    <input type="hidden" name="editdepartmentid" id="editdepartmentid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditDepartment"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of editing of Department Modal -->

<!-- Adding of Course Modal -->
<div class="modal fade" id="adminAddCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row=mysqli_fetch_array($admin_query);
                    ?>

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Course</strong>
                        </div>
                    </div>

                    <input type="hidden" name="addercourseadminid" value="<?php echo $admin_row['user_id']; ?>">
                    <input type="hidden" name="addercourseadminname" value="<?php echo $admin_row['firstname'] . " " .  $admin_row['middlename'] . " " . $admin_row['lastname']; ?>">

                    <label for="inputCourseYS" class="col-sm-4 col-form-label ms-3 fw-bold">Course Yr & Sec</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="courseyrsec" required>
                        </div>
                    </div>

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-primary"></i></span>
                            <select name="department" class="form-select" required>
                                <?php
                                    $query = mysqli_query($conn,"SELECT * FROM department");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['title']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>  
                        </div>
                    </div>

                    <label for="inputMajor" class="col-sm-3 col-form-label ms-3 fw-bold">Major</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="major" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddCourse"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of Course Modal -->

<!-- Deleting of Course Modal -->
<div class="modal fade" id="adminDeleteCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Course</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete this <strong><span id="deletecoursename" name="deletecoursename" class="text-danger"></span></strong> course?</h4>
                    </div> 

                    <input type="hidden" name="deletercourseadminid" id="deletercourseadminid">
                    <input type="hidden" name="deletercourseadminname" id="deletercourseadminname">
                    <input type="hidden" name="deletecoursename2" id="deletecoursename2">
                    <input type="hidden" name="deletecourseid" id="deletecourseid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteCourse"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Course Modal -->

<!-- Editing of Course Modal -->
<div class="modal fade" id="adminEditCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-pen-to-square fa-xl me-2"></i>
                        <div>
                            <strong>Edit Course</strong>
                        </div>
                    </div>

                    <label for="inputCourseYS" class="col-sm-4 col-form-label ms-3 fw-bold">Course Yr & Sec</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="courseyrsec" id="editcoursename" required>
                        </div>
                    </div>

                    <label for="inputDepartment" class="col-sm-3 col-form-label ms-3 fw-bold">Department</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-info"></i></span>
                            <select name="department" id="editcoursedepartment"  class="form-select" required>
                                <?php
                                    $query = mysqli_query($conn,"SELECT * FROM department");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option><?php echo $row['title']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>  
                        </div>
                    </div>

                    <label for="inputMajor" class="col-sm-3 col-form-label ms-3 fw-bold">Major</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="major" id="editmajor" required>
                        </div>
                    </div>

                    <input type="hidden" name="editorcourseadminid" id="editorcourseadminid">
                    <input type="hidden" name="editorcourseadminname" id="editorcourseadminname">
                    <input type="hidden" name="editcourseid" id="editcourseid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditCourse"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of editing of Course Modal -->

<!-- Adding of Subject Modal -->
<div class="modal fade" id="adminAddSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <?php 
                        $admin_query=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row=mysqli_fetch_array($admin_query);
                    ?>

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Subject</strong>
                        </div>
                    </div>

                    <input type="hidden" name="subjectadderadminid" value="<?php echo $admin_row['user_id']; ?>"> 
                    <input type="hidden" name="subjectadderadminname" value="<?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " . $admin_row['lastname']; ?>"> 

                    <label for="inputSubjectC" class="col-sm-3 col-form-label ms-3 fw-bold">Subject Code</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="subjectcode" required>
                        </div>
                    </div>

                    <label for="inputSubjectT" class="col-sm-3 col-form-label ms-3 fw-bold">Subject Title</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="subjecttitle" required>
                        </div>
                    </div>

                    <label for="inputCategory" class="col-sm-3 col-form-label ms-3 fw-bold">Category</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-primary"></i></span>
                            <select name="category" class="form-select" required>
                                <option value="Major">Major</option>
                                <option value="Minor">Minor</option>
                            </select>  
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddSubject"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of Subject Modal -->

<!-- Deleting of Subject Modal -->
<div class="modal fade" id="adminDeleteSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Subject</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete this <strong><span id="deletesubjectname" name="deletesubjectname" class="text-danger"></span></strong> subject?</h4>
                    </div> 

                    <input type="hidden" name="deletersubjectadminid" id="deletersubjectadminid"> 
                    <input type="hidden" name="deletersubjectadminname" id="deletersubjectadminname"> 
                    <input type="hidden" name="deletesubjectname2" id="deletesubjectname2"> 
                    <input type="hidden" name="deletesubjectid" id="deletesubjectid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteSubject"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of Subject Modal -->

<!-- Editing of Subject Modal -->
<div class="modal fade" id="adminEditSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-pen-to-square fa-xl me-2"></i>
                        <div>
                            <strong>Edit Subject</strong>
                        </div>
                    </div>

                    <label for="inputSubjectC" class="col-sm-3 col-form-label ms-3 fw-bold">Subject Code</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="subjectcode" id="editsubjectcode" required>
                        </div>
                    </div>

                    <label for="inputSubjectT" class="col-sm-3 col-form-label ms-3 fw-bold">Subject Title</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" name="subjecttitle" id="editsubjecttitle" required>
                        </div>
                    </div>

                    <label for="inputCategory" class="col-sm-3 col-form-label ms-3 fw-bold">Category</label>
                    <div class="col-sm-8">
                        <div class="input-group"><span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-square-caret-down fa-lg alert-info"></i></span>
                            <select name="category" id="editcategory" class="form-select" required>
                                <option value="Major">Major</option>
                                <option value="Minor">Minor</option>
                            </select>  
                        </div>
                    </div>
                    
                    <input type="hidden" name="editorsubjectadminid" id="editorsubjectadminid"> 
                    <input type="hidden" name="editorsubjectadminname" id="editorsubjectadminname"> 
                    <input type="hidden" name="editsubjectid" id="editsubjectid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditSubject"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of editing of Subject Modal -->

<!-- Adding of admin Modal -->
<div class="modal fade" id="adminAddAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-square-plus fa-xl me-2"></i>
                        <div>
                            <strong>New Admin</strong>
                        </div>
                    </div>

                    <?php 
                        $admin_query = mysqli_query($conn,"SELECT * FROM user WHERE user_id='$session_id'")or die(mysqli_error());
                        $admin_row = mysqli_fetch_array($admin_query);
                    ?>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="uploads/admin-default-img.png" id="photo-previewer5">
                                <input type="file" id="file-preview5" accept="image/*" name="image" onchange="previewImage5(event);">
                                <label for="file-preview5"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div> 

                    <input type="hidden" name="adderadminid" value="<?php echo $admin_row['user_id']; ?>">
                    <input type="hidden" name="adderadminname" value="<?php echo $admin_row['firstname'] . " " . $admin_row['middlename'] . " " .  $admin_row['lastname']; ?>">
                    <input type="hidden" value="uploads/admin-default-img.png" name="default-photo">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-user-tie alert-primary"></i></span>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-lock alert-primary"></i></span>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="firstName" required>
                        </div>
                    </div>
                          
                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="middleName" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-primary bg-opacity-25"><i class="fa-solid fa-marker alert-primary"></i></span>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i>&nbsp<strong>&nbsp&nbsp&nbspReset&nbsp&nbsp&nbsp</strong></button>
                        <button type="submit" class="btn btn-primary" name="adminAddAdmin"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of adding of admin Modal -->

<!-- Deleting of admin Modal -->
<div class="modal fade" id="adminDeleteAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-danger border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-trash-can fa-xl me-2"></i>
                        <div>
                            <strong>Delete Admin</strong>
                        </div>
                    </div>

                    <div class="text-center">
                        <h4>Are you sure you want to delete admin <strong><span id="deleteadminname" name="deleteadminname" class="text-danger"></span></strong>?</h4>
                    </div> 

                    <input type="hidden" name="deleteadminname2" id="deleteadminname2"> 
                    <input type="hidden" name="deleteradminid" id="deleteradminid"> 
                    <input type="hidden" name="deleteradminname" id="deleteradminname"> 
                    <input type="hidden" name="deleteadminid" id="deleteadminid"> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminDeleteAdmin"><i class="fa-solid fa-check"></i>&nbsp<strong>&nbsp&nbspYes&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp<strong>&nbsp&nbspNo&nbsp&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Deleting of admin Modal -->

<!-- Editing of admin Modal -->
<div class="modal fade" id="adminEditAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-info border-2">
            <div class="modal-body">
                <form class="row g-3" action="mainFunctions.php" method="POST" enctype="multipart/form-data">

                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fa-solid fa-user-tie fa-xl me-2"></i>
                        <div>
                            <strong>Edit Admin</strong>
                        </div>
                    </div>

                    <div class="upload-photo">
                    <label for="upload-photo" class="fw-bold ms-3">Upload Photo</label>
                        <div class="preview-photo">
                            <div class="preview">
                                <img src="photo-previewer6" id="photo-previewer6">
                                <input type="file" id="file-preview6" accept="image/*" name="image" onchange="previewImage6(event);">
                                <label for="file-preview6"><i class="fa-solid fa-trash-can"></i> Choose Image</label>
                            </div>
                        </div>
                    </div> 
                    
                    <input type="hidden" name="editoradminid" id="editoradminid">
                    <input type="hidden" name="editoradminname" id="editoradminname">
                    <input type="hidden" name="editadminid" id="editadminid">
                    <input type="hidden" name="user-photoa" id="user-photoa">
                    <input type="hidden" name="passworda2" id="passworda2">

                    <label for="inputUsername" class="col-sm-3 col-form-label ms-3 fw-bold">Username</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-user-tie alert-info"></i></span>
                            <input type="text" class="form-control" id="usernamea" name="usernamea" required>
                        </div>
                    </div>

                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3 fw-bold">Password</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-lock alert-info"></i></span>
                            <input type="password" class="form-control" name="passworda" placeholder="Change Password (If Necessary)">
                        </div>
                    </div>

                    <label for="inputFname" class="col-sm-3 col-form-label ms-3 fw-bold">First Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="firstNamea" name="firstNamea" required>
                        </div>
                    </div>
                          
                    <label for="inputMname" class="col-sm-3 col-form-label ms-3 fw-bold">Middle Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="middleNamea" name="middleNamea" required>
                        </div>
                    </div>

                    <label for="inputLname" class="col-sm-3 col-form-label ms-3 fw-bold">Last Name</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text bg-info bg-opacity-25"><i class="fa-solid fa-marker alert-info"></i></span>
                            <input type="text" class="form-control" id="lastNamea" name="lastNamea" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="adminEditAdmin"><i class="fa-solid fa-arrow-up-from-bracket"></i>&nbsp<strong>&nbsp&nbsp&nbspSave&nbsp&nbsp&nbsp</strong></button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbspCancel&nbsp</strong></button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
<!-- Ending of Editing of admin Modal -->

<!-- Zoom of student Modal -->
<div class="modal fade" id="imageZoomStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body bg-success bg-opacity-10">
                
                <div class="d-flex justify-content-center mt-3">
                    <img src="<?php echo $user_row['location']; ?>" style="border-radius: 50%;" height="200" width="200" alt="">
                </div>

                <div class="text-center mt-3">
                    <h6><strong>First Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['firstname']; ?></span> </h6>
                    <h6><strong>Middle Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['middle_name']; ?></span> </h6>
                    <h6><strong>Last Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['lastname']; ?></span> </h6>
                </div>

                <div class="control-group d-flex justify-content-end mt-4">
                    <div class="controls">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ending of Zoom of student Modal -->


<!-- Zoom of Teacher Modal -->
<div class="modal fade" id="imageZoomTeacher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body bg-success bg-opacity-10">
                
                <div class="d-flex justify-content-center mt-3">
                    <img src="<?php echo $user_row['location']; ?>" style="border-radius: 50%;" height="200" width="200" alt="">
                </div>

                <div class="text-center mt-3">
                    <h6><strong>First Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['firstname']; ?></span> </h6>
                    <h6><strong>Middle Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['middlename']; ?></span> </h6>
                    <h6><strong>Last Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['lastname']; ?></span> </h6>
                </div>

                <div class="control-group d-flex justify-content-end mt-4">
                    <div class="controls">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ending of Zoom of Teacher Modal -->

<!-- Zoom of Admin Modal -->
<div class="modal fade" id="imageZoomAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body bg-success bg-opacity-10">
                
                <div class="d-flex justify-content-center mt-3">
                    <img src="<?php echo $user_row['location']; ?>" style="border-radius: 50%;" height="200" width="200" alt="">
                </div>

                <div class="text-center mt-3">
                    <h6><strong>First Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['firstname']; ?></span> </h6>
                    <h6><strong>Middle Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['middlename']; ?></span> </h6>
                    <h6><strong>Last Name:</strong> <span class="text-success fw-bold fs-5"><?php echo $user_row['lastname']; ?></span> </h6>
                </div>

                <div class="control-group d-flex justify-content-end mt-4">
                    <div class="controls">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ending of Zoom of Admin Modal -->
