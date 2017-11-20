<?php
//koneksi database
include "connection.php"; 

$namasiswa = "NURSABRINA SASKIA PUTERI MULYADI";

$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, place p, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND c.PlaceID=p.PlaceID AND s.GradeID = g.GradeID AND s.Student = '$namasiswa' ORDER BY Date desc" ; 
$result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
$showjson = "{ stud_analysis:[";
               while($row = mysqli_fetch_array($result)){ 
                $tanggal = $row['Date'];
                $desk = $row['Description'];
                $guru = $row['Name'];
                $tempat = $row['Place'];
                $wktu = $row['Time'];
                $poin = $row['Point'];
               $showjson .= "{\"Date\":\"$tanggal\",
               \"Desc\":\"$desk\",
               \"Teacher\":\"$guru\",
               \"Place\":\"$tempat\",
               \"Time\":\"$wktu\",
               \"Point\":\"$poin\"},"; 
           }
$showjson = substr($showjson,0,strlen($showjson)-1);
$showjson.="]}";

echo $showjson;   

?>