<script>
 function validateForm()
 {
  var name=document.getElementbyId("name").value;
  var password=document.myForm.password.value;
  if(name=='NULL'||name==' ')
  {
   var msg="Enter your name";
   document.getElementbyId("err_name").innerHTML=msg;
  }
  else if(password.length<6)
  { 
   alert("Invalid password");
  }
 }
</script>