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
                    <div id="reports_bar_chart_container" class="col-12 col-xl-9 advanced_dashboard__large">

                    </div>
                    <div class="col-12 col-xl-3 advanced_dashboard__small">
                        <div class="row">
                            <div class="sales_info_div col-12 col-sm-6 col-xl-12">
                                <h5 class="info_title">Total Sales</h5>
                                <h6 class="info_value">$ 2,400</h6>
                            </div>
                            <div class="sales_info_div col-12 col-sm-6 col-xl-12">
                                <h5 class="info_title">No: of Sales</h5>
                                <h6 class="info_value">5</h6>
                            </div>
                            <div class="sales_info_div col-12 col-sm-6 col-xl-12">
                                <h5 class="info_title">Avg. Sale</h5>
                                <h6 class="info_value">$ 504</h6>
                            </div>
                        </div>     
                        <!-- advanced_dashboard__small row --> 
                    </div>
                    <!-- advanced_dashboard__small -->
                </div>
                <!-- advanced_dashboard -->

                <!-- advanced_dashboard -->
                <div class="row advanced_dashboard">
                    <div class="col-12 advanced_dashboard__small">
                        <div class="row">
                            <div class="sales_info_div col-12 col-sm-6 col-lg-6 col-xl-3">
                                <h5 class="info_title">Change</h5>
                                <h6 class="info_value profit"><i class="fas fa-arrow-up"></i> 100%</h6>
                            </div>
                            <div class="sales_info_div col-12 col-sm-6 col-lg-6 col-xl-3">
                                <h5 class="info_title">Total Profit</h5>
                                <h6 class="info_value">$ 720.00</h6>
                            </div>
                            <div class="sales_info_div col-12 col-sm-6 col-lg-6 col-xl-3">
                                <h5 class="info_title">Profit Margin</h5>
                                <h6 class="info_value">28.57%</h6>
                            </div>
                            <div class="sales_info_div col-12 col-sm-6 col-lg-6 col-xl-3">
                                <h5 class="info_title">Largest Sale</h5>
                                <h6 class="info_value">$ 1,350.00</h6>
                            </div>
                        </div>     
                        <!-- advanced_dashboard__small row --> 
                    </div>
                    <!-- advanced_dashboard__small -->
                </div>
                <!-- advanced_dashboard -->


                <!-- advanced_dashboard -->
                <div class="row advanced_dashboard">
                    <div id="reports_line_chart_container" class="col-12">
                        
                    </div>
                    <!-- advanced_dashboard__small -->
                </div>
                <!-- advanced_dashboard -->



            </div>

        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>