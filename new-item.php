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
                <h5 class="manager_rhs__content__title new_item_heading">New Item</h5>
                <div class="top_buttons_container">
                    <button class="save_button">Save changes</button>
                    <button class="save_and_add_button hidden-sm-down">Save & Add New Item</button>
                </div>
            </div>
            

            <!-- RHS Content: Body -->
            <div class="manager_rhs__content__body">
                <div class="row new_item_section_container_row">
                    <div class="new_item_section col-12 col-md-12 col-xl-5">
                        <h4 class="new_item_section__heading">Name & Description</h4>        

                        <div class="input_container">
                            <p class="input_p">Item Name</p>
                            <input type="text" class="input_box_large">
                        </div>

                        <div class="input_container">
                            <p class="input_p input_p_textarea">Description</p>
                            <textarea class="input_box input_textarea"></textarea>
                        </div>

                    </div>

                    <!-- <div class="col-12 col-xl-1"></div> -->

                    <div class="new_item_section col-12 col-md-12 col-xl-5">
                        <h4 class="new_item_section__heading">Add Inventory</h4>      
                        
                        <div class="input_container">
                            <p class="input_p">Add Qty</p>
                            <input type="number" class="input_box_small">
                        </div>

                        <div class="input_container">
                            <p class="input_p">UPC ID</p>
                            <input type="text" class="input_box_large">
                        </div>
                        <div class="input_container">
                            <p class="input_p">EAC ID</p>
                            <input type="text" class="input_box_large">
                        </div>
                        <div class="input_container">
                            <p class="input_p">SKU ID</p>
                            <input type="text" class="input_box_large">
                        </div>
                    </div>

                    <div class="new_item_section col-12 col-md-12 col-xl-5">
                        <h4 class="new_item_section__heading">Pricing (USD)</h4>   
                        
                        <div class="input_container">
                            <p class="input_p">Purchase Price</p>
                            <input type="number" class="input_box_small">
                        </div>

                        <div class="input_container">
                            <p class="input_p">MSRP</p>
                            <input type="text" class="input_box_small">
                        </div>
                        <div class="input_container">
                            <p class="input_p">Sale Price</p>
                            <input type="text" class="input_box_small">
                        </div>
                    </div>

                    <!-- <div class="col-12 col-xl-1"></div> -->
                    
                    <div class="new_item_section col-12 col-md-12 col-xl-5">
                        <h4 class="new_item_section__heading">Additional Details</h4>    
                        
                        <div class="input_container">
                            <p class="input_p">Category</p>
                            <input type="text" class="input_box_large">
                        </div>
                        <div class="input_container">
                            <p class="input_p">Tax Class</p>
                            <input type="text" class="input_box_large">
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- RHS Content: Body -->
        </div>
        <!-- Manager RHS: Content -->
    </div>
    <!-- Manager RHS -->
<!-- END OF RHS -->

<?php include('include/footer.php');?>