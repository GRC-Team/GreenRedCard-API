<?php
//koneksi database
include "connection.php"; 


$sqlx="SELECT * FROM student s, cards c, description d, time t, user u, grade g WHERE c.StudentID = s.StudentID AND c.DescID=d.DescID AND c.TimeID=t.TimeID AND c.UserID=u.UserID AND s.GradeID = g.GradeID ORDER BY CardID desc" ; 
$result=mysqli_query($connect, $sqlx) or die(mysql_error()); 
$showjson = "{ cards:[";
               while($row = mysqli_fetch_array($result)){ 
               	$kartu = $row['CardID'];
                $siswa = $row['Student'];
                $kelas = $row['GradeID'];
                $desk = $row['Description'];
                $poin = $row['Point'];
                $tanggal = $row['Date'];
                $guru = $row['Name'];
               $showjson .= "{\"CardID\":\"$kartu\",\"Student\":\"$siswa\",\"Grade\":\"$kelas\",\"Desc\":\"$desk\",\"Point\":\"$poin\",\"Date\":\"$tanggal\",\"Teacher\":\"$guru\"},"; 
           }
$showjson = substr($showjson,0,strlen($showjson)-1);
$showjson.="]}";

echo $showjson;   

?>