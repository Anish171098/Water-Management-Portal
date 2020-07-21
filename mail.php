<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    $errorEmpty = false;
    $errorEmail = false;

    $host="localhost";
     $dbusername="root";
     $dbpassword="";
     $dbname="ajax";
     $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

        $name=mysqli_real_escape_string($conn,$_POST['name']);
$check=mysqli_query($conn,"SELECT name from table2 WHERE name='$name'");
$check_num_rows=mysqli_num_rows($check);

if($name==NULL)
{
    echo "Choose a name";
}
else if (strlen($name)<=3)
{
    echo "Too short name";
}
else
{
if($check_num_rows==0)
    echo "Available!";
else if($check_num_rows==1)
    echo "Not Available!";
}
   
  
       # code...
   if($check_num_rows==0){


   $sql = "INSERT INTO table2 (name,email,password,phonenumber) VALUES ('$name','$email','$password','$phonenumber')";
   if($conn->query($sql)===true){
          echo "data entered sucessfully";}
          else
          {
            echo "error";
          }
}
      
       










$conn->close();
}


?>



<script> 
$("#mail-name, #mail-email, #mail-phonenumber, #mail-password").removeClass("input-error")


 var errorEmpty = "<?php echo $errorEmpty;?>";
 var errorEmail = "<?php echo $errorEmail;?>";

if(errorEmpty == true){
    $("#mail-name, #mail-email, #mail-phonenumber").addClass("input-error");
}
if(errorEmail == true){
    $(" #mail-email").addClass("input-error");
}
if(errorEmpty == false && errorEmail==false){
    $("#mail-name, #mail-email, #mail-phonenumber").val("") ;
}

</script>