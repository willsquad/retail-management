<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title">Inventory</div>
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

                <!-- Sales Table -->
                <table class="sales_table inventory_table">
                    <tr class="sales_table_head">
                        <th>Qty</th>
                        <th>Product Name</th>
                        <th>Price</th> 
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                    </tr>
                    <tr class="sales_table_row">
                        <td>49</td> 
                        <td class="inventory_product_name">Product name</td>
                        <td>$30.00</td> 
                        <td>1</td>
                        <td>$30.00</td>
                    </tr>
                    <tr class="sales_table_row">
                        <td></td> 
                        <td class="inventory_product_name"></td>
                        <td></td> 
                        <td></td>
                        <td></td>
                    </tr>
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