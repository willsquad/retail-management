<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title rhs_title_subpage"><a class="rhs_title_link_main" href="inventory.php">Inventory</a> <i class="fas fa-chevron-right"></i> List</div>
        </div>
        <!-- Manager RHS: Top Bar -->

        <!-- Manager RHS: Content -->
        <div class="manager_rhs__content">
            <div class="main_heading_button_container">
                <h5 class="manager_rhs__content__title new_item_heading">List</h5>
                <div class="top_buttons_container">
                    <button class="add_item_button">+ Add New Item</button>
                </div>
            </div>
            

            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                <!-- Search Item -->
                <div class="search_items_container">
                    <input type="search" class="search_items find_items" placeholder="Find items">
                    <button class="find_item_button">Go</button>
                </div>
                <!-- Search Item -->

                <!-- Inventory Table -->
                <table class="sales_table inventory_table">
                    <thead>
                        <tr class="sales_table_head">
                            <th>#</th>
                            <th>Qty</th>
                            <th>Product Name</th>
                            <th>MSRP</th> 
                            <th>Purchase Price</th>
                            <th>Sale Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td>49</td> 
                            <td class="inventory_product_name">
                                Product name 1
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            <td>$50.00</td> 
                            <td>$30.00</td>
                            <td>$40.00</td>
                        </tr>
                        <tr class="sales_table_row">
                            <td>2</td>
                            <td>15</td> 
                            <td class="inventory_product_name">
                                Product name 2
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            <td>$20.00</td> 
                            <td>$10.00</td>
                            <td>$15.00</td>
                        </tr>
                        <tr class="sales_table_row">
                            <td>3</td>
                            <td>25</td> 
                            <td class="inventory_product_name">
                                Product name 3
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            <td>$50.00</td> 
                            <td>$30.00</td>
                            <td>$40.00</td>
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