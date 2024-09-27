<?php
    
    $servername="localhost";
    $username = "root";

    $connect = mysqli_connect("localhost", "root", "", "voting") or die("connection failed!");
    if($connect){
        echo "Connected!";
    }
    else{
        echo "Not connected!";
    }

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['name']['photo'];s
    $tmp_name = $_FILES['tmp_name']['photo'];
    $role = $_POST['role'];

    if($password==$cpassword){
        move_uploaded_file($tmp_name, "../uploads/$image");
        $insert=mysqli_query($connect, "INSERT INTO user (name,mobile,address,password,photo,role,status,votes) VALUES ('$name','$mobile', '$address', '$password', '$photo', '$role', 0,0 ) ");
        if($insert){
            echo '
                <script>
                    alert("Registration Successfull!");
                    window.location="../";
                </script>
            ';
        }
        else{
            echo '
                <script>
                    alert("Some error occured!");
                    window.location="../routes/register.html";
                </script>
            ';
        }
    }
    else{
        echo '
            <script>
                alert("Password and confirm password does not match!");
                window.location="../routes/register.html";
            </script>
        ';
    }



?>