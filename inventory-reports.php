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
            <h5 class="manager_rhs__content__title">Inventory Report</h5>
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
                            <th>Item</th>
                            <th>Remaining</th>
                            <th>Total Cost</th>
                            <th>Avg Cost</th>
                            <th>Sale Price</th>
                            <th>Margin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td>Core i5 Laptop</td>
                            <td>19</td> 
                            <td>$5700.00</td> 
                            <td>$300.00</td> 
                            <td>$300.00</td> 
                            <td>0%</td> 
                        </tr>
                        <tr class="sales_table_row">
                            <td>2</td>
                            <td>Core i7 Laptop</td>
                            <td>13</td> 
                            <td>$5200.00</td> 
                            <td>$400.00</td> 
                            <td>$400.00</td> 
                            <td>0%</td> 
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