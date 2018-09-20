print_r($_POST);exit;

// Create connection
$db = mysqli_connect('localhost', 'root', '', 'asminds');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$query = INSERT INTO asmindsemployee( Firstname, Lastname, Dob, Mobilenumber, Resume,Image,Ug,Ugpassedout,Ugcollege,Pg,Pgpassedout,Pgcollege,Address1,Address2,Landmark,Country,State,City,Pincode,Nationality,Birthplace,Nativeplace,PancardNo,AadharNo,Familymembername,	Familymemberdob,Familyemberrelationship,Familymemberoccupation,Familymemberaddress,Familymembermbno,Familymember2name,	Familymember2dob,Familyember2relationship,Familymember2occupation,Familymember2address,Familymember2mbno,Familymember3name,	Familymember3dob,Familyember3relationship,Familymember3occupation,Familymember3address,Familymember3mbno)VALUES($_POST["fname"], $_POST["lname"], $_POST["dob"], $_POST["mob"], $_POST["resume"],$_POST["image"],$_POST["ug"],$_POST["yop10"],$_POST["ugcollege"],$_POST["pg"],$_POST["yop12"],$_POST["pgcollege"],$_POST["address1"],$_POST["address2"],$_POST["landmark"],$_POST["country"],$_POST["state"],$_POST["city"],$_POST["pincode"],$_POST["nationality"],$_POST["birthp"],$_POST["nativep"],$_POST["panno"],$_POST["aadharno"],$_POST["name1"],$_POST["dob1"],$_POST["relation1"],$_POST["occup1"],$_POST["add1"],$_POST["cont1"],$_POST["name2"],$_POST["dob2"],$_POST["relation2"],$_POST["occup"],$_POST["add2"],$_POST["cont2"],$_POST["name3",$_POST["dob3"],$_POST["relation3"],$_POST["occup3"],$_POST["add3"],$_POST["cont3"]);
	
  	mysqli_query($db, $query);

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



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

$query = "INSERT INTO asmindsemployee( Firstname, Lastname, Dob, Mobilenumber, Resume,Image,Ug,Ugpassedout,Ugcollege,Pg,Pgpassedout,Pgcollege,Address1,Address2,Landmark,Country,State,City,Pincode,Nationality,Birthplace,Nativeplace,PancardNo,AadharNo,Familymembername,	Familymemberdob,Familyemberrelationship,Familymemberoccupation,Familymemberaddress,Familymembermbno,Familymember2name,	Familymember2dob,Familyember2relationship,Familymember2occupation,Familymember2address,Familymember2mbno,Familymember3name,	Familymember3dob,Familyember3relationship,Familymember3occupation,Familymember3address,Familymember3mbno) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m',$n','$o','$p','$q','$r','$s','$t','$u','$v','$w',$x',$y','$z','$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk','$ll','$mm','$nn''$oo','$pp')";

  	mysqli_query($db, $query);