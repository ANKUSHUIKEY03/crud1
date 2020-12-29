<?php
if(isset($_GET['student_id']))
{
    $query = "select * from student_table where student_id='".$_GET['student_id']."'";       
    $res  = $dbc->query($query);
    $row = $res->fetch_assoc();
    $Name=$row['Name'];
    $Add=$row['Address'];
    $Tel=$row['Telephone'];
    $Std=$row['Standard'];
    $RNo=$row['Roll_Number'];
    $studenId=$row['student_id'];
}
?>