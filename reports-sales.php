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
            <h5 class="manager_rhs__content__title">Sales Report</h5>
            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                 <!-- Search Item -->
                <div class="search_items_container">
                    <input type="search" class="search_items search_report_date" placeholder="Search By Date">
                    <input type="search" class="search_items" placeholder="Search By ID">
                    <button class="search_item_button">Search</button>
                </div>
                <!-- Search Item -->

                <!-- Inventory Table -->
                <table class="sales_table inventory_table">
                    <thead>
                        <tr class="sales_table_head">
                            <th>#</th>
                            <th>Product ID</th>
                            <th>Subtotal</th>
                            <th>Discounts</th>
                            <th>Total Tax</th> 
                            <th>Total</th> 
                            <th>Cost</th> 
                            <th>Profit</th> 
                            <th>Margin</th> 
                            <th>Date</th>
                            <th>Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td>5</td>
                            <td>$1500</td> 
                            <td>$150</td> 
                            <td>$111.38</td> 
                            <td>$1461.38</td> 
                            <td>$1500</td> 
                            <td>$-150</td> 
                            <td>-11.11%</td> 
                            <td>10/12/2018</td> 
                            <td>-</td> 
                        </tr>
                        <tr class="sales_table_row">
                            <td>2</td>
                            <td>15</td>
                            <td>$300</td> 
                            <td>$0</td> 
                            <td>$24.75</td> 
                            <td>$324.75</td> 
                            <td>$300</td> 
                            <td>$0.00</td> 
                            <td>0%</td> 
                            <td>10/11/2018</td> 
                            <td>-</td> 
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