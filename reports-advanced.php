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
                <a href="reports.php" class="reporting_nav_button basic_report_button">Basic Reporting</a>
                <a href="reports-advanced.php" class="reporting_nav_button advanced_report_button active">Advanced Reporting</a>
            </div>      

            <div class="max_width">
                <div class="advanced_nav_buttons">
                    <div class="advanced_nav_buttons__container">
                        <button>Today</button>
                        <button>Yesterday</button>
                        <button>Week</button>
                        <button>Month</button>
                        <button>Year</button>
                        <button>Custom</button>
                    </div>
                </div>

                <div class="row advanced_dashboard">
                    <div class="col-12 col-lg-8 col-xl-9 advanced_dashboard__large">
                        <canvas id="reports_bar_chart"></canvas>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-3 advanced_dashboard__small">
                        <div class="sales_info_div">
                            <h5 class="info_title">Total Sales</h5>
                            <h6 class="info_value">$ 2,400</h6>
                        </div>
                        <div class="sales_info_div">
                            <h5 class="info_title">No: of Sales</h5>
                            <h6 class="info_value">5</h6>
                        </div>
                        <div class="sales_info_div">
                            <h5 class="info_title">Avg. Sale</h5>
                            <h6 class="info_value">$ 504</h6>
                        </div>
                        <div class="sales_info_div">
                            <h5 class="info_title">Change</h5>
                            <h6 class="info_value profit"><i class="fas fa-arrow-up"></i> 100%</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>