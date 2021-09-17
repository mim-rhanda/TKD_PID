$(document).ready(function() {
    console.log(codes);
    $('#agreecheck').click(function() {
        var r =$("#agreecheck").is(":checked");
        if(r) {
            $("#btn_continue").attr('disabled', false);
        }else{
            $("#btn_continue").attr('disabled', true);
        }
    })

    $('#agreecheck1').click(function() {
        var r =$("#agreecheck1").is(":checked");
        alert("check 1111");
        if(r) {
            $("#btn_continue1").attr('disabled', false);
        }else{
            $("#btn_continue1").attr('disabled', true);
        }
    })

    $('#mailcheck').click(function() {
        var m =$("#mailcheck").is(":checked");
        if(m) {
            $("#email").attr('disabled', true);
            $("#confirm_email").attr('disabled', true);
        }else{
            $("#email").attr('disabled', false);
            $("#confirm_email").attr('disabled', false);
        }
    })

    $('#mailcheck1').click(function() {
        var m =$("#mailcheck").is(":checked");
        if(m) {
            $("#email").attr('disabled', true);
            $("#confirm_email").attr('disabled', true);
        }else{
            $("#email").attr('disabled', false);
            $("#confirm_email").attr('disabled', false);
        }
    })
    
    $('#apply_form').validate({
        rules: {
          parent_email: {
            required: true,
            email: true
          },
          confirm_parent_email: {
              required: true,
              equalTo: "#parent_email"
          },
          email: {
              required: true,
              email: true
          },
          confirm_email: {
              required: true,
              equalTo: "#email"
          },
          medical_institution_code: {
            required: true,
            maxlength: 4,
          },
        },
        messages: {
            parent_email: {
            required: 'Please enter Email Address.',
            email: 'Please enter a valid Email Address.',
          },
          confirm_parent_email: {
              required: 'Please enter Confirm Email Address.',
              equalTo: 'Confirm Email do not match with Email......',
          },
          email: {
              required: 'Please enter Email Address.',
              email: 'Please enter a valid Email Address.',
          },
          confirm_email: {
              required: 'Please enter Confirm Email Address.',
              equalTo: 'Confirm Email do not match with Email......',
          },
          medical_institution_code: {
              required: 'Please enter Medical Institution Code.',
              maxlength: 'Code should be 4 digit number.',
          },
        },
        submitHandler: function (form) {
          form.submit();
        }
      });  

          
    $('#apply_form1').validate({
        rules: {
          parent_email: {
            required: true,
            email: true
          },
          confirm_parent_email: {
              required: true,
              equalTo: "#parent_email"
          },
          email: {
              required: true,
              email: true
          },
          confirm_email: {
              required: true,
              equalTo: "#email"
          },
          medical_institution_code: {
            required: true,
            maxlength: 4
          },
        },
        messages: {
            parent_email: {
            required: 'Please enter Email Address.',
            email: 'Please enter a valid Email Address.',
          },
          confirm_parent_email: {
              required: 'Please enter Confirm Email Address.',
              equalTo: 'Confirm Email do not match with Email......',
          },
          email: {
              required: 'Please enter Email Address.',
              email: 'Please enter a valid Email Address.',
          },
          confirm_email: {
              required: 'Please enter Confirm Email Address.',
              equalTo: 'Confirm Email do not match with Email......',
          },
          medical_institution_code: {
              required: 'Please enter Medical Institution Code.',
              maxlength: 'Code should be 4 digit number.',
          },
        },
        submitHandler: function (form) {
          form.submit();
        }
      });  
})
    