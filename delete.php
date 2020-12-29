<?php
if(isset($_POST['Delete']))
{
  
    $SID=$_POST['student_id'];
    $query = "DELETE FROM  student_table  WHERE student_id=$SID";            
    
    $res  = $dbc->query($query);
    //header("Refresh:0;url=index.php");
}
?>