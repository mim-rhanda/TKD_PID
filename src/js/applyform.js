$(document).ready(function() {
    $('#agreecheck').click(function() {
        var r =$("#agreecheck").is(":checked");
        if(r) {
            $("#btn_continue").attr('disabled', false);
        }else{
            $("#btn_continue").attr('disabled', true);
        }
    })

    $('#mailcheck').click(function() {
        var m =$("#mailcheck").is(":checked");
        if(m) {
            $("#email2").attr('disabled', true);
            $("#confirm-email2").attr('disabled', true);
        }else{
            $("#email2").attr('disabled', false);
            $("#confirm-email2").attr('disabled', false);
        }
    })

    $('#btn_continue').click(function() {
        var email = $("#email").val();
        var confirm_email = $("#confirm_email").val();
        if(email != confirm_email){
            alert("Confirm Email does not match!");
            return false; 
         } else {
           return true; 
        }
    })
})
    