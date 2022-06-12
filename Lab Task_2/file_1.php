<?php
echo $_POST["uname"]."<br>";
echo $_POST["pass"]."<br>";
echo $_POST["gender"]."<br>";
foreach($_POST["skills"] as $b)
{
	echo $b." ";
}
echo "<br>";
//echo $_POST["skills"]."<br>";
echo $_POST["dept"]."<br>";
echo $_POST["address"]."<br>";
?>