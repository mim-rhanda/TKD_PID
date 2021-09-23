$(document).ready(function() {
     var inputid = $('input[type=checkbox]');
     $('input[type=checkbox]').click(function() {
         var j= [];
         for(var i=1; i<=inputid.length; i++){
            if ($('#agreecheck'+i).prop('checked')) { 
                 j.push(1) ;
                 console.log('#agreecheck'+i);
             }else{
                 j.push(0) ;
             }
         }
         if( j.includes(0)){
            $("#btn_continue").attr('disabled', true);

         }else{
            $("#btn_continue").attr('disabled', false);
         }
    })

    $('#btn_close').click(function() {
        var result = window.confirm("windowを閉じます。\nよろしいですか？");
        if(result){
            // window.open('about:blank','_self').close();
            window.close();
        }
    })
})