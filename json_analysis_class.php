<?php
//koneksi database
include "connection.php"; 


$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '7A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '7A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{ cards:[{\"Balance7A\":\"$balance\", \"Total_Green7A\":\"$qty\", \"Total_Red7A\":\"$qty2\"}]}";

$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '7B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '7B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{ cards:[{\"Balance7B\":\"$balance\", \"Total_Green7B\":\"$qty\", \"Total_Red7B\":\"$qty2\"}]}";
?>