$(document).ready(function(){
$("#submit").click(function(){
   var name=$("#name1").val();
   var email1=$("#email1").val();
   var pwd=$("#pwd").val();
   var cnt1=$("#cnt").val();
  
   var datastring ='name1='+name+'&email1='+email1+'&pwd1='+pwd+'&cnt1='+cnt1;
   if(name==""||email1==""||pwd==""||cnt1=="")
   {
       alert("please  fill all the fields");
   }
   else{
       $.ajax({
        type:"POST",
        url:"submitdata.php",
        data:datastring,
        cache:false,
        success:function(result)
        {
            $("#content").html(result);
        }
       });
   }
   return false;
});
});
