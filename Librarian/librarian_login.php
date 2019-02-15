<?php
include "connect.php";
?>
<html>
    <head>
        <title>Library Management</title>
    </head>
<style>
    *{
        margin: 0 px;
        padding: 0px;
     }
    header,form,h3,p
    {
        text-align: center;
    }
    form
    {
        padding-left: 620px; 
        height: 150px;
        width: 30px;
    }
    input
    {
        height:30px;
        width:200px;
        margin:5px;
    }
    </style>
    <body style="background-color: silver">
        <header style="font-family: cursive ;font-size:50px">Library Management System</header>
        <main style="font-size: 30px">
            <h3 style="padding-top: 100px">Librarian Login Form</h3>
        <form name="form" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password"equired><br>
                <input style="width:100px" name="submit" type="submit" value="Submit">
       </form>
        </main>
        <footer>
            <span style="padding-left: 620px">New Member?&nbsp;&nbsp;<a  href="registration.html">Create Account</a></span>
        </footer>
        <?php
        if(isset($_POST['submit']))
        {
            $count=0;
        $req=mysqli_query($link,"select * from librarian where Username='$_POST[username]' && Password='$_POST[password]'");
        $count=mysqli_num_rows($req);
            if($count==0){
        ?>
        <div>Invalid</div>
        <?php
            }
            else
            {
        ?>        
        <script>
            window.location="display_student_information.php";
            </script>
        <?php
        }
        }
        ?>
        </body>
</html>         