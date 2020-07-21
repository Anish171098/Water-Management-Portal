<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>
WATER MANAGEMENT SUPPLY SYSTEM
</title>
<script src="validateform.js"></script>
<link rel = "icon" href = "https://i.dlpng.com/static/png/6420178_preview.png" type = "image/x-icon">
<style>
body{
   background:lightblue;
}
</style>
</head>
<body>
 <div><h1 align="center"> <b>FILL THE FORM TO SAVE WATER AND LIVE LIFE</b></h1></div> <br>
<div class="container"> 
<div class="jumbotron">
 <form name="myform" class="form-horizontal" action="take.php" onsubmit = "return validateform()" method="post" >
 <div class="form-group">
   <lable for="name" >NAME</lable>
   <input id="name" class="form-control" placeholder="Firstname" type="text" name="fname" >

   <lable for="middle name">MIDDLE NAME</lable>
   <input id="middlename" class="form-control" type="text" placeholder="middlename optional" name="mname">

   <lable for="last name">LAST NAME</lable>
   <input id="lastname" class="form-control" type="text" placeholder="last name" name="lname">

   <lable for="email" >EMAIL</lable>
   <input id="email" type="email"  class="form-control"  placeholder="example@gmail.com" name="mail">
 
   <lable for="phonenumber">PHONE NUMBER</lable>
   <input id="phonenumber" name="phone" class="form-control" type="tel" placeholder="phonenumber" name="phone">

   <lable for="user name">USER NAME</lable>
   <input id="username" class="form-control" type="text" placeholder="username" name="uname">

   <lable for="password">PASSWORD</lable>
   <input id="password" class="form-control" type="password"  placeholder="password" name="pass">
  
   <lable for="password">CONFORM PASSWORD</lable>
   <input id="cpassword" type="password" class="form-control"  placeholder="password" name="cpass">
    
   
<lable for="address">ADDRESS</lable>
   <input id="address" type="address" class="form-control"  placeholder="address" name="add">
  
   <lable for="pin">PIN CODE</lable>
   <input id="pin" class="form-control" type="tel" placeholder="pin" name="pin">

   <lable for="state">STATE</lable>
   <select name="stateslist" class="form-control">
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>

<lable for="gender">SEX SELECT</lable><br>
  <input type="radio" value="male" name="gender">MALE
  &nbsp&nbsp<input type="radio" value="female" name="gender">FEMALE
  &nbsp&nbsp<input type="radio" value="transgender" name="gender">TRANSGENDER
  &nbsp&nbsp<input type="radio" value="lesbian" name="gender">LESBIAN
  &nbsp&nbsp<input type="radio" value="gay" name="gender">GAY

  <br> <lable for="Birthday">DATE OF BIRTH</lable>
   <input type="date" class="form-control" name="bday">
    <lable for="">SELECT ACCOUNT TYPE</lable><br>
  
   
  &nbsp&nbsp<input type="checkbox" name="acc" value="GUEST">GUEST
  &nbsp&nbsp<input type="checkbox" name="acc" value="PUBLIC">PUBLIC
   &nbsp&nbsp<input type="checkbox" name="acc" value="PRIVATE">PRIVATE
    <br>
<div align="right">
<button type="submit" class="btn btn-primary btn-lg btn-success">SUBMIT</button>
</div>
</div>
</form>

</body>
</html>