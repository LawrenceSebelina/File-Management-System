<?php 
// TODO navHead.php functions
    // * navHead.php student login function 
    if(isset($_POST['studentLogin'])){
        include 'dbOpener.php';
        $conn = $connector->DbConnector();
        
        function clean($str){
        global $conn;
            $str = @trim($str);
            $str = stripslashes($str);
            return mysqli_real_escape_string($conn,$str);
        }

        $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $password = sha1($password);

        $query = mysqli_query($conn,"SELECT * FROM student WHERE username='$username' AND password='$password'") or die(mysqli_error());
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);


        if($count > 0){
            $_SESSION['id'] = $row['student_id'];
            echo('<script>location.href="studentHome.php"</script>');
            session_write_close();
            exit();
        }else{
            echo '<script>
            swal("Login Failed!", "Incorrect Username or Password!", "error")
            </script>';
        }
    }

    // * navHead.php teacher login function
    if(isset($_POST['teacherLogin'])){
        include 'dbOpener.php';
        $conn = $connector->DbConnector();

        function clean($str){
        global $conn;
            $str = @trim($str);
            $str = stripslashes($str);
            return mysqli_real_escape_string($conn,$str);
        }

        $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $password = sha1($password);

        $query = mysqli_query($conn,"SELECT * FROM teacher WHERE username='$username' AND password='$password'") or die(mysqli_error());
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

        if($count > 0){
            $_SESSION['id'] = $row['teacher_id'];
            echo('<script>location.href = "teacherHome.php"</script>');
            session_write_close();
            exit();
        }else{
            echo '<script>
            swal("Login Failed!", "Incorrect Username or Password!", "error")
            </script>';
        }
    }
    
    // * navHead.php admin login function
    if (isset($_POST['adminLogin'])) {
        include 'dbOpener.php';
        $conn = $connector->DbConnector();
        
        function clean($str){
            global $conn;
            $str = @trim($str);
            $str = stripslashes($str);
            return mysqli_real_escape_string($conn,$str);
        }

        $username = clean($_POST['username']);
        $password = clean($_POST['password']);

        $password = sha1($password);

        $query = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'") or die(mysqli_error());
        $count = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);

        if($count > 0){
            $_SESSION['id'] = $row['user_id'];
            echo('<script>location.href = "adminHome.php"</script>');
            session_write_close();
            exit();
        }else{
            echo '<script>
            swal("Login Failed!", "Incorrect Username or Password!", "error")
            </script>';
        }
    }
// TODO ending of navHead.php functions
?>


