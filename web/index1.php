<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        $("form").submit(function() {
        	$('#feedback').load('mail.php').show();

        	$('#mail-name').keyup(function)(){
        		$.post('mail.php',{name:form.name.value}, function(result){
        			$('#feedback').html(result).show();
        		});
        	});
    }); 
    
    </script>


</head>
<body>
    <form name="form" action="mail.php" method="post"> 
     
    <input  id="mail-name" type="text" name="name" placeholder = "Full name">
    <input  id="mail-email" type="text" name="email"  placeholder = "E-mail">
    <input  id="mail-password" type="password" name="password"  placeholder = "password">
    
    <br>
    <input  id="mail-phonenumber" name="phonenumber" placeholder = "phone number">
    <br>
    <button id="mail-submit" type="submit"  name="submit" > Submit</button>
    <p class="form-message"></p>
    
    </form>
    <div id="feedback"></div>
</body>
</html>