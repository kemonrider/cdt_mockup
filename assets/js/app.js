// toggle element on select change
var toggleElement = function(){
  $('select[data-toggle-action]').each(function(){
    $(this).change(function(){
      var selectVal = $(this).val();
      var elSelect = $(this).attr('data-toggle-action');
      $('[data-toggle-child="'+elSelect+'"]').each(function(){
        if($(this).attr('data-toggle-key') == selectVal){
          $(this).show();
        }else{
          $(this).hide();
        }
      });
    });
  });
};


// on document ready
$(document).ready(function(){
  toggleElement();
});