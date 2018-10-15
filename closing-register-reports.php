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
            <h5 class="manager_rhs__content__title">Closing Register</h5>
            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                
                <!-- Report Filter -->
                <?php include('include/report_filter.php'); ?>
                <!-- Report Filter -->

                <!-- Inventory Table -->
                <table class="sales_table inventory_table">
                    <thead>
                        <tr class="sales_table_head">
                            <th>#</th>
                            <th>Register</th>
                            <th>Payment Type</th>
                            <th>Closed At</th>
                            <th>Payments</th>
                            <th>Adds/Payouts</th>
                            <th>Total</th>
                            <th>Counted</th>
                            <th>Diff</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td>Register 1</td>
                            <td>Cash</td> 
                            <td>15/10/2018 4:00PM</td> 
                            <td>$292.28</td> 
                            <td>$0.00</td> 
                            <td>$292.28</td> 
                            <td>$293.00</td> 
                            <td>$0.72</td> 
                        </tr>
                        <tr class="sales_table_row">
                            <td>2</td>
                            <td>Register 1</td>
                            <td>Credit Card</td> 
                            <td>15/10/2018 4:00PM</td> 
                            <td>$974.25</td> 
                            <td>$0.00</td> 
                            <td>$974.25</td> 
                            <td>$974.25</td> 
                            <td>$0.00</td> 
                        </tr>
                    </tbody>
                </table>
                <!-- Inventory Table -->
            </div>
            <!-- RHS Content: Body -->          
        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>