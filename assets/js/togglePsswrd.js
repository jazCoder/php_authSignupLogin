<script type="text/javascript">
 
 function togglePassword(el){
 	
 	
  if(checked){
   // Changing type attribute
   document.getElementById("usrPsswrd1").type = 'text';

   // Change the Text
   document.getElementById("toggleText").textContent= "Hide";
  }else{
   // Changing type attribute
   document.getElementById("usrPsswrd1").type = 'password';

   // Change the Text
   document.getElementById("toggleText").textContent= "Show";
  }
 
 
 }
