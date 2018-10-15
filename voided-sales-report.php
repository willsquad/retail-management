<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title rhs_title_subpage"><a class="rhs_title_link_main" href="customers.php">Reports</a> <i class="fas fa-chevron-right"></i> Basic Report</div>
        </div>
        <!-- Manager RHS: Top Bar -->

        <!-- Manager RHS: Content -->
        <div class="manager_rhs__content">
            <!-- New Section -->
            <h5 class="manager_rhs__content__title">Voided Sales</h5>
            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                
                <!-- Report Filter -->
                <?php include('include/report_filter.php'); ?>
                <!-- Report Filter -->

                <!-- No sales found -->
                <div class="no_sales_found">
                    <h3>No sales found</h3>
                </div>
                <!-- No sales found -->
            </div>
            <!-- RHS Content: Body -->          
        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>