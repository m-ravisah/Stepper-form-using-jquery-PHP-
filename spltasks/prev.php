<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>preview</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h2 class="text-danger my-4">Students Form Previews</h2>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-white text-center">
                    <th>Id</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>Gender</th>
                    <th>phone no</th>
                    <th>Hobbies</th>
                    <th>Tenth marks</th>
                    <th>Tenth subject</th>
                    <th>Twelve marks</th>
                    <th>Twelve branch</th>
                    <th>Grad marks</th>
                    <th>Grad branch</th>
                    <th>Mast marks</th>
                    <th>Mast branch</th>
                    <th>Profile pic</th>
                    <th>Tenth doc</th>
                    <th>Twelveth doc</th>
                    <th>Graduation doc</th>
                    <th>Masters doc</th>
                </tr>
                <?php
                    include('conn.php');
                    $sql = "SELECT * FROM students_info";     
                    $result= mysqli_query($conn, $sql);
                    while($resl = mysqli_fetch_array($result))
                    {   
                ?>

                <tr>                   
                    <td><?php echo $resl['id']; ?></td>
                    <td><?php echo $resl['email']; ?></td>
                    <td><?php echo $resl['pass_word']; ?></td>
                    <td><?php echo $resl['first_name']; ?></td>
                    <td><?php echo $resl['last_name']; ?></td>
                    <td><?php echo $resl['gender']; ?></td>
                    <td><?php echo $resl['phone_no']; ?></td>
                    <td><?php echo $resl['hobbies']; ?></td>
                    <td><?php echo $resl['tenth_marks']; ?></td>
                    <td><?php echo $resl['tenth_subject']; ?></td>
                    <td><?php echo $resl['twelve_marks']; ?></td>
                    <td><?php echo $resl['twelve_branch']; ?></td>
                    <td><?php echo $resl['grad_marks']; ?></td>
                    <td><?php echo $resl['grad_branch']; ?></td>
                    <td><?php echo $resl['mast_marks']; ?></td>
                    <td><?php echo $resl['mast_branch']; ?></td>
                    <td><?php echo $resl['profile_pic']; ?></td>
                    <td><?php echo $resl['tenth_doc']; ?></td>
                    <td><?php echo $resl['twelveth_doc']; ?></td>
                    <td><?php echo $resl['graduation_doc']; ?></td>
                    <td><?php echo $resl['masters_doc']; ?></td>
                </tr>

                <?php
                    }
                ?>

            </table>
        </div>

        <form action="index.php">
            <button type="submit" class="btn btn-primary">Go Back To Login Page</button>
        </form>
    </div>
                    
</body>
</html>