<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        DashBoard
    </title>
    <link rel="shortcut icon" href="/images/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="js/tableclick.js">
</head>

<body>
          <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/624d250ac72df874911d33f1/1fvulhcdh';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="./images/logo-lg.png" alt="Comapny logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./images/userface.jpg" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                    Welcome User!!!
                </div>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-home'></i>
                    <span>dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-shopping-bag'></i>
                    <span>sales</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chart'></i>
                    <span>analytic</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle'></i>
                    <span>account</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>project</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            VFX
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Product Designs
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>mail</span>
                </a>
            </li>

            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>settings</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            darkmode
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                dashboard
            </div>
        </div>
        <div class="main-content">
            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                <h3 style="color:#757575">cost reduction</h3>
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    199.05M
                                </div>
                                <i class='bx bxs-coin-stack' style='color:#1286bc'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                <h3 style="color:#757575">income generation</h3>
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    300M
                                </div>
                                <i class='bx bxs-bank' style='color:#1286bc'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                <h3 style="color:#757575">process improvement</h3>
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    100M
                                </div>
                                <i class='bx bx-line-chart' style='color:#1286bc'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                <h3 style="color:#757575">working capital</h3>
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    700M
                                </div>
                                <i class='bx bx-columns' style='color:#1286bc'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3 col-md-6 col-sm-12">
                    <!-- TOP PRODUCT -->
                    <div class="box f-height">
                        <div class="box-header">
                            top projects
                        </div>
                        <div class="box-body">
                            <ul class="product-list">
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./images/the-matrix-awakens.png" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">The Matrix Awakens</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Profit</div>
                                        <div class="product-profit">$7,930,650</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./images/windwalker.jpeg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">WindWalker Echo</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Profit</div>
                                        <div class="product-profit">$8,000,000</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./images/CoffeeRun.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">Coffee Run</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Profit</div>
                                        <div class="product-profit">$5,000,000</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./images/Spring.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">Spring</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Profit</div>
                                        <div class="product-profit">$4,980,000</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./images/metahuman.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">MetaHuman</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Profit</div>
                                        <div class="product-profit">$4,880,000</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--END TOP PRODUCT -->
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <!-- CATEGORY CHART -->
                    <div class="box f-height">
                        <div class="box-body">
                            <div id="category-chart"></div>
                        </div>
                    </div>
                    <!-- END CATEGORY CHART -->
                </div>
                <div class="col-5 col-md-12 col-sm-12">
                    <!-- SALES GRAPH -->
                    <div class="box f-height">
                        <div class="box-header">
                            Sales Graph
                        </div>
                        <div class="box-body">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    <!-- END SALES GRAPH -->
                </div>
                <div class="col-12">
                    <!-- RECENT PROJECT -->
                    <div class="box">
                        <div class="box-header">
                            Recent Project
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <h2>No.</h2>
                                        </th>
                                        <th>
                                            <h2>Project Name</h2>
                                        </th>
                                        <th>
                                            <h2>Project Type</h2>
                                        </th>
                                        <th>
                                            <h2>Status</h2>
                                        </th>
                                        <th>
                                            <h2>Project Benefits</h2>
                                        </th>
                                        <th>
                                            <h2>Project Costs </h2>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>&emsp;01</h3>
                                        </td>
                                        <td>
                                            <div class="project-name">
                                                <a href="./model.php" target="_blank">
                                                    <h3>3D Models</h3>
                                                </a>

                                            </div>
                                        </td>
                                        <td>
                                            <h3>Character Modelings</h3>
                                        </td>
                                        <td>
                                            <span class="project-status project-completion">
                                                Complete
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-pending">
                                                <div class=""></div>
                                                <span>
                                                    <h3>&emsp; &emsp; $ 8,999,999</h3>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>$ 5000</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>&emsp;02</h3>
                                        </td>
                                        <td>
                                            <div class="project-name">
                                                <a href="./assets.php" target="_blank"> <span>
                                                        <h3>3D Assets</h3>
                                                    </span></a>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Assets</h3>
                                        </td>
                                        <td>
                                            <span class="project-status project-completion">
                                                Complete
                                            </span>
                                        </td>
                                        <td>
                                            <div class="profit-status project-cost">
                                                <div class=""></div>
                                                <span>
                                                    <h3>&emsp; &emsp; $ 1,000,000</h3>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>$ 1000</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>&emsp;03</h3>
                                        </td>
                                        <td>
                                            <div class="project-name">
                                                <a href="./animate.php" target="_blank"> <span>
                                                        <h3>Animation</h3>
                                                    </span> </a>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>2D/3D Animation</h3>
                                        </td>
                                        <td>
                                            <span class="project-status project-developing">
                                                Developing
                                            </span>
                                        </td>
                                        <td>
                                            <div class="profit-status project-cost">
                                                <div class=""></div>
                                                <span>
                                                    <h3>&emsp; &emsp; $ 3,000,000</h3>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>$ 4500</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>&emsp; 04</h3>
                                        </td>
                                        <td>
                                            <div class="project-name">
                                                <a href="./world.php" target="_blank"> <span>
                                                        <h3>Open World</h3>
                                                    </span> </a>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>3D World</h3>
                                        </td>
                                        <td>
                                            <span class="project-status project-developing">
                                                Developing
                                            </span>
                                        </td>
                                        <td>
                                            <div class="profit-status project-cost">
                                                <div class=""></div>
                                                <span>
                                                    <h3>&emsp; &emsp; $ 1,000,000</h3>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>$ 9000</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>&emsp;05</h3>
                                        </td>
                                        <td>
                                            <div class="project-name">
                                                <a href="./enivornment.php" target="_blank"> <span>
                                                        <h3>Enivornments</h3>
                                                    </span> </a>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>Types</h3>
                                        </td>
                                        <td>
                                            <span class="project-status project-completion">
                                                Complete
                                            </span>
                                        </td>
                                        <td>
                                            <div class="profit-status project-cost">
                                                <div class=""></div>
                                                <span>
                                                    <h3>&emsp; &emsp; $ 9,000,000</h3>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h3>$ 8000</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END RECENT PROJECT -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>

</body>

</html>