jQuery(document).ready(function($) {

function displayPostalDesign() {
  var choice = $('.gfield_radio li');
  
  $.each(choice, function() {
    var src = $(this).find('input').attr('value');
    $(this).find('label').html('<img src="' + src + '">');
  });
}

displayPostalDesign();

	
});