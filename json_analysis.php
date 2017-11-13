<?php
//koneksi database
include "connection.php"; 

// open tag json
echo "{ class_balance:[";

// neangan balance semua kelas
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"ALL\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 7
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '7'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '7'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"7\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 7A
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
echo "{\"Grade\":\"7A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 7B
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
echo "{\"Grade\":\"7B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 8
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '8'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '8'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"8\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 8A
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '8A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '8A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"8A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";


// neangan balance kelas 8B
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '8B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '8B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"8B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 9
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '9'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '9'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"9\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 9A
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '9A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '9A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"9A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 9B
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '9B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '9B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"9B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 10
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '10'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '10'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"10\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 10A
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '10A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '10A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"10A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 10B
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '10B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '10B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"10B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 10C
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '10C'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '10C'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"10C\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 10D
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '10D'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '10D'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"10D\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 11
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '11'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '11'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"11\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 11A
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '11A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '11A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"11A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 11B
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '11B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '11B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"11B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 11C
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '11C'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '11C'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"11C\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 11D
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '11D'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '11D'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"11D\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance semua kelas 12
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.Level = '12'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.Level = '12'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 12A
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '12A'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '12A'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12A\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 12B
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '12B'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '12B'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12B\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 12C
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '12C'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '12C'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12C\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 12D
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '12D'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '12D'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12D\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"},";

// neangan balance kelas 12E
$qty= 0;
$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'green' AND g.GradeID = '12E'" ;

                $result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
                if(mysqli_num_rows($result)> 0){ 
               while($row = mysqli_fetch_assoc($result)){ 
                $pont = $row['Point'];
                $qty += $pont;
                } }

$qty2= 0;
$sql2="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID AND d.Type = 'red' AND g.GradeID = '12E'" ;

                $result2=mysqli_query($connect, $sql2) or die(mysql_error()); 
                if(mysqli_num_rows($result2)> 0){ 
               while($row2 = mysqli_fetch_assoc($result2)){ 
                $pont2 = $row2['Point'];
                $qty2 += $pont2;
                } } 

$balance = $qty-$qty2;
echo "{\"Grade\":\"12E\", \"Balance\":\"$balance\", \"Total_Green\":\"$qty\", \"Total_Red\":\"$qty2\"}";

// close tag json
echo "]}";
?>