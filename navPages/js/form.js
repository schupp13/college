const button = document.querySelector('.submitButton');
const agree = document.querySelector('#agree');
const disagree = document.querySelector('#disagree');
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");




$(agree).on('click', function(e) {
    if(e.currentTarget.value == 'agree' && $(password).val() == $(confirmPassword).val() && $(password).val() !='' && $(confirmPassword).val() !=''){
       $(button).slideDown(1000);
    }
    else{
      $(button).hide();
    };
});
$(disagree).on('click', function(e) {
    if(e.currentTarget.value == 'disagree'){
       $(button).hide();
    }

});



$(confirmPassword).keyup(function(e){
  $('input[name="agree"]').prop('checked', false);
  $(button).hide();
  if(e.currentTarget.value == $(password).val()){
    $(password).css("background-color", "lightgreen");
    $(password).css("border-color", "green");
    $(confirmPassword).css("background-color", "lightgreen");
    $(confirmPassword).css("border-color", "green");
    $('input[name="agree"]').prop('checked', false);


  }
  else{
    $(password).css("background-color", "pink");
    $(password).css("border-color", "red");
    $(confirmPassword).css("background-color", "pink");
    $(confirmPassword).css("border-color", "red");
    $('input[name="agree"]').prop('checked', false);
  }

});

$(password).keyup(function(e){
  $('input[name="agree"]').prop('checked', false);
  $(button).hide();
  if(e.currentTarget.value == $(confirmPassword).val()){
    $(password).css("background-color", "lightgreen");
    $(password).css("border-color", "green");
    $(confirmPassword).css("background-color", "lightgreen");
    $(confirmPassword).css("border-color", "green");
    $('input[name="agree"]').prop('checked', false);
  }
  else{
    $(password).css("background-color", "pink");
    $(password).css("border-color", "red");
    $(confirmPassword).css("background-color", "pink");
    $(confirmPassword).css("border-color", "red");
    $('input[name="agree"]').prop('checked', false);
  }

});
