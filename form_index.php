<!DOCTYPE html>
<html>
<head><title> PHP Form </title></head>
<style>
input[type="text"]
{
 background: white;
 border-style: solid, dotted;

 border-radius: 2px;
 box-shadow: 0 0 5px 3px #808080;
 color: #222;
 outline: none;
 height:23px;
 width: 275px;
}
h1,form
 {
 text-align: center;
 }
input[type="submit"],[type="reset"]
 {
   height: 30px;
width: 200px;
background-color: #ADD8E6;
border-radius: 2px;
box-shadow: 0 0 5px 3px #ffa853;
  }
</style>
<body>
<h1> RESUME FORM </h1>
<hr>
<br> </br>
<br> </br>

<form method="post" action="form_details.php">
<input type="text" placeholder="Enter first name" name="fname"><br><br>
<input type="text" placeholder="Enter last name" name="lname"><br><br>
<input type="text" placeholder="Enter your address" name="aname"><br><br>
<input type="text" placeholder="Enter your email address" name="eaname"><br><br>
<input type="text" placeholder="Enter your highest education" name="edu"><br><br>
<input type="text" placeholder="Enter area of interest" name="iname"><br><br>
<input type="text" placeholder="Enter technical skills" name="tname"><br><br>
<input type="text" placeholder="Enter career objective" name="cname"><br><br>
<br> </br>
<input type="submit" value="Display Details">
<input type="reset" name="Reset">
</form>
</body>
</html>


