<?php

include('conn.php');

if(isset($_POST['btn_documentation']))
{
    $email = $_POST['email'];
    $pass_word = md5($_POST['pass_word']);
    $pas_word = $_POST['pass_word'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $phone_no = $_POST['phone_no'];
    // $hobbies = $_POST['hobbies'];
    if(isset($_POST['hobbies'])){
      $checkbx = $_POST['hobbies'];
      $check= "";
      foreach ($checkbx as $checkk){
        $check .= $checkk . " ";
      }
    }
    $tenth_marks = $_POST['tenth_marks'];
    $tenth_subject = $_POST['tenth_subject'];
    $twelve_marks = $_POST['twelve_marks'];
    $twelve_branch = $_POST['twelve_branch'];
    $grad_marks = $_POST['grad_marks'];
    $grad_branch = $_POST['grad_branch'];
    $mast_marks = $_POST['mast_marks'];
    $mast_branch = $_POST['mast_branch'];
    $profile_pic = $_POST['profile_pic'];
    $tenth_doc = $_POST['tenth_doc'];
    $twelveth_doc = $_POST['twelveth_doc'];
    $graduation_doc  = $_POST['graduation_doc'];
    $masters_doc = $_POST['masters_doc'];


    // $action = $_POST['action'];
    if ($action = 'preview')
    {
      echo 
      
      "<h1>Students Preview</h1>", "<br>",
      "<b>Email</b> :",  $email, "<br>", 
      "<b>password</b> :",  $pas_word, "<br>",
      "<b>First Name </b>:",  $first_name, "<br>",
      "<b>Last Name</b> :",  $last_name, "<br>",
      "<b>Gender</b> :",  $gender,"<br>",
      "<b>Phone no.</b> :",  $phone_no,"<br>",
      "<b>Hobbies</b> :",  $check,"<br>",
      "<b>Tenth Marks</b> :",  $tenth_marks,"<br>",
      "<b>Tenth Subject</b> :",  $tenth_subject,"<br>",
      "<b>Twelve Marks</b> :",  $twelve_marks,"<br>",
      "<b>Twelve Branch</b> :",  $twelve_branch,"<br>",
      "<b>Graduation Marks</b> :",  $grad_marks,"<br>",
      "<b>Graduation</b> :",  $grad_branch,"<br>",
      "<b>Master Marks</b> :",  $mast_marks,"<br>",
      "<b>Master Branch</b> :",  $mast_branch,"<br>",
      "<b>Profile pic</b> :",  $profile_pic,"<br>",
      "<b>Tenth Document</b> :",  $tenth_doc, "<br>",
      "<b>Twelve Document</b> :",  $twelveth_doc,"<br>",
      "<b>Graduation Document</b> :",  $graduation_doc,"<br>",
      "<b>Master Document</b> :",  $masters_doc,"<br>";

    }

    // if(!get_magic_quotes_gpc()){

    //   $email = addslashes($email);
    //   $pass_word = addlashes($pass_word);
    //   $first_name = addlashes($first_name);
    // }

    $sql = "INSERT INTO students_info (email, pass_word, first_name, last_name, gender, phone_no, hobbies, tenth_marks, tenth_subject, twelve_marks, twelve_branch, grad_marks, grad_branch, mast_marks, mast_branch, profile_pic, tenth_doc, twelveth_doc, graduation_doc, masters_doc) 
    
    VALUES ('$email','$pass_word','$first_name','$last_name','$gender','$phone_no','$check','$tenth_marks','$tenth_subject','$twelve_marks','$twelve_branch','$grad_marks','$grad_branch','$mast_marks','$mast_branch','$profile_pic','$tenth_doc','$twelveth_doc','$graduation_doc','$masters_doc')";


    $result = mysqli_query($conn, $sql);

    if($result == true)
    {
      echo " ";
    }

    else{
      echo "Data is not inserted";
    }
  

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>
<body>
  

        <form action="index.php">
          <br><br>
            <button type="submit" class="btn btn-primary">Go Back To Login Page</button>
        </form>

        </body>
</html>