<h1> <marquee behavior="" direction=""> Trang Ký Túc Xá - Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt- Hàn</marquee>  </h1>

<?php if (isset($_SESSION['sv_login'])) {
		$vs=$_SESSION['sv_login'];
		echo "<h6>Xin chào sinh viên : ".$vs['HoTen']."</h6>";
		echo "<h6>Mã Sinh Viên :" .$vs['MaSV']."</h6>";
		echo "<h6>Giới Tính :" .$vs['GioiTinh']."</h6>";
		/*echo "<h6>Ngày Sinh :" .$vs['NgaySinh']."</h6>"; */
		echo "<h6>Địa Chỉ :" .$vs['DiaChi']."</h6>";
		echo "<h6>Số Điện Thoại :" .$vs['SDT']."</h6>";
} ?>