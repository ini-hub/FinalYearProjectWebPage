<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Icon.css">
    <link rel="stylesheet" href="./AMSdashBoard.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
</head>
<body>
    <div class="dashboard"><!--dashboard-->
        <section class="navigation"> <!--navigation-->
            <img src="../BABCOCK LOGO.png" alt="BabcockLogo" class="Logo">
            <div>
                <span class="material-icons-outlined">account_circle</span>
                <span class="material-icons-outlined">dashboard</span>
                <span class="material-icons-outlined">timeline</span>
                <span class="material-icons-outlined">settings</span>
            </div>
            <img src="../EXCEL.jpeg" alt="User Image" class="user">
        </section><!--navigation End-->
        <section class="main"> <!--main-->
            <div class="Search"> <!--Search-->
                <form action="">
                    <input type="text" name="search" id="search" placeholder="Search Course">
                    <span class="material-icons-outlined">search</span>
                </form>
                <div class="notifications">
                    <span class="material-icons-outlined">notifications</span>
                    <span class="material-icons-outlined">edit</span>
                </div> <!--Search End-->
            </div>
            <div class="Title">
                <h1> My Dashboard</h1>
                <form action="#">
                    <label for="classes">Filter</label>
                    <select name="classes" id="classes">
                        <option value="Present">Recent Present</option>
                        <option value="Absent">Recent Absent</option>
                        <option value="Others">Recent Others</option>
                    </select>                        
                </form>
            </div>
            <div class="Course_List"><!--Class List-->
                <div class="Course"><!--web Class-->
                   <div class="category category_color1"></div>
                    <h2>Web Design</h2>
                    <p>Attended recently</p>
                    <ul class="activity">
                        <li>Coming Soon Banner</li>
                        <p>Lecturer Name</p>
                        <li>You have ? percent of attendance</li>
                    </ul>
                    <div class="meta"><!--take it out later vidoe 10 style-->
                        <div class="contribution">
                            <img src="" alt=""><!--coursemate 1 attending the class with you -->
                        </div>
                        <span class="material-icons-outlined">more_vert</span>
                    </div>
                </div><!--Class End-->
                <div class="Course"><!-- E-commerce Class-->
                    <div class="category category_color2"></div>
                    <h2>E-commerce</h2>
                    <p>Attended recently</p>
                    <p>Lecturer Name</p>
                    <ul class="activity">
                        <li>Coming Soon Banner</li>
                        <li>You have ? percent of attendance</li>
                    </ul>
                    <div class="meta">
                        <div class="contribution">
                            <img src="" alt=""><!--coursemate 1 attending the class with you -->
                        </div>
                        <span class="material-icons-outlined">more_vert</span>
                    </div>
                </div><!--Class End-->
                <div class="Course"><!--Class-->
                    <div class="category category_color3"></div>
                    <h2>Artificial Intelligence</h2>
                    <p>Held 1hr ago</p>
                    <p>Lecturer Name</p>
                    <ul class="activity">
                        <li>Coming Soon Banner</li>
                        <li>You have ? percent of attendance</li>
                    </ul>
                    <div class="meta">
                        <div class="contribution">
                            <img src="" alt=""><!--coursemate 1 attending the class with you -->
                        </div>
                        <span class="material-icons-outlined">more_vert</span>
                    </div>
                </div><!--Class End-->
            </div><!--Class List End-->
        </section><!--main end-->
        <section class="overall_chart"> <!--overall-->
            <div class="chart">
                <h2>Overall attendance</h2>
                <canvas id="myChart" width="400" height="400"></canvas>
                <div class="complete">
                    <h3>attendance percent</h3>
                    <h3>attendance Absent</h3>
                    <p>from ? amount of class</p>
                </div>
            </div>
            <div class="recent_class"><!--Recent Classes-->
                <div class="listing">
                    <div class="title">
                        <div class="category category_color1"></div>
                        <h2>Web Design /  course 1</h2>
                        <p>Lecturer Name</p>
                        <p>Eligible/not eligible</p>
                    </div>
                    <span class="material-icons-outlined">more_vert</span>
                </div>
                <div class="listing">
                    <div class="title">
                        <div class="category category_color2"></div>
                        <h2> Artificial Intelligence/ course 2</h2>
                        <p>Lecturer Name</p>
                        <p>Eligible/not eligible</p>
                    </div>
                    <span class="material-icons-outlined">more_vert</span>
                </div>
                <div class="listing">
                    <div class="title">
                        <div class="category category_color3"></div>
                        <h2>Ecommerce/ course 3 </h2>
                        <p>Lecturer Name</p>
                        <p>Eligible/not eligible</p>
                    </div>
                    <span class="material-icons-outlined">more_vert</span>
                </div>
            </div><!--Recent Classes End-->

        </section><!--overall-->

    </div><!--dashboard end-->
    <script src="./AMSdashBoard.js"></script>
    <script>
        <?php
            $id = $_SESSION["reg_id"];
            echo "alert('Registration ID: $id');";
        ?>
    </script>
</body>
</html>