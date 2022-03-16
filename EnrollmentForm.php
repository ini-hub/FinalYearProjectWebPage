<a href=".confirm.html" name = "confirm "></a>
<?php
$msg = '';
if(isset($_POST['FirstName']) && $_POST['FirstName'] != "") {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $MatricNumber = $_POST['MatricNumber'];
    $EmailAddress = $_POST['EmailAddress'];
    $Department = $_POST['Department'];
    $CourseOfStudy = $_POST['CourseOfStudy'];
    $Gender = strtoupper($_POST['Gender'][0]);
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $checkbox = isset($_POST['check']); 

    //echo "Your Name is "$LastName ."</br>". $FirstName;

    if (!empty($FirstName) || !empty($LastName) || !empty($MatricNumber) || !empty($EmailAddress) || !empty($Department) || !empty($CourseOfStudy) || !empty($Gender) || !empty($Password) || !empty($ConfirmPassword) )
    {
        if (strlen($FirstName)<3) {
            # code...
            $msg = 'First name must contain atleast 3 characters'
        }
        #code......
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "ams";

        // create connection
        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_errno()) {
            die('Connection failed!');
        } else {
            $SELECT = "SELECT MatricNumber from register where MatricNumber = '$MatricNumber' Limit 1;";
            $INSERT = "INSERT INTO register (FirstName, LastName, MatricNumber, EmailAddress, Department, CourseOfStudy, Gender, Password, ConfirmPassword) values ('$FirstName', '$LastName', '$MatricNumber', '$EmailAddress', '$Department', '$CourseOfStudy', '$Gender', '$Password', '$ConfirmPassword');";

            //Prepare statement
            $query = mysqli_query($conn, $SELECT);
            // print_r($INSERT);

            if (mysqli_num_rows($query) <= 0) {
                $query = mysqli_query($conn, $INSERT);
                if($query) {
                    echo "New record inserted Successfully <br />";
                    $SELECT = "SELECT Registeration_id from register where MatricNumber = '$MatricNumber' Limit 1;";
                    $query = mysqli_query($conn, $SELECT);
                    if($query) {
                        $rows = mysqli_fetch_array($query);
                        echo "Registration ID: " . $rows["Registeration_id"]; 
                        header("location: SelectCourses.html");
                        // a href="./proceed.html" name="Proceed"></a>
                        // a href="./SelectCourses.html" name="Course Selection"></a>
                    }
                } else {
                    echo "Omoooo enhhhhh";
                }
                # code...
            } else {
                echo "Someone already registered using this Matric Number";
                
                echo "Kindly Confirm Your Matric Number";
            }
        }
    } else {
        echo "All Fields are required";
        die();
    }
}
?>
