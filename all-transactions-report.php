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
            <h5 class="manager_rhs__content__title">All Transactions</h5>
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
                            <th>ID</th>
                            <th>Completed</th>
                            <th>Cancelled</th>
                            <th>Voided</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Register</th>
                            <th>Employee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td><a href="#">15</a></td>
                            <td>Yes</td> 
                            <td>No</td> 
                            <td>No</td> 
                            <td>$1461.38</td> 
                            <td>15/10/2018</td> 
                            <td>Register 1</td> 
                            <td>John Doe</td> 
                        </tr>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td><a href="#">16</a></td>
                            <td>Yes</td> 
                            <td>No</td> 
                            <td>No</td> 
                            <td>$324.75</td> 
                            <td>14/10/2018</td> 
                            <td>Register 2</td> 
                            <td>Jane Doe</td>
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