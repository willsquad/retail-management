$(document).ready(function() {
   $('.search_items_advanced_button').on('click', function(){
       var self = $(this);
       $('.search_advanced_inputs_container').toggleClass('active');
        self.find('svg').toggleClass('fa-chevron-down fa-chevron-up')
   });
});