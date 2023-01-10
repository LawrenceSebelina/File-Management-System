<?php
include('header.php');
include('session.php');
require("dbOpener.php");

// TODO teacherClass.php functions
    // * teacherClass.php add class function
    if(isset($_POST['addClass'])){
                     
        $adderclass_teacherid = $_POST['adderclass_teacherid'];
        $adderclass_teachername = $_POST['adderclass_teachername'];
        $subject = $_POST['subject'];
        $cys = $_POST['cys'];
        $teacher_id = $_POST['teacher_id'];

        $query_select = "SELECT * FROM class WHERE subject_id='$subject' AND course_id='$cys' AND teacher_id='$teacher_id'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);

        $count_class = mysqli_fetch_assoc($query_select_run);
        $class_name = $count_class['course_id'];

        if($count > 0){
            $_SESSION['status'] = "Class $class_name is Already Exist"; 
            $_SESSION['statustext'] = "Please Choose New Class"; 
            $_SESSION['status_code'] = "warning";
            header('location:teacherClass.php');
        }else{
            $query_insert = "INSERT INTO class (subject_id,course_id,teacher_id) VALUES ('$subject','$cys','$teacher_id')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Class: $cys - $subject.";
            $activity = "Teacher Class Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$adderclass_teachername', '$adderclass_teacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Class Added Successfully";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "success";
            header('location:teacherClass.php');

        }
    }

    // * teacherClass.php delete class function
    if(isset($_POST['deleteClass'])){

        $deleterclass_teacherid = $_POST['deleterclass_teacherid'];
        $deleterclass_teachername = $_POST['deleterclass_teachername'];
        $classname2 = $_POST['classname2'];
        $deleteclass_id = $_POST['deleteclass_id'];
        
        $query_delete = "DELETE FROM class WHERE class_id='$deleteclass_id'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Class: $classname2.";
            $activity = "Teacher Class Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$deleterclass_teachername', '$deleterclass_teacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Class Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherClass.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:teacherClass.php');

        }

    }
// TODO ending of teacherClass.php functions

// TODO teacherClassInfo.php functions
    // * teacherClassInfo.php add student function
    if(isset($_POST['addStudent'])){

        $addstudentteacherid = $_POST['addstudentteacherid'];
        $addstudentteachername = $_POST['addstudentteachername'];
        $subject = $_POST['subject'];
        $cys = $_POST['cys'];
        $student = $_POST['student'];
        $get_id=$_POST['get_id'];
        $teacher_id = $_POST['teacher_id'];

        $query_select_student = "SELECT * FROM student WHERE student_id='$student'";
        $query_select_student_run = mysqli_query($conn, $query_select_student);
        $count_student = mysqli_fetch_assoc($query_select_student_run);
        $student_name = $count_student['firstname'] . " " . $count_student['middle_name'] . " " . $count_student['lastname'];

        $query_select = "SELECT * FROM sws WHERE teacher_id='$teacher_id' AND student_id='$student' AND cys='$cys' AND subject_id='$subject' AND class_id='$get_id'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);

        if ($count > 0) {
            $_SESSION['status'] = "Student $student_name is Already Exist";
            $_SESSION['statustext'] = "Please Choose New Student.";  
            $_SESSION['status_code'] = "warning";
            header('location:teacherClassInfo.php?id='.$get_id);
        }else{
            $query_insert = "INSERT INTO sws (teacher_id,student_id,cys,subject_id,class_id) VALUES ('$teacher_id','$student','$cys','$subject','$get_id')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Student: $student_name.";
            $activity = "Teacher Class Info Student Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$addstudentteachername', '$addstudentteacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Add Successful!"; 
            $_SESSION['statustext'] = "Student Added Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherClassInfo.php?id='.$get_id);
            
        }
    }

    // * teacherClassInfo.php delete student function
    if(isset($_POST['deleteStudent'])){

        $student_deletesteacherid = $_POST['student_deletesteacherid'];
        $teacher_deletesteachername = $_POST['teacher_deletesteachername'];
        $studentname2 = $_POST['studentname2'];
        $studentid_deletes = $_POST['studentid_deletes'];
        $teacherid_deletes = $_POST['teacherid_deletes'];
        
        $query_delete = "DELETE FROM sws WHERE sws_id='$studentid_deletes'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Student: $studentname2.";
            $activity = "Teacher Class Info Student Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$teacher_deletesteachername', '$student_deletesteacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Student Removed Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherClassInfo.php?id='.$teacherid_deletes);
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:teacherClassInfo.php?id='.$teacherid_deletes);

        }

    }

    // * teacherClassInfo.php add/upload file function
    if(isset($_POST['uploadFile'])){

        $errmsg_arr = array();
        $errflag = false;
        $conn = $connector->DbConnector();
        $id_class = $_POST['id_class'];
        $name = $_POST['name'];
        $uploadfileteacherid = $_POST['uploadfileteacherid'];
        $uploadfileteachername = $_POST['uploadfileteachername'];

        function clean($str){
            global $conn;
            $str = @trim($str);
            $str = stripslashes($str);
            return mysqli_real_escape_string($conn,$str);
        }

        $filedesc = clean($_POST['desc']);

        if($filedesc == ''){
            $errflag = true;
        }

        if($errflag){
            $_SESSION['status'] = "No File Description!"; 
            $_SESSION['statustext'] = "Please Insert File Description."; 
            $_SESSION['status_code'] = "warning";

            header('location:teacherClassInfo.php?id='.$id_class);

            exit();
        }

        if($_FILES['uploaded_file']['size'] >= 104857600) {
            $errflag = true;
        }

        if($errflag){
            $_SESSION['status'] = "Max File Size!"; 
            $_SESSION['statustext'] = "Selected Files Exceeds 100MB Size Limit."; 
            $_SESSION['status_code'] = "warning";

            header('location:teacherClassInfo.php?id='.$id_class);

            exit();
        }

        $rd2 = mt_rand(1000, 9999) . "_File";

        if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)){
            $filename = basename($_FILES['uploaded_file']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if(($ext != "exe") && ($_FILES["uploaded_file"]["type"] != "application/x-msdownload")){
                $newname = "uploads/" . $rd2 . "_" . $filename;
                if(!file_exists($newname)){
                    if((move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))){	   
                        $qry2 = "INSERT INTO files (fdesc,floc,fdatein,teacher_id,class_id,fname) VALUES ('$filedesc','$newname',NOW(),'$session_id','$id_class','$name')";
                        $result2 = $connector->query($qry2);
                        if($result2){
                            $errmsg_arr[] = 'record was saved in the database and the file was uploaded';
                            $errflag = true;
                            if($errflag){
                                $action = "Add New File: $name.";
                                $activity = "Teacher Class Info File Menu";
                                $type = "Teacher";
                    
                                $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$uploadfileteachername', '$uploadfileteacherid', '$action')";
                                $query_insert_run = mysqli_query($conn, $query_insert);

                                $_SESSION['status'] = "Upload Successful!"; 
                                $_SESSION['statustext'] = "New File Uploaded Successfully."; 
                                $_SESSION['status_code'] = "success";
                                header('location:teacherClassInfo.php?id='.$id_class);

                                exit();
                            }
                        }else{
                            $errflag = true;
                            if($errflag){
                                $_SESSION['status'] = "File Upload Error!"; 
                                $_SESSION['statustext'] = "File was not Saved in the Database but File was Uploaded."; 
                                $_SESSION['status_code'] = "warning";
                                header('location:teacherClassInfo.php?id='.$id_class);
                                exit();
                            }
                        }
                    }else{
                        $errflag = true;
                        if($errflag){
                            $_SESSION['status'] = "File Upload Error!"; 
                            $_SESSION['statustext'] = "File upload" . $filename . "unsuccessful."; 
                            $_SESSION['status_code'] = "warning";
                            header('location:teacherClassInfo.php?id='.$id_class);
                            exit();
                        }
                    }
                }else{
                    $errflag = true;
                    if($errflag){
                        $_SESSION['status'] = "File Upload Error!"; 
                        $_SESSION['statustext'] = "Error: File >>" . $_FILES["uploaded_file"]["name"] . "<< Already Exists."; 
                        $_SESSION['status_code'] = "warning";
                        header('location:teacherClassInfo.php?id='.$id_class);
                        exit();
                    }
                }
            }else{
                $errflag = true;
                if($errflag){
                    $_SESSION['status'] = "File Upload Error!"; 
                    $_SESSION['statustext'] = "Error: All File Types Except .exe File Under 100 Mb are not Accepted for Upload."; 
                    $_SESSION['status_code'] = "warning";
                    header('location:teacherClassInfo.php?id='.$id_class);
                    exit();
                }
            }
        }else{
            $errflag = true;
            if($errflag){
                $_SESSION['status'] = "File Upload Error!"; 
                $_SESSION['statustext'] = "Error: No File Uploaded."; 
                $_SESSION['status_code'] = "warning";
                header('location:teacherClassInfo.php?id='.$id_class);
                exit();
            }
        }

        mysqli_close();
        
    }

    // * teacherClassInfo.php delete file function
    if(isset($_POST['deleteFile'])){

        $deletefileteacherid = $_POST['deletefileteacherid'];
        $deletefileteachername = $_POST['deletefileteachername'];
        $filename2 = $_POST['filename2'];
        $fileid_deletef = $_POST['fileid_deletef'];
        $teacherid_deletef=$_POST['teacherid_deletef'];
        
        $query_delete = "DELETE FROM files WHERE file_id='$fileid_deletef'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete File: $filename2.";
            $activity = "Teacher Class Info File Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$deletefileteachername', '$deletefileteacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);


            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "File Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherClassInfo.php?id='.$teacherid_deletef);
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:teacherClassInfo.php?id='.$teacherid_deletef);

        }

    }
// TODO ending of teacherClassInfo.php functions

// TODO teacherSubject.php function
    // * teacherSubject.php add subject function
    if(isset($_POST['addSubjectTS'])){
        
        $subject_adderststeacherid = $_POST['subject_adderststeacherid'];
        $subject_adderststeachername = $_POST['subject_adderststeachername'];
        $subject = $_POST['subject'];

        $query_select_subject = "SELECT * FROM subject WHERE subject_id='$subject'";
        $query_select_subject_run = mysqli_query($conn, $query_select_subject);
        $count_subject = mysqli_fetch_assoc($query_select_subject_run);
        $subject_title = $count_subject['subject_title'];
        $subject_code = $count_subject['subject_code'];

        $query_select = "SELECT * FROM teacher_subject WHERE teacher_id='$session_id' AND subject_id='$subject'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);

        if($count > 0){
            $_SESSION['status'] = "Subject $subject_title is Already Exist!";
            $_SESSION['statustext'] = "Please Choose New Subject Code.";  
            $_SESSION['status_code'] = "warning";
            header('location:teacherSubject.php');
        }else{
            $query_insert = "INSERT INTO teacher_subject (subject_id,teacher_id) VALUES ('$subject','$session_id')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add Subject: $subject_code - $subject_title.";
            $activity = "Teacher Subject Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$subject_adderststeachername', '$subject_adderststeacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Add Successful!"; 
            $_SESSION['statustext'] = "New Subject Added Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherSubject.php');
            
        }
    }

    // * teacherSubject.php delete subject function
    if(isset($_POST['deleteSubjectTS'])){

        $subject_deleterststeacherid = $_POST['subject_deleterststeacherid'];
        $subject_deleterststeachername = $_POST['subject_deleterststeachername'];
        $cccdname2 = $_POST['cccdname2'];
        $subjectid_deletests = $_POST['subjectid_deletests'];

        $query_delete = "DELETE FROM teacher_subject WHERE subject_id='$subjectid_deletests'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Subject: $cccdname2.";
            $activity = "Teacher Subject Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$subject_deleterststeachername', '$subject_deleterststeacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);


            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Subject Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherSubject.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:teacherSubject.php');

        }

    }
// TODO ending of teacherSubject.php function

// TODO teacherStudent.php function
    // * teacherStudent.php add student function
    if(isset($_POST['addStudentTSS'])){

        $addststeacherid = $_POST['addststeacherid'];
        $addststeachername = $_POST['addststeachername'];
        $studentnameaddsts2 = $_POST['studentnameaddsts2'];
        $teacherid_addsts = $_POST['teacherid_addsts'];
        $subjectid_addsts = $_POST['subjectid_addsts'];

        $query_select = "SELECT * FROM teacher_student WHERE teacher_id='$teacherid_addsts' AND student_id='$subjectid_addsts'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);

        if ($count > 0) {
            $_SESSION['status'] = "Student $studentnameaddsts2 is Already Exist!";
            $_SESSION['statustext'] = "Please Choose New Student";  
            $_SESSION['status_code'] = "warning";
            header('location:teacherStudents.php');
        }else{
            $query_insert = "INSERT INTO teacher_student (teacher_id,student_id) VALUES ('$teacherid_addsts','$subjectid_addsts')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Student: $studentnameaddsts2.";
            $activity = "Teacher Student Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$addststeachername', '$addststeacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Add Successful!"; 
            $_SESSION['statustext'] = "New Student Added Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherStudents.php');
            
        }
    }

    // * teacherStudent.php delete student function
    if(isset($_POST['deleteStudents'])){

        $deletessteacherid = $_POST['deletessteacherid'];
        $deletessteachername = $_POST['deletessteachername'];
        $studentnamets2 = $_POST['studentnamets2'];
        $studentid_deletess = $_POST['studentid_deletess'];
        
        $query_delete = "DELETE FROM teacher_student WHERE student_id='$studentid_deletess'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Student: $studentnamets2.";
            $activity = "Teacher Student Menu";
            $type = "Teacher";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$deletessteachername', '$deletessteacherid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Student Account Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:teacherStudents.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:teacherStudents.php');
        }

    }
// TODO ending of teacherStudent.php function

// TODO adminFile.php function
    // * adminFile.php delete material function
    if(isset($_POST['deleteMaterial'])){

        $deletermaterialadminid = $_POST['deletermaterialadminid'];
        $deletermaterialadminname = $_POST['deletermaterialadminname'];
        $materialname2 = $_POST['materialname2'];
        $materialid = $_POST['materialid'];
        
        $query_delete = "DELETE FROM files WHERE file_id='$materialid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Material: $materialname2.";
            $activity = "Student Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deletermaterialadminname', '$deletermaterialadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Material Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminFile.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminFile.php');
        }

    }

// TODO ending of adminFile.php function

// TODO adminTeachers.php function
    // * adminTeachers.php add teacher function
    if(isset($_POST['adminAddTeacher'])){

        $teacheradderadminid = $_POST['teacheradderadminid'];
        $teacheradderadminname = $_POST['teacheradderadminname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $department = $_POST['department'];

        $password = sha1($password);
        
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
    
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }else{
            $location = $_POST['default-photo'];
        }

        $query_select = "SELECT * FROM teacher WHERE username='$username'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminTeachers.php');
        }else{
            $query_insert = "INSERT INTO teacher (username,password,firstname,lastname,middlename,department,location)
            VALUES ('$username','$password','$firstName','$lastName','$middleName','$department','$location')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Teacher Account: $firstName $middleName $lastName.";
            $activity = "Teacher Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$teacheradderadminname', '$teacheradderadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!";
            $_SESSION['statustext'] = "New Teacher Account Created Successfully.";  
            $_SESSION['status_code'] = "success";
            header('location:adminTeachers.php');
        }

    }

    // * adminTeachers.php delete teacher function
    if(isset($_POST['adminDeleteTeacher'])){

        $deleterteacheradminid = $_POST['deleterteacheradminid'];
        $deleterteacheradminname = $_POST['deleterteacheradminname'];
        $deleteteachername2 = $_POST['deleteteachername2'];
        $deleteteacherid = $_POST['deleteteacherid'];
        
        $query_delete = "DELETE FROM teacher WHERE teacher_id='$deleteteacherid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Account of Teacher: $deleteteachername2.";
            $activity = "Teacher Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deleterteacheradminname', '$deleterteacheradminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Teacher Account Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminTeachers.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminTeachers.php');
        }

    }

    // * adminTeachers.php edit teacher function
    if(isset($_POST['adminEditTeacher'])){

        $editorteacheradminid = $_POST['editorteacheradminid'];
        $editorteacheradminname = $_POST['editorteacheradminname'];
        $editteacherid = $_POST['editteacherid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $department = $_POST['department'];

        if(empty($password)){
            $password = $_POST['password2'];
        }else{
            $password = $_POST['password'];
            $password = sha1($password);
        }
        
        if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
            $location = $_POST['user-photo'];
        }else{
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
    
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }

        $query_select = "SELECT * FROM teacher WHERE username='$username' AND teacher_id!='$editteacherid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminTeachers.php');
        }else{
            $query_update = "UPDATE teacher SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middlename='$middleName', department='$department', location='$location' WHERE teacher_id='$editteacherid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Account Details of Teacher: $firstName $middleName $lastName.";
            $activity = "Teacher Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editorteacheradminname', '$editorteacheradminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Teacher Account Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminTeachers.php');
        }
    }
// TODO ending of adminTeachers.php function

// TODO adminStudents.php function
    // * adminStudents.php add student function
    if(isset($_POST['adminAddStudent'])){

        $studentadderadminid = $_POST['studentadderadminid'];
        $studentadderadminname = $_POST['studentadderadminname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];

        $password = sha1($password);
        
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
    
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }else{
            $location = $_POST['default-photo'];
        }

        $query_select = "SELECT * FROM student WHERE username='$username'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminStudents.php');
        }else{
            $query_insert = "INSERT INTO student (username,password,firstname,lastname,middle_name,location)
            VALUES ('$username','$password','$firstName','$lastName','$middleName','$location')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Student Account: $firstName $middleName $lastName.";
            $activity = "Student Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$studentadderadminname', '$studentadderadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!";
            $_SESSION['statustext'] = "New Student Account Created Successfully.";  
            $_SESSION['status_code'] = "success";
            header('location:adminStudents.php');
        }

    }

    // * adminStudents.php delete student function
    if(isset($_POST['adminDeleteStudent'])){

        $deleterstudentadminid = $_POST['deleterstudentadminid'];
        $deleterstudentadminname = $_POST['deleterstudentadminname'];
        $deletestudentname2 = $_POST['deletestudentname2'];
        $deletestudentid = $_POST['deletestudentid'];
        
        $query_delete = "DELETE FROM student WHERE student_id='$deletestudentid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Account of Student: $deletestudentname2.";
            $activity = "Student Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deleterstudentadminname', '$deleterstudentadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Student Account Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminStudents.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminStudents.php');
        }

    }

    // * adminStudents.php edit student function
    if(isset($_POST['adminEditStudent'])){
        
        $editorstudentadminid = $_POST['editorstudentadminid'];
        $editorstudentadminname = $_POST['editorstudentadminname'];
        $editstudentid = $_POST['editstudentid'];
        $username = $_POST['usernames'];
        $password = $_POST['passwords'];
        $firstName = $_POST['firstNames'];
        $middleName = $_POST['middleNames'];
        $lastName = $_POST['lastNames'];

        if(empty($password)){
            $password = $_POST['passwords2'];
        }else{
            $password = $_POST['passwords'];
            $password = sha1($password);
        }
        
        if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
            $location = $_POST['user-photos'];
        }else{
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
    
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }

        $query_select = "SELECT * FROM student WHERE username='$username' AND student_id!='$editstudentid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminStudents.php');
        }else{
            $query_update = "UPDATE student SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middle_name='$middleName', location='$location' WHERE student_id='$editstudentid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Account Details of Student: $firstName $middleName $lastName.";
            $activity = "Student Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editorstudentadminname', '$editorstudentadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Student Account Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminStudents.php');
        }
    }
// TODO ending of adminStudents.php function

// TODO adminEntry.php function
    // * adminEntry.php add department function
    if(isset($_POST['adminAddDepartment'])){
        
        $adderdepartmentadminid = $_POST['adderdepartmentadminid'];
        $adderdepartmentadminname = $_POST['adderdepartmentadminname'];
        $department = $_POST['department'];
        $picharge = $_POST['picharge'];
        $title = $_POST['title'];

        $query_select = "SELECT * FROM department WHERE department='$department'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Department $department is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Department Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminEntry.php');
        }else{
            $query_update = "INSERT INTO department (department,incharge,title) VALUES ('$department','$picharge','$title')";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Add New Department: $department.";
            $activity = "Admin Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$adderdepartmentadminname', '$adderdepartmentadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!"; 
            $_SESSION['statustext'] = "New Department Created Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminEntry.php');
        }
    }

    // * adminEntry.php delete department function
    if(isset($_POST['adminDeleteDepartment'])){

        $deleterdepartmentadminid = $_POST['deleterdepartmentadminid'];
        $deleterdepartmentname = $_POST['deleterdepartmentname'];
        $deletdepartmentname2 = $_POST['deletdepartmentname2'];
        $deletedepartmentid = $_POST['deletedepartmentid'];
        
        $query_delete = "DELETE FROM department WHERE dep_id='$deletedepartmentid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Department: $deletdepartmentname2.";
            $activity = "Department Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deleterdepartmentname', '$deleterdepartmentadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Department Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminEntry.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminEntry.php');
        }

    }

    // * adminEntry.php edit department function
    if(isset($_POST['adminEditDepartment'])){

        $editordepartmentadminid = $_POST['editordepartmentadminid'];
        $editordepartmentadminname = $_POST['editordepartmentadminname'];
        $editdepartmentid = $_POST['editdepartmentid'];
        $department = $_POST['department'];
        $picharge = $_POST['picharge'];
        $title = $_POST['title'];

        $query_select = "SELECT * FROM department WHERE department='$department' AND dep_id!='$editdepartmentid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Department $department is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Department Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminEntry.php');
        }else{
            $query_update = "UPDATE department SET department='$department', incharge='$picharge', title='$title' WHERE dep_id='$editdepartmentid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Details of Department: $department.";
            $activity = "Department Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editordepartmentadminname', '$editordepartmentadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Department Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminEntry.php');
        }
    }
// TODO adminEntry.php function

// TODO adminCourses.php function
    // * adminCourses.php add course function
    if(isset($_POST['adminAddCourse'])){
            
        $addercourseadminid = $_POST['addercourseadminid'];
        $addercourseadminname = $_POST['addercourseadminname'];
        $courseyrsec = $_POST['courseyrsec'];
        $department = $_POST['department'];
        $major = $_POST['major'];

        $query_select = "SELECT * FROM course WHERE cys='$courseyrsec'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Course $courseyrsec is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Course Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminCourses.php');
        }else{
            $query_update = "INSERT INTO course (cys,department,major) VALUES ('$courseyrsec','$department','$major')";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Add New Course: $courseyrsec.";
            $activity = "Course Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$addercourseadminname', '$addercourseadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!"; 
            $_SESSION['statustext'] = "New Course Created Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminCourses.php');
        }
    }

    // * adminCourses.php delete course function
    if(isset($_POST['adminDeleteCourse'])){

        $deletercourseadminid = $_POST['deletercourseadminid'];
        $deletercourseadminname = $_POST['deletercourseadminname'];
        $deletecoursename2 = $_POST['deletecoursename2'];
        $deletecourseid = $_POST['deletecourseid'];
        
        $query_delete = "DELETE FROM course WHERE course_id='$deletecourseid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Course: $deletecoursename2.";
            $activity = "Course Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deletercourseadminname', '$deletercourseadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Course Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminCourses.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminCourses.php');
        }

    }

    // * adminCourses.php edit course function
    if(isset($_POST['adminEditCourse'])){

        $editorcourseadminid = $_POST['editorcourseadminid'];
        $editorcourseadminname = $_POST['editorcourseadminname'];
        $editcourseid = $_POST['editcourseid'];
        $courseyrsec = $_POST['courseyrsec'];
        $department = $_POST['department'];
        $major = $_POST['major'];

        $query_select = "SELECT * FROM course WHERE cys='$courseyrsec' AND course_id!='$editcourseid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Course $courseyrsec is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Course Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminCourses.php');
        }else{
            $query_update = "UPDATE course SET cys='$courseyrsec', department='$department', major='$major' WHERE course_id='$editcourseid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Details of Course: $courseyrsec.";
            $activity = "Course Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editorcourseadminname', '$editorcourseadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Course Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminCourses.php');
        }
    }
// TODO adminCourses.php function

// TODO adminSubjects.php function
    // * adminSubjects.php add subject function
    if(isset($_POST['adminAddSubject'])){
         
        $subjectadderadminid = $_POST['subjectadderadminid'];
        $subjectadderadminname = $_POST['subjectadderadminname'];
        $subjectcode = $_POST['subjectcode'];
        $subjecttitle = $_POST['subjecttitle'];
        $category = $_POST['category'];

        $query_select = "SELECT * FROM subject WHERE subject_code='$subjectcode'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Subject $subjectcode is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Subject Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminSubjects.php');
        }else{
            $query_update = "INSERT INTO subject (subject_code,subject_title,category) VALUES ('$subjectcode','$subjecttitle','$category')";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Add New Subject: $subjectcode - $subjecttitle - $category.";
            $activity = "Subject Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$subjectadderadminname', '$subjectadderadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!"; 
            $_SESSION['statustext'] = "New Subject Created Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminSubjects.php');
        }
    }

    // * adminSubjects.php delete subject function
    if(isset($_POST['adminDeleteSubject'])){

        $deletersubjectadminid = $_POST['deletersubjectadminid'];
        $deletersubjectadminname = $_POST['deletersubjectadminname'];
        $deletesubjectname2 = $_POST['deletesubjectname2'];
        $deletesubjectid = $_POST['deletesubjectid'];
        
        $query_delete = "DELETE FROM subject WHERE subject_id='$deletesubjectid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Subject: $deletesubjectname2.";
            $activity = "Subject Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deletersubjectadminname', '$deletersubjectadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Subject Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminSubjects.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminSubjects.php');
        }

    }

    // * adminSubjects.php edit subject function
    if(isset($_POST['adminEditSubject'])){

        $editorsubjectadminid = $_POST['editorsubjectadminid'];
        $editorsubjectadminname = $_POST['editorsubjectadminname'];
        $editsubjectid = $_POST['editsubjectid'];
        $subjectcode = $_POST['subjectcode'];
        $subjecttitle = $_POST['subjecttitle'];
        $category = $_POST['category'];

        $query_select = "SELECT * FROM subject WHERE subject_code='$subjectcode' AND subject_id!='$editsubjectid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Subject $subjectcode is Already Exist!"; 
            $_SESSION['statustext'] = "Insert New Subject Code."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminSubjects.php');
        }else{
            $query_update = "UPDATE subject SET subject_code='$subjectcode', subject_title='$subjecttitle', category='$category' WHERE subject_id='$editsubjectid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Details of Subject: $subjectcode - $subjecttitle - $category.";
            $activity = "Subject Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editorsubjectadminname', '$editorsubjectadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Subject Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminSubjects.php');
        }
    }
// TODO adminSubjects.php function

// TODO adminAdmin.php function
    // * adminAdmin.php add admin function
    if(isset($_POST['adminAddAdmin'])){

        $adderadminid = $_POST['adderadminid'];
        $adderadminname = $_POST['adderadminname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];

        $password = sha1($password);
        
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);

            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }else{
            $location = $_POST['default-photo'];
        }

        $query_select = "SELECT * FROM user WHERE username='$username'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminAdmin.php');
        }else{
            $query_insert = "INSERT INTO user (username,password,firstname,lastname,middlename,location)
            VALUES ('$username','$password','$firstName','$lastName','$middleName','$location')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $action = "Add New Admin Account: $firstName $middleName $lastName.";
            $activity = "Admin Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$adderadminname', '$adderadminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Create Successful!";
            $_SESSION['statustext'] = "New Admin Account Created Successfully.";  
            $_SESSION['status_code'] = "success";
            header('location:adminAdmin.php');
        }

    }

    // * adminAdmin.php delete admin function
    if(isset($_POST['adminDeleteAdmin'])){

        $deleteadminname2 = $_POST['deleteadminname2'];
        $deleteradminid = $_POST['deleteradminid'];
        $deleteradminname = $_POST['deleteradminname'];
        $deleteadminid = $_POST['deleteadminid'];
        
        $query_delete = "DELETE FROM user WHERE user_id='$deleteadminid'";
        $query_delete_run = mysqli_query($conn, $query_delete);

        if($query_delete_run){
            $action = "Delete Account of Admin: $deleteadminname2.";
            $activity = "Admin Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$deleteradminname', '$deleteradminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Delete Successful!"; 
            $_SESSION['statustext'] = "Admin Account Deleted Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminAdmin.php');
        }else{
            $_SESSION['status'] = "Error";
            $_SESSION['statustext'] = " ";  
            $_SESSION['status_code'] = "error";
            header('location:adminAdmin.php');
        }

    }

    // * adminStudents.php edit admin function
    if(isset($_POST['adminEditAdmin'])){
        
        $editoradminid = $_POST['editoradminid'];
        $editoradminname = $_POST['editoradminname'];
        $editadminid = $_POST['editadminid'];
        $username = $_POST['usernamea'];
        $password = $_POST['passworda'];
        $firstName = $_POST['firstNamea'];
        $middleName = $_POST['middleNamea'];
        $lastName = $_POST['lastNamea'];

        if(empty($password)){
            $password = $_POST['passworda2'];
        }else{
            $password = $_POST['passworda'];
            $password = sha1($password);
        }
        
        if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
            $location = $_POST['user-photoa'];
        }else{
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);
    
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }

        $query_select = "SELECT * FROM user WHERE username='$username' AND user_id!='$editadminid'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:adminAdmin.php');
        }else{
            $query_update = "UPDATE user SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middlename='$middleName', location='$location' WHERE user_id='$editadminid'";
            $query_update_run = mysqli_query($conn, $query_update);

            $action = "Update Account Details of Admin: $firstName $middleName $lastName.";
            $activity = "Admin Menu";
            $type = "Admin";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$editoradminname', '$editoradminid', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Admin Account Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:adminAdmin.php');
        }
    }
// TODO adminAdmin.php function

// TODO studentSettings.php function
// * studentSettings.php edit student function
    if(isset($_POST['studentSettings'])){
            
        $studentEditSettingsId = $_POST['studentEditSettingsId'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];

        if(empty($password)){
            $password = $_POST['studentSettingsPassword'];
        }else{
            $password = $_POST['password'];
            $password = sha1($password);
        }     
        
        if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
            $location = $_POST['user-photo'];
        }else{
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            $image_size = getimagesize($_FILES['image']['tmp_name']);

            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
            $location = "uploads/" . $_FILES["image"]["name"];
        }

        $query_select = "SELECT * FROM student WHERE username='$username' AND student_id!='$studentEditSettingsId'";
        $query_select_run = mysqli_query($conn, $query_select);
        $count = mysqli_num_rows($query_select_run);  

        if($count > 0){
            $_SESSION['status'] = "Username $username is Already Taken!"; 
            $_SESSION['statustext'] = "Please Choose Another Username."; 
            $_SESSION['status_code'] = "warning";
            header('location:studentSettings.php');
        }else{
            $query_update = "UPDATE student SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middle_name='$middleName', location='$location' WHERE student_id='$studentEditSettingsId'";
            $query_update_run = mysqli_query($conn, $query_update);

            $studentFullname = "$firstName $middleName $lastName";
            $action = "Update Own Account Details.";
            $activity = "Student Settings";
            $type = "Student";

            $query_insert = "INSERT INTO activitylogs (activity, user_type, name, student_id, action) VALUES ('$activity', '$type', '$studentFullname', '$studentEditSettingsId', '$action')";
            $query_insert_run = mysqli_query($conn, $query_insert);

            $_SESSION['status'] = "Update Successful!"; 
            $_SESSION['statustext'] = "Account Details Updated Successfully."; 
            $_SESSION['status_code'] = "success";
            header('location:studentSettings.php');
        }
    }
// TODO studentSettings.php function

// TODO teacherSettings.php function
// * teacherSettings.php edit student function
if(isset($_POST['teacherSettings'])){
            
    $teacherEditSettingsId = $_POST['teacherEditSettingsId'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];

    if(empty($password)){
        $password = $_POST['tacherSettingsPassword'];
    }else{
        $password = $_POST['password'];
        $password = sha1($password);
    }    
    
    if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
        $location = $_POST['user-photo'];
    }else{
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
        $location = "uploads/" . $_FILES["image"]["name"];
    }

    $query_select = "SELECT * FROM teacher WHERE username='$username' AND teacher_id!='$teacherEditSettingsId'";
    $query_select_run = mysqli_query($conn, $query_select);
    $count = mysqli_num_rows($query_select_run);  

    if($count > 0){
        $_SESSION['status'] = "Username $username is Already Taken!"; 
        $_SESSION['statustext'] = "Please Choose Another Username."; 
        $_SESSION['status_code'] = "warning";
        header('location:teacherSettings.php');
    }else{
        $query_update = "UPDATE teacher SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middlename='$middleName', location='$location' WHERE teacher_id='$teacherEditSettingsId'";
        $query_update_run = mysqli_query($conn, $query_update);

        $teacherFullname = "$firstName $middleName $lastName";
        $action = "Update Own Account Details.";
        $activity = "Teacher Settings";
        $type = "Teacher";

        $query_insert = "INSERT INTO activitylogs (activity, user_type, name, teacher_id, action) VALUES ('$activity', '$type', '$teacherFullname', '$teacherEditSettingsId', '$action')";
        $query_insert_run = mysqli_query($conn, $query_insert);

        $_SESSION['status'] = "Update Successful!"; 
        $_SESSION['statustext'] = "Account Details Updated Successfully."; 
        $_SESSION['status_code'] = "success";
        header('location:teacherSettings.php');
    }
}
// TODO teacherSettings.php function


// TODO adminSettings.php function
// * adminSettings.php edit student function
if(isset($_POST['adminSettings'])){
            
    $adminEditSettingsId = $_POST['adminEditSettingsId'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];

    if(empty($password)){
        $password = $_POST['adminSettingsPassword'];
    }else{
        $password = $_POST['password'];
        $password = sha1($password);
    }
    
    if(isset($_FILES['image']) && empty($_FILES['image']['name'])){
        $location = $_POST['user-photo'];
    }else{
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
        $location = "uploads/" . $_FILES["image"]["name"];
    }

    $query_select = "SELECT * FROM user WHERE username='$username' AND user_id!='$adminEditSettingsId'";
    $query_select_run = mysqli_query($conn, $query_select);
    $count = mysqli_num_rows($query_select_run);  

    if($count > 0){
        $_SESSION['status'] = "Username $username is Already Taken!"; 
        $_SESSION['statustext'] = "Please Choose Another Username."; 
        $_SESSION['status_code'] = "warning";
        header('location:adminSettings.php');
    }else{
        $query_update = "UPDATE user SET username='$username', password='$password', firstname='$firstName', lastname='$lastName', middlename='$middleName', location='$location' WHERE user_id='$adminEditSettingsId'";
        $query_update_run = mysqli_query($conn, $query_update);

        $adminFullname = "$firstName $middleName $lastName";
        $action = "Update Own Account Details.";
        $activity = "Admin Settings";
        $type = "Admin";

        $query_insert = "INSERT INTO activitylogs (activity, user_type, name, user_id, action) VALUES ('$activity', '$type', '$adminFullname', '$adminEditSettingsId', '$action')";
        $query_insert_run = mysqli_query($conn, $query_insert);

        $_SESSION['status'] = "Update Successful!"; 
        $_SESSION['statustext'] = "Account Details Updated Successfully."; 
        $_SESSION['status_code'] = "success";
        header('location:adminSettings.php');
    }
}
// TODO adminSettings.php function
?>


