<?php 
$dbc=mysqli_connect("localhost","root","","demo");
if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
$Address = $_POST['Address'];
$Telephone = $_POST['Telephone'];
$Standard = $_POST['Standard'];
$RollNumber = $_POST['RollNumber'];

$query = "Insert into student_table(Name,Address,Telephone,Standard,Roll_Number) Values('$Name','$Address','$Telephone','$Standard','$RollNumber')";            

$res  = $dbc->query($query);
header("Refresh:0");
}
?>