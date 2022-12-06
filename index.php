<?php

@include '../connection.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-lodth, initial-scale=1.0">
        <link rel="icon" href="../Image/logo vector.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
    
        <title>Dashboard Admin</title>
    </head>
    <body>
        <div class="container" id="container">
            <aside id="aside">
                <div class="top">
                    <div class="logo">
                        <img src="../Image/logo vector.png" alt="logo">
                        <h2>NAP<span class="danger">BUSINESS</span></h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp" onclick="return showMenu()">
                        close
                        </span>
                    </div>
                </div>
                <div class="sidebar">
                    <a href="#"  class="active">
                        <span class="material-icons-sharp">
                        grid_view </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        person_outline
                        </span>
                        <h3>Customers</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        receipt_long
                        </span>
                        <h3>Orders</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        insights
                        </span>
                        <h3>Analytic</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        mail_outline
                        </span>
                        <h3>Messages</h3>
                        <span class="message-count">26</span>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        inventory
                        </span>
                        <h3>Product</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        report_gmailerrorred
                        </span>
                        <h3>Report</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                        settings
                        </span>
                        <h3>Settings</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Adds Product</h3>
                    </a>
                    <a href="../php/logout.php">
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <h3>Log Out</h3>
                    </a>
                </div>
            </aside>
            <!-------------END OF ASIDE-------->
            <main>
                <h1>Dashboard</h1>

                <div class="date">
                    <input type="date">
                </div>

                <div class="insights">
                    <div class="sale">
                        <span class="material-icons-sharp">
                            analytics
                            </span>
                            <div class="middle">
                                <div class="lef">
                                    <h3>Total Sales</h3>
                                    <h1>$25,024</h1>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="36" r="30"/>
                                    </svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                </div>
                            </div>
                        <small class="text-nuted">Last 24 Hours</small>
                    </div>
                    <!------------END OF SALES------>
                    <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Expenses</h3>
                                <h1>$14,168</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="36" r="30"/>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                    <small class="text-nuted">Last 24 Hours</small>
                </div>
                <!------------END OF EXPENSES------>
                <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Income</h3>
                                <h1>$10,964</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="36" r="30"/>
                                </svg>
                                <div class="number">
                                    <p>41%</p>
                                </div>
                            </div>
                        </div>
                    <small class="text-nuted">Last 24 Hours</small>
                </div>
                <!------------END OF INCOME------>
                </div>
                <!-- ---------END OF INSIGHTS---- -->

                <div class="recent-orders">
                    <h2>Recent Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 <td>Rice</td>
                                 <td>789</td>
                                 <td>Due</td>
                                 <td class="warring">Pending</td>
                                 <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
            </main>
            <!-- --------END OF MAIN---- -->

            <div class="right">
                <div class="top">
                    <button >
                        <span class="material-icons-sharp" id="menu-btn" onclick=" return showMenu()">menu</span></button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active" onclick="return lightMode()">light_mode</span>
                        <span class="material-icons-sharp" onclick="return darkMode()">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b><?php echo $_SESSION['admin_name'] ?></b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="./Image/profile-1.jpg" alt="profile">
                        </div>
                    </div>
                </div>
                <!-- END OF TOP -->
                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./image/profile-2.jpg" alt="profile2">
                            </div>
                            <div class="massage">
                                <p><b>Mike Tyson</b> received hid order of
                                Night lion tech GPS drone</p>
                                <small class="text-muted">2 Minutes Ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sales-analytics">
                    <h2>Sales analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <div class="material-icons-sharp">shopping_cart</div>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>ONLINE ORDERS</h3>
                                <SMAll class="text-mute">Last 24 Hours</SMAll>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3849</h3>
                        </div>
                    </div> 
                    <div class="item offline">
                        <div class="icon">
                            <div class="material-icons-sharp">local_mall</div>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>OFFLINE ORDERS</h3>
                                <SMAll class="text-mute">Last 24 Hours</SMAll>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>1120</h3>
                        </div>
                    </div> 
                    <div class="item customer">
                        <div class="icon">
                            <div class="material-icons-sharp">person</div>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>NEW CUSTOMERD</h3>
                                <SMAll class="text-mute">Last 24 Hours</SMAll>
                            </div>
                            <h5 class="success">+25%</h5>
                            <h3>849</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Product</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <script>
            function showMenu(){
     
              if ( document.getElementById("aside").style.display == "none") {
                document.getElementById("aside").style.display ="block";
                return false;
              }
                else{
                    document.getElementById("aside").style.display = "none";
                    return false;
                }
            }

            function darkMode(){
               var element = document.body;
               element.className ="dark-mode";
            }
            function lightMode(){
                var light = document.body;
                light.className ="light-mode";
            }
        </script>
    </body>
</html>