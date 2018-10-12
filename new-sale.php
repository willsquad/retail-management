<?php include('include/header.php');?>

<!-- START OF RHS  -->
    <!-- Manager RHS -->
    <div class=" manager_rhs new_sale_manager_rhs animated fadeIn">
        <!-- Manager RHS: Top Bar -->
        <div class="manager_rhs__top_bar">
            <div class="rhs_menu_icon"><i class="fas fa-bars"></i></div>
            <div class="rhs_title rhs_title_subpage"><a class="rhs_title_link_main" href="sales.php">Sales</a> <i class="fas fa-chevron-right"></i> New Sale</div>
        </div>
        <!-- Manager RHS: Top Bar -->

        <!-- Manager RHS: Content -->
        <div class="manager_rhs__content">
            <h5 class="manager_rhs__content__title">New Sale</span></h5>

            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                <!-- Search Item -->
                <div class="search_items_container">
                    <input type="search" class="search_items" placeholder="Find items">
                    <button class="search_item_button">Search</button>
                    <button class="add_item_button">New</button>
                </div>
                <!-- Search Item -->

                <!-- Sales Table -->
                <table class="sales_table">
                    <thead>
                        <tr class="sales_table_head">
                            <th>Description</th>
                            <th>Price</th> 
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sales_table_row">
                            <td class="product_name">Product name
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            <td>$30.00</td> 
                            <td>1</td>
                            <td>$30.00</td>
                        </tr>
                        <tr class="sales_table_row">
                            <td class="product_name">Product name 2
                                <div class="edit_remove"><a href="#">Edit</a> <a href="#">Remove</a></div>
                            </td>
                            <td>$50.00</td> 
                            <td>1</td>
                            <td>$50.00</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Sales Table -->
            </div>
            <!-- RHS Content: Body -->
        </div>
        <!-- Manager RHS: Content -->

        <!-- New Sale RHS sidebar -->
        <div class="new_sale_rhs hidden-lg-down">
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Subtotal</span>
                <span class="new_sale_amount">$30.00</span>
            </div>
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Discounts</span>
                <span class="new_sale_amount">$0.00</span>
            </div>
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Taxes</span>
                <span class="new_sale_amount">$2.50</span>
            </div>

            <div class="new_sale_text_amount_div total_amount_div">
                <span class="new_sale_text">Total</span>
                <span class="new_sale_amount">$32.50</span>
            </div>

            <div class="new_sale_payment_div">
                <button class="payment_button">Payment</button>
                <button class="payment_cancel_button">cancel</button>
            </div>
        </div>
        <!-- New Sale RHS sidebar -->

        <!-- New Sale RHS sidebar -->
        <div class="new_sale_rhs_mobile hidden-xl-up">
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Subtotal</span>
                <span class="new_sale_amount">$30.00</span>
            </div>
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Discounts</span>
                <span class="new_sale_amount">$0.00</span>
            </div>
            <div class="new_sale_text_amount_div">
                <span class="new_sale_text">Taxes</span>
                <span class="new_sale_amount">$2.50</span>
            </div>

            <div class="new_sale_text_amount_div total_amount_div">
                <span class="new_sale_text">Total</span>
                <span class="new_sale_amount">$32.50</span>
            </div>

            <div class="new_sale_payment_div">
                <button class="payment_button">Payment</button>
                <button class="payment_cancel_button">cancel</button>
            </div>
        </div>
        <!-- New Sale RHS sidebar -->

    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>