<?php
require_once 'ket_noi.php';
	function Connect() {}
		$conn = mysqli_connect(
			"localhost",
			"root",
			"",
			"ban_hang"
		);
		mysqli_set_charset($conn, 'utf8');
		return $conn;
?> 
<?php
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	$tv="select * from banner limit 0,1";
	$tv_1=mysqli_query($tv, $conn);
	$tv_2=mysql_fetch_array($tv_1);
	$link_hinh="hinh_anh/banner/".$tv_2['hinh'];	
	echo "<img src='".$link_hinh."' width='".$tv_2['rong']."' height='".$tv_2['cao']."' >";
?>