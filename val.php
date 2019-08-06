es_subscription_form es_shortcode_form
es_subscription_form es_shortcode_form

$(document).ready(function(){

  jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");


$("es_shortcode_form").validate({
   rules: {
      name: {
          noSpace: true
      }
   }
  });


})
jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 



$(".es_subscription_form").validate({
    rules: {


        name: {
            required: true
            
            
        }

    },
    messages: {

       name: {
            
            minlength: "Your username must consist of at least 2 characters"
        }
}});




$(document).ready(function(){

  jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");


$("commentForm").validate({
   rules: {
      name: {
          noSpace: true
      }
   }
  });


})




$("es_subscription_form es_shortcode_form").validate({
  rules: {
    name: { lettersonly: true }
  }
});





$(document).ready(function () {
        $(".es_subscription_form es_shortcode_form").validate();
        $("name").each(function (item) {
            $(this).rules("add", {
                required: false,
                number:true
            });
        });
    });




    $('form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#log').val());

    // Check if empty of not
    if (name  === '') {
        alert('Text-field is empty.');
        return false;
    }
});
