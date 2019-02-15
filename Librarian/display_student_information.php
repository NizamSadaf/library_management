<?php
 include "connect.php";
?>
<html>
    <title>
        Library Management System
    </title>
    <style>
        .i1
        {
         width:200px;
         height: 30px;
         border-radius: 0 0 50px 0;
        }
        input[type="text"]
        {
            padding: 5px;
            font-size: 15px;
        }
        input[type="submit"]
        {
            width:100px;
            height: 30px;
            border-radius:50px 0 0 0; 
            font-size: 15px;
            background-color: orange;
            color: white;
            border-bottom-left-radius: 15px;
        }
        /*body
        {
           background-image: url(image.jpg);
           background-size: cover;
        }*/
        table,th,td
        {
            border-collapse: collapse;
            border: 1px solid;
        }
        th,td
        {
            padding: 5px;
            height: 10%;
            width:10%;
        }
        td
        {
            text-align: center;
        }
        </style>
    <body>
        <header>
            <form>
                <input class="i1" type="text" name="form" placeholder="search for...">
                <input type="submit" value="Go">
            </form>
        </header>
        <main>
            <?php
            $res=mysqli_query($link,"select * from registration");
            echo "<table>";
            echo "<tr>";
            echo "<th>"; echo "firstname";echo "</th>";
            echo "<th>"; echo "lastname";echo "</th>";
            echo "<th>"; echo "username";echo "</th>";
            echo "<th>"; echo "email";echo "</th>";
            echo "<th>"; echo "semester";echo "</th>";
            echo "<th>"; echo "contact";echo "</th>";
            echo "<th>"; echo "EnrollNo";echo "</th>";
            echo "<th>"; echo "Status";echo "</th>";
            echo "<th>"; echo "Approve";echo "</td>";
            echo "<th>"; echo "Not Approve";echo "</td>";

            echo "</tr>";
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
            echo "<td class='td'>"; echo $row["firstname"];echo "</td>";
            echo "<td>"; echo $row["lastname"];echo "</td>";
            echo "<td>"; echo $row["username"];echo "</td>";
            echo "<td>"; echo $row["email"];echo "</td>";
            echo "<td>"; echo $row["semester"];echo "</td>";
            echo "<td>"; echo $row["phone"];echo "</td>";
            echo "<td>"; echo $row["enrollno"];echo "</td>";
            echo "<td>"; echo $row["Status"];echo "</td>";
            echo "<td>";?><a href="approve.php">Approve</a><?php echo "</td>";
            echo "<td>";?><a href="notapprove.php">Not Approve</a><?php echo "</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
        </main>
    </body>
</html>