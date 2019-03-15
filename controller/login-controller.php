<?php include("../Conn.php");?>
<?php include("../object/User.php");?>
<?php
	$username = $_POST["username"];
	$password = $_POST["password"];

	$conn = new Conn();//实例化链接
	$con = $conn->getCon();
	//防止中文乱码
	$query = "set names utf8";
	$rst = mysqli_query($con,$query);

	if($conn->getCon()) {
		// 链接数据库
		$sql = "select * from users where USzh = '" .$username . "'";
		$rst = mysqli_query($con, $sql);
		if (mysqli_num_rows($rst) > 0) {
			while($row = mysqli_fetch_assoc($rst)){
				if($row["USmm"] == $password){
					echo "<script>location.href='../home/admin-user.html';</script>";
				}
				else{
					echo "<script>alert('密码错误!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
				}
			}

		}
		else{
			echo "<script>alert('用户名或密码错误!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		}
	}