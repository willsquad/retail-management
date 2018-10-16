<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title">Reports</div>
        </div>
        <!-- Manager RHS: Top Bar -->

        <!-- Manager RHS: Content -->
        <div class="manager_rhs__content">
            <div class="reporting_buttons_container">
                <button class="reporting_nav_button basic_report_button">Basic Reporting</button>
                <button class="reporting_nav_button advanced_report_button">Advanced Reporting</button>
            </div>      

            <h5 class="manager_rhs__content__title">Sales</h5>

            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                <!-- Icon container -->
                <div class="icon_container sales">
                    <!-- Icon container link-->
                    <a class="icon_a" href="new-sale.php">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="icon_text">
                            <span class="icon_name">Sales Report</span>
                        </div>
                    </a>  
                    <!-- Icon container link-->            
                    <!-- Icon container link-->
                    <a class="icon_a" href="new-sale.php">
                        <i class="fas fa-shopping-bag"></i>
                        <div class="icon_text">
                            <span class="icon_name">Unit Sales Report</span>
                        </div>
                    </a>  
                    <!-- Icon container link-->            
                </div>
                <!-- Icon container -->
            </div>
            <!-- RHS Content: Body -->       

        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>