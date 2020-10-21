<?php include("include/database.php");  
session_start();
if(isset($_POST['submit'])){  
 $result=mysqli_query($con,"select * from user where user_name='$_POST[username]' and password='$_POST[password]' and status='active' ");
 $row=mysqli_fetch_assoc($result);
 
 if($result->num_rows>0){
 	if($row['user_type']=='admin'){
 		$result=mysqli_query($con,"select * from user where user_id='$row[user_id]'");
 		$row1=mysqli_fetch_assoc($result);
 		$_SESSION['username']=$row['user_name'];
 		echo $_SESSION['userid']=$row1['user_id'];
 		$_SESSION['usertype']=$row['user_type'];
 		header("location:admin/student.php");
 	}elseif($row['user_type']=='student'){
 		$result=mysqli_query($con,"select * from student_details join user on detail_id=S_id where  user.user_id='$row[user_id]'");
 		$row1=mysqli_fetch_assoc($result);
 		$_SESSION['username']=$row['user_name'];
 		$_SESSION['userid']=$row['user_id'];
 		$_SESSION['usertype']=$row['user_type'];
 		$_SESSION['stdid']=$row1['S_id'];
 		$_SESSION['bid']=$row1['Branch'];
 		header("location:student/view_std.php");
 	}elseif($row['user_type']=='staff'){
 		$result=mysqli_query($con,"select * from staff_details join user on detail_id=staff_id where  user.user_id='$row[user_id]'");
 		$row1=mysqli_fetch_assoc($result);
 		$_SESSION['username']=$row['user_name'];
 		$_SESSION['userid']=$row['user_id'];
 		$_SESSION['usertype']=$row['user_type'];
 		$_SESSION['staff_id']=$row1['staff_id'];
 		$_SESSION['bid']=$row1['dep'];
 		header("location:staff/student.php");
 	}
 }else{
 	$_SESSION['error']="INVALID USER NAME OR PASSWORD";
 	header("location:login.php");
 }
}
?>