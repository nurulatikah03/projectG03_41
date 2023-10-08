<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Profile</title>
    <link href="css/styles.css" rel="stylesheet">
    <style>body {
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }</style
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Edit Account Details</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label for="newFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="newFirstName" name="newFirstName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="newLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="newLastName" name="newLastName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="newPhoneNum" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="newPhoneNum" name="newPhoneNum" required>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-block" type="submit" name="editDetailsButton">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

<?php
if (isset($_POST['editDetailsButton'])) {
    editDetails();
}

function editDetails()
{
    $con = mysqli_connect("localhost", "sd41g3", "sd41g3", "sd41g3");

    if (!$con) {
        echo "Error: " . mysqli_connect_error($con);
    } else {
        $email = $_SESSION['emailLogin'];
        $firstName = $_POST['newFirstName'];
        $lastName = $_POST['newLastName'];
        $phoneNum = $_POST['newPhoneNum'];
        $sql = "UPDATE user_info SET firstName='" . $firstName . "', lastName='" . $lastName . "', phoneNum='" . $phoneNum . "' WHERE email='" . $email . "'";
        mysqli_query($con, $sql);
        $userType = getUserType($_SESSION['emailLogin']);
        if ($userType == 'ADMIN')
            echo "<script>window.top.location='admin/profileAdmin.php'</script>";
        else if ($userType == 'STAFF')
            echo "<script>window.top.location='staff/profileStaff.php'</script>";
        else
            echo "<script>window.top.location='customer/profileCustomer.php'</script>";
    }
}

function getUserType($email)
{
    $con = mysqli_connect("localhost", "sd41g3", "sd41g3", "sd41g3");
    if (!$con) {
        echo mysqli_connect_error();
        exit;
    }
    $sql = "SELECT * FROM user_info where email = '" . $email . "'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $userType = $row['userType'];
        return $userType;
    }
}
?>
</html>






