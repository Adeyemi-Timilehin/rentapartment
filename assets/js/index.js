$(document).ready(function () {
    $("#basic-addon1").click(function(){
       
       var search=$("#search").val();
       if(search==''){
        $("#s").addClass("search");
        $("#s").htm('');
       }
       else{
        $.ajax({
            type:"POST",
            url:"searchprocess.php",
            data:{
                 name:search
            },success:function(data){
             //    alert(data);
             $("#searchdetail").html(data);
             $("#s").removeClass("search");
             $("#ps").addClass("parentsearch");
             $("#s").addClass("searchadd");
            }
        })
       }
       $("#togglePassword").click(function(){
        $(this).toggleClass("fa-eye fa-eye-slash");
           var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
            $("#password").attr("type", type);

   })

     
    //    alert(search);

    })
    
            // $("#btn").click(function(){
            //     alert("hi");
            // })
    $.ajax({url: "moreprocess.php", success: function(data){$("#output").html(data);}});
    $.ajax({url: "detailproperty.php", success: function(data){$("#detail").html(data);}});
        // $("#showData").click(function(){
        //     var user=$("#table-container");
    
        //     var data={"userInput":user}
        //     $.ajax({    
        //       type: "POST",
        //       url: "moreprocess.php",             
        //       dataType: "html",                  
        //       success: function(data){                    
        //           $("#table-container").html(data); 
                 
        //       }
        //   });
        // })
          
     
    
    $('#agree').click(function () {
        discideBtnAction();
    })
    
$("#add").click(function(){
    $(".add").show();
    $(".manage").hide();
    $(".remove").show();
})
$("#manage").click(function(){
    $(".add").show();
    $(".manage").show();
    $(".remove").hide()
})
})
    
function discideBtnAction() {
    if ($('#agree').prop('checked')) {
        $('#btn').removeAttr('disabled');
    } else {
        $('#btn').attr('disabled', true);
    }
}