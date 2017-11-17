$(document).ready(function()
{    
 $("#uname").keyup(function()
 {  
  var name = $(this).val(); 
  
  if(name.length > 3)
  {  
   $("#result").html('<small class="saving text-primary">checking<span>.</span><span>.</span><span>.</span></small>'); //loading
   
   $.ajax({
    
    type : 'POST',
    url  :  base_url+'users/check',
    data : $(this).serialize(),
    success : function(data)
        {
        	 if (data == 0) {
              	$("#result").html("<small style='color:brown;'>Sorry username already taken!</small>");

              	$("#check").addClass("has-error has-feedback");

              	$("#check").removeClass("has-success has-feedback");
              	$("#status").removeClass("glyphicon glyphicon-ok form-control-feedback");

              	$("#status").addClass("glyphicon glyphicon-remove form-control-feedback");

          	 } else {
          	 	$("#result").html("<small style='color:#337ab7;'>available!</small>");

              	$("#check").addClass("has-success has-feedback");

              	$("#check").removeClass("has-error has-feedback");
              	$("#status").removeClass("glyphicon glyphicon-remove form-control-feedback");

              	$("#status").addClass("glyphicon glyphicon-ok form-control-feedback");

          	 }
        }
    });
    return false;
   
  }
  else
  {
   $("#result").html('');

   $("#check").removeClass("has-error");
   $("#status").removeClass("glyphicon glyphicon-remove form-control-feedback");

   $("#check").removeClass("has-success has-feedback");
   $("#status").removeClass("glyphicon glyphicon-ok form-control-feedback");
  }
 });


 // cek-email

$("#email").keyup(function()
 {  
  var email = $(this).val(); 
  
  if(email.length > 3)
  {
   $("#email-result").html('<small class="saving text-primary">checking<span>.</span><span>.</span><span>.</span></small>'); //loading
   
   $.ajax({
    
    type : 'POST',
    url  :  base_url+'users/mailcheck',
    data : $(this).serialize(),
    success : function(data)
        {
           if (data == 0) {
                $("#email-result").html("<small style='color:brown;'>This email already registered!</small>");

                $("#check-email").addClass("has-error has-feedback");

                $("#check-email").removeClass("has-success has-feedback");
                $("#email-status").removeClass("glyphicon glyphicon-ok form-control-feedback");

                $("#email-status").addClass("glyphicon glyphicon-remove form-control-feedback");

             } else {
              $("#email-result").html("<small style='color:#337ab7;'>available!</small>");

                $("#check-email").addClass("has-success has-feedback");

                $("#check-email").removeClass("has-error has-feedback");
                $("#email-status").removeClass("glyphicon glyphicon-remove form-control-feedback");

                $("#email-status").addClass("glyphicon glyphicon-ok form-control-feedback");

             }
        }
    });
    return false;
   
  }
  else
  {
   $("#email-result").html('');

   $("#check-email").removeClass("has-error");
   $("#email-status").removeClass("glyphicon glyphicon-remove form-control-feedback");

   $("#check-email").removeClass("has-success has-feedback");
   $("#email-status").removeClass("glyphicon glyphicon-ok form-control-feedback");
  }
 });

});

$('#email').blur(function() {
    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (testEmail.test(this.value)) {
      $("#check-email").addClass("has-success has-feedback");

      $("#check-email").removeClass("has-error has-feedback");
      $("#email-result").html("");
      
      $("#email-status").removeClass("glyphicon glyphicon-remove form-control-feedback");
      $("#email-status").addClass("glyphicon glyphicon-ok form-control-feedback");

    } else if (this.value == '') {
      $("#email-result").html("");
    } 

    else {

      $("#email-result").html("<small style='color:brown;'>This email isn't an valid format!</small>");

      $("#check-email").addClass("has-error has-feedback");
      $("#email-status").addClass("glyphicon glyphicon-remove form-control-feedback");

    }

});


// $('#test').blur(function() {
//     var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
//     if (testEmail.test(this.value)) {
//       $("#ckmail").addClass("has-success has-feedback");

//       $("#ckmail").removeClass("has-error has-feedback");
//       $("#cresult").html("");
      
//       $("#cstatus").removeClass("glyphicon glyphicon-remove form-control-feedback");
//       $("#cstatus").addClass("glyphicon glyphicon-ok form-control-feedback");

//     } else {

//       $("#cresult").html("<small style='color:brown;'>This email isn't an valid format!</small>");

//       $("#ckmail").addClass("has-error has-feedback");
//       $("#cstatus").addClass("glyphicon glyphicon-remove form-control-feedback");

//     }

// });