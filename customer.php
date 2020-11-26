<?php
session_start();
include "pdo.php";

 ?>


 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta http-equiv="Content-Language" content="en">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <title>Dashboard</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     <meta name="description" content="This is an example dashboard created using build-in elements and components.">
     <meta name="msapplication-tap-highlight" content="no">
     <!--
     =========================================================
     * ArchitectUI HTML Theme Dashboard - v1.0.0
     =========================================================
     * Product Page: https://dashboardpack.com
     * Copyright 2019 DashboardPack (https://dashboardpack.com)
     * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
     =========================================================
     * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
     -->
 <link href="css/dashboard1css.css" rel="stylesheet">
 <link href="css/dashboardcss.css" rel="stylesheet"></head>
 <body>
     <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
         <div class="app-header header-shadow">
             <div class="app-header__logo">
                 <h2>Hotel Admin</h2>

                 <div class="header__pane ml-auto">
                     <div>
                         <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                             <span class="hamburger-box">
                                 <span class="hamburger-inner"></span>
                             </span>
                         </button>
                     </div>
                 </div>
             </div>
             <div class="app-header__mobile-menu">
                 <div>
                     <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                         <span class="hamburger-box">
                             <span class="hamburger-inner"></span>
                         </span>
                     </button>
                 </div>
             </div>
             <div class="app-header__menu">
                 <span>
                     <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                         <span class="btn-icon-wrapper">
                             <i class="fa fa-ellipsis-v fa-w-6"></i>
                         </span>
                     </button>
                 </span>
             </div>    <div class="app-header__content">

                 <div class="app-header-right">
                     <div class="header-btn-lg pr-0">
                         <div class="widget-content p-0">
                             <div class="widget-content-wrapper">
                                 <div class="widget-content-left">

                                   <a class="link" style="margin-left:5vw;" href="logout.php">Logout</a>
                                 </div>


                             </div>
                         </div>
                     </div>        </div>
             </div>
         </div>
              <div class="app-main">
                 <div class="app-sidebar sidebar-shadow">
                     <div class="app-header__logo">
                         <div class="logo-src"></div>
                         <div class="header__pane ml-auto">
                             <div>
                                 <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                     <span class="hamburger-box">
                                         <span class="hamburger-inner"></span>
                                     </span>
                                 </button>
                             </div>
                         </div>
                     </div>
                     <div class="app-header__mobile-menu">
                         <div>
                             <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                 <span class="hamburger-box">
                                     <span class="hamburger-inner"></span>
                                 </span>
                             </button>
                         </div>
                     </div>
                     <div class="app-header__menu">
                         <span>
                             <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                 <span class="btn-icon-wrapper">
                                     <i class="fa fa-ellipsis-v fa-w-6"></i>
                                 </span>
                             </button>
                         </span>
                     </div>    <div class="scrollbar-sidebar">
                         <div class="app-sidebar__inner">
                             <ul class="vertical-nav-menu">
                               <br>
                            <h5>   <li>
                               <a  href="dashboard.php"  >Dashboard</a>
                             </li>
                               </h5>
                               <h5>   <li>
                              <a  href="customer.php" class="mm-active"  >Customer List</a>
                            </li>
                              </h5>



                             </ul>
                         </div>
                     </div>
                 </div>
                  <div class="app-main__outer">
                     <div class="app-main__inner">
                         <div class="app-page-title">
                             <div class="page-title-wrapper">
                               <h2>Customer List</h2>
                                     </div>
                         </div>
                         <table class="mb-0 table">
                             <thead>
                             <tr>
                                 <th>Customer_id</th>
                                 <th>Room_id</th>
                                 <th>Total Amount</th>
                                 <th>checkout</th>



                             </tr>
                             </thead>
                             <tbody>
                               <?php
                               $stmt=$pdo->prepare("Select * FROM reservation");
                               $stmt->execute();
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                echo("<form method='post' action='checkout.php'>");
                                print_r("<tr> <td> <input type='text' name='customer_id' value=' ".$row['customer_id']."' ></td>");
                               print_r("<td> <input type='text' name='room_id' value='".$row['room_id']."'> </td>");
                               print_r("<td> <input type='number' name='amount'> </td>");
                               print_r('<td> <input type="submit" name="checkout" value="checkout"> </td> </tr></form>');


                                 }

                                 ?>
                             </tbody>

                         </table>



                     </div>
                      </div>
                 <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
         </div>
     </div>
 <script type="text/javascript" src="./assets/scripts/main.js"></script></body>
 </html>
