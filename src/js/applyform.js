$(document).ready(function() {
    // console.log("code are");
    // console.log(codes);
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
        var m =$("#mailcheck1").is(":checked");
        if(m) {
            $("#email1").attr('disabled', true);
            $("#confirm_email1").attr('disabled', true);
        }else{
            $("#email1").attr('disabled', false);
            $("#confirm_email1").attr('disabled', false);
        }
    })
    
    $.validator.addMethod('institution_code', function(value, element, codes) {
        // お決まりの定型文
        // 検証対象の要素にこのルールが設定されているか
        if ( this.optional( element ) ) {
            return true;
        }

        if (!(codes.includes(value))){
            return false;
        }
        return true;
    }, );


    $.validator.addMethod('institution_code1', function(value, element, codes) {
        // お決まりの定型文
        // 検証対象の要素にこのルールが設定されているか
        if ( this.optional( element ) ) {
            return true;
        }

        if (!(codes.includes(value))){
            return false;
        }
        return true;
    }, );


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
            minlength: 4,
            maxlength: 4,
            institution_code: codes
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
              minlength: 'Code should be 4 digit number',
              maxlength: 'Code should be 4 digit number.',
              institution_code: "※承認コードが間違っています",
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
            //   equalTo: "#parent_email"
          },
          email: {
              required: true,
              email: true
          },
          confirm_email: {
              required: true,
            //   equalTo: "#email"
          },
          medical_institution_code: {
            required: true,
            minlength: 4,
            maxlength: 4,
            institution_code1: codes
          },
        },
        messages: {
            parent_email: {
            required: 'Please enter Email Address.',
            email: 'Please enter a valid Email Address.',
          },
          confirm_parent_email: {
              required: 'Please enter Confirm Email Address.',
            //   equalTo: 'Confirm Email do not match with Email......',
          },
          email: {
              required: 'Please enter Email Address.',
              email: 'Please enter a valid Email Address.',
          },
          confirm_email: {
              required: 'Please enter Confirm Email Address.',
            //   equalTo: 'Confirm Email do not match with Email......',
          },
          medical_institution_code: {
            required: 'Please enter Medical Institution Code.',
            minlength: 'Code should be 4 digit number',
            maxlength: 'Code should be 4 digit number.',
            institution_code1: "※承認コードが間違っています",
        },
        },
        submitHandler: function (form) {
          form.submit();
        }
      });  
})
    