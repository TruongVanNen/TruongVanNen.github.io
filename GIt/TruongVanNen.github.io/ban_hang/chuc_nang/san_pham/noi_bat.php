<br><br>
<marquee style="border:blue 2px SOLID">Sản Phẩm Nổi Bật</marquee> <br><br>
<center>
	<?php 
		require_once('ket_noi.php');
		$tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
		$tv_1=mysqli_query($conn, $tv);
		while($tv_2=mysqli_fetch_array($tv_1, 1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='150px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "<br>";
			echo "<br>";
		}
	?>
</center>
