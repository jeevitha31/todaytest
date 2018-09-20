<?php

$tmpname =  addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
print_r($tmpname);exit;
// Create connection
$db = mysqli_connect('localhost', 'root', '', 'asminds');

$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["dob"];
$d = $_POST["mob"];
$e = $_POST["image"];
$f = $_POST["upload"];
$g = $_POST["ug"];
$h = $_POST["yop10"];
$i = $_POST["ugcollege"];
$j= $_POST["pg"];
$k = $_POST["yop12"];
$l = $_POST["pgcollege"];
$m = $_POST["address1"];
$n = $_POST["address2"];
$o = $_POST["landmark"];
$p = $_POST["country"];
$q = $_POST["state"];
$r = $_POST["city"];
$s = $_POST["pincode"];
$t = $_POST["nationality"];
$u = $_POST["birthp"];
$v = $_POST["nativep"];
$w = $_POST["aadharno"];
$x = $_POST["panno"];
$y = $_POST["name1"];
$z = $_POST["dob1"];
$aa = $_POST["relation1"];
$bb = $_POST["occup1"];
$cc = $_POST["add1"];
$dd = $_POST["cont1"];
$ee = $_POST["name2"];
$ff = $_POST["dob2"];
$gg = $_POST["relation2"];
$hh = $_POST["occup2"];
$ii = $_POST["add2"];
$kk = $_POST["cont2"];
$jj = $_POST["name3"];
$ll = $_POST["dob3"];
$mm = $_POST["relation3"];
$nn = $_POST["occup3"];
$oo = $_POST["add3"];
$pp = $_POST["cont3"];

$query = "INSERT INTO asmindsemployee( Firstname, Lastname, Dob, Mobilenumber, Resume,Ug,Ugpassedout,Ugcollege,Pg,Pgpassedout,Pgcollege,Address1,Address2,Landmark,Country,State,City,Pincode,Nationality,Birthplace,Nativeplace,PancardNo,AadharNo,Familymembername,Familymemberdob,Familyemberrelationship,Familymemberoccupation,Familymemberaddress,Familymembermbno,Familymember2name,Familymember2dob,Familymember2relationship,Familymember2occupation,Familymember2address,Familymember2mbno,Familymember3name,Familymember3dob,Familymember3relationship,Familymember3occupation,Familymember3address,Familymember3mbno) VALUES('$a','$b','$c','$d','$e','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh','$ii','$kk','$jj','$ll','$mm','$nn','$oo','$pp')";

  	mysqli_query($db, $query);
?>
