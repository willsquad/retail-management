<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title rhs_title_subpage"><a class="rhs_title_link_main" href="customers.php">Customers</a> <i class="fas fa-chevron-right"></i> List</div>
        </div>
        <!-- Manager RHS: Top Bar -->

        <!-- Manager RHS: Content -->
        <div class="manager_rhs__content">
            <div class="main_heading_button_container">
                <h5 class="manager_rhs__content__title new_item_heading">Customer List</h5>
                <div class="top_buttons_container">
                    <button class="add_item_button">+ Add New Customer</button>
                </div>
            </div>
            

            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                <!-- Search Item -->
                <div class="search_items_container">
                    <input type="search" class="search_items find_items" placeholder="Find Customer">
                    <button class="find_item_button">Go</button>
                </div>
                <!-- Search Item -->

                <!-- Sales Table -->
                <table class="sales_table inventory_table">
                    <thead>
                        <tr class="sales_table_head">
                            <th>#</th>
                            <th>Contact no:</th>
                            <th>Name</th>
                            <th>Points</th> 
                            <th>Registered On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td>1</td>
                            <td>532-564-5658</td> 
                            <td class="inventory_product_name">
                                John Doe
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            
                            <td>155</td>
                            <td>July 1, 2018</td>
                        </tr>
                        <tr class="sales_table_row">
                            <td>2</td>
                            <td>532-568-5487</td> 
                            <td class="inventory_product_name">
                                Jane Doe
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            
                            <td>110</td>
                            <td>Aug 10, 2018</td>
                        </tr>
                        <tr class="sales_table_row">
                            <td>3</td>
                            <td>532-515-5490</td> 
                            <td class="inventory_product_name">
                                Mark Doe
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            
                            <td>80</td>
                            <td>Sept 20, 2018</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Sales Table -->

            </div>
            <!-- RHS Content: Body -->
        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>