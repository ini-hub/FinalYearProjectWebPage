<?php
ob_start();
session_start();
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
$factory = (new Factory)->withServiceAccount('./finalyearproject-a2164-firebase-adminsdk-ran6u-c7c3d0e915.json')->withDatabaseUri('firebase-adminsdk-ran6u@finalyearproject-a2164.iam.gserviceaccount.com');

$firestore = $factory->createFirestore();
$database = $firestore->database();

if(isset($_POST['MatricNumber']) && $_POST['password'] != "") 
{
    $MatricNumber = $_POST['MatricNumber'];
    $password = $_POST['password'];

    if (!empty($MatricNumber) || !empty($Password) )
    {
        #code......
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "ams";

        // create connection
        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_errno()) 
        {
            die('Connection failed!');
        } 
        else 
        {
            $SELECT = "SELECT MatricNumber, Password FROM register WHERE MatricNumber = '$MatricNumber' AND Password = '$password' Limit 1; ";
            //Prepare statement
            $query = mysqli_query($conn, $SELECT);
            //print_r($SELECT);
            if (mysqli_num_rows($query) >= 1) 
            {
                $query = mysqli_query($conn, $SELECT);
                if($query) {
                    echo "Login Successful <br />";
                    $SELECT = "SELECT Registeration_id from register where MatricNumber = '$MatricNumber' Limit 1;";
                    $query = mysqli_query($conn, $SELECT);
                    if($query) 
                    {
                        $rows = mysqli_fetch_array($query);
                        echo "Registration ID: " . $rows["Registeration_id"];
                        $_SESSION["reg_id"] = $rows["Registeration_id"];
                        //echo "login has been successful";
                        $INSERT = "INSERT INTO login (Matric Number, id) values ('$MatricNumber', $SELECT)";
                        $query = mysqli_query($conn, $INSERT);
                        header("location: DashBoard/AMSdashBoard.php");
                        /*if ($query) 
                        {
                        # code...
                        echo "Data Saved";
                        }
                        else
                        {
                            echo "E no Save";
                        }*/
                    }
                } 
                else 
                {
                    echo "Omoooo enhhhhh";
                }
                # code...
            } 
            else 
            {
                echo "This Matric Number and Password hasnt been registered";
            }
        }
    } 
    else 
    {
        echo "All Fields are required";
        die();
    }
}
?>