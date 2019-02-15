<?php
include "connect.php";
    ?>
<html>
    <style>
      header
        {
            font-size: 30px;
            text-align: center;
            font-family: cursive;
        }
        div
        {
          margin: 0px;
          padding-left: 650px; 
          padding-top: 60px;
        }
        form
        {
            font-size:20px;
        }
        input
        {
            font-size: 20px;
            width: 200px;
            height: 40px;
        }
        select {
      width: 200px;
      height: 40px;
  
}
    </style>
    <body style="background-color: silver">
        <header>
        Library Management System<br>
        <p style="font-family: cursive">User Regestration Form
        </header>
        <div>
        <form name="form" action="" method="post">
          <input type="text" name="fname" placeholder="FirstName" required><br>
          <input type="text" name="lname" placeholder="LastName" required><br>
          <input type="text" name="uname" placeholder="Username" required><br>
          <input type="password" name="password" placeholder="Password" required><br>
          <input type="email" name="email"placeholder="Email" required><br>
          <select name="semester">
              <option value="1">1st Semsester</option>
              <option value="2">2nd Semester</option>
              <option value="3">3rd Semester</option>
              <option value="4">4th Semester</option>
              <option value="5">5th Semester</option>
              <option value="6">6th Semester</option>
              <option value="7">7th Semester</option>
              <option value="8">8th Semester</option>
              </select><br>
          <input type="phone" name="phone"placeholder="Phone" required><br>
         <input type="text" name="eno"placeholder="Enroll No" required><br>
         <input type="submit" name="submit" value="Register">
            </form>
        </div>
        <?php
        if(isset($_POST['submit']))
        {
            mysqli_query($link,"insert into registration values('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[password]','$_POST[email]','$_POST[semester]','$_POST[phone]','$_POST[eno]','No')");        
       ?>
        <script>
            alert("Successfully Registered!!Wait For Confirmation");
            </script>
        <?php
        }
        ?>
        </body>
</html>