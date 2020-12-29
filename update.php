<?php
if(isset($_POST['Update']))
{
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Telephone = $_POST['Telephone'];
    $Standard = $_POST['Standard'];
    $RollNumber = $_POST['RollNumber'];
    $SID=$_POST['student_id'];
    $query = "UPDATE  student_table SET Name='$Name',Address='$Address',Telephone='$Telephone',Standard='$Standard',Roll_Number='$RollNumber' WHERE student_id=$SID";            
   // echo $query;
    $res  = $dbc->query($query);
 //   header("Refresh:0;url=index.php");
}
?>