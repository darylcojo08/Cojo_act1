<?php
require("database.php");

//case1 Inserting data using valid SQL insert command
$dbObj = new Database();
//$result = $dbObj->execute("INSERT INTO tbluser(name,age,address,nationality) VALUES ('Daryl', 22, 'Cebu City', 'Filipino')");
//echo "Case 1 result: ".$result;

//case2
//$result = $dbObj->execute("UPDATE tbluser SET name = 'Daryl Cojo' WHERE id=1");
//echo "Case 2 result: ".$result;

//case 3  
//$result = $dbObj->execute("SELECT * FROM tbluser");
//echo "Case 3 result: ".$result;

//case 4
//$result = $dbObj->execute("DELETE FROM tbluser WHERE id=1");
//echo "Case 4 result: ".$result;

//case 5
//$result = $dbObj->execute("INSER INTO tbluser(name,age,address,nationality) VALUES ('Daryl Cojo', 22, 'Cebu City', 'Filipino')");
//echo "Case 5 result: ".$result;

//case 6
//$result = $dbObj->execute("UPDAT tbluser SET name = 'Daryl Cojo' WHERE id=1");
//echo "Case 6 result: ".$result;

//case 7
//$result = $dbObj->execute("SELEC * FROM tbluser");
//echo "Case 7 result: ".$result;

//case 8
$result = $dbObj->execute("DELET FROM tbluser WHERE id=1");
echo "Case 8 result: ".$result;

?>