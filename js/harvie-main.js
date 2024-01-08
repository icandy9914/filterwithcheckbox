window.addEventListener("load", function(event) {
    /* 
      - Code to execute when only the HTML document is loaded.
      - This doesn't wait for stylesheets, 
        images, and subframes to finish loading. 
    */
        setTimeout(function(){ 
        document.getElementById("preloader").style.display = "none";
        },1000);
});

jQuery(document).ready(function(){

  'use strict';

  var $filters = $('ul.filter_tag li input[type=checkbox]');
  var $boxes = $('ul.products_lists_new li[data-filter]');

  $filters.change(function(e) {
    e.preventDefault();
    var curr = jQuery(this);
    var curr_li_value= curr.parent().attr('data-term-slug');
    var countCheckedCheckboxes = $filters.filter(':checked').length;
    if(countCheckedCheckboxes>0) {
      if( curr.prop('checked') && (curr_li_value=='soups' || curr_li_value=='sauces' || curr_li_value=='toppings'))
      {
        $("ul.products_lists_new li").each(function(){
          if(!$(this).hasClass("visible")){
            $(this).removeClass('is-animated')
          .fadeOut().promise().done(function() {
              $(this).filter('[data-filter = "' + curr_li_value + '"]').addClass('is-animated visible').fadeIn();
            });
          }
        });
      }
      else if( curr.prop('checked')==false && (curr_li_value=='soups' || curr_li_value=='sauces' || curr_li_value=='toppings'))
      {
        $("ul.products_lists_new li").each(function(){
          if ($(this).is("[data-filter~='"+curr_li_value+"']")) {
            $(this).removeClass('is-animated visible').fadeOut();
          }
        });
      }
    }
    else
    {
      $boxes.removeClass('is-animated visible')
        .fadeOut().promise().done(function() {
          $boxes.addClass('is-animated').fadeIn();
        });
    }

  });


});