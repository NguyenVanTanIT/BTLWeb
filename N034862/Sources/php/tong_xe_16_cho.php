<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 16 chỗ</h1>
		</div>
	</div>
	<div class="row ">
		<?php
		include('include/ketnoi.php'); 
		$loi=array();
		$loi["hoten"] = $loi["binhluan"] = NULL;
		$hoten=$binhluan=NUll;
		if (isset($_POST["gui"])) {
			if (empty($_POST["binhluan"]))
			{
				$loi["binhluan"]="* Xin vui lòng bình luận";
			}
			else
			{
				$binhluan=$_POST["binhluan"];
			}
			if($binhluan)
			{
				$hoten=$_SESSION["user"];
				$binhluan=$_POST["binhluan"];
				$sql=mysqli_query($ung,"SELECT id FROM `users` WHERE username='$hoten'");
				$row=mysqli_fetch_array($sql);
				$id = $row['id'];
				mysqli_query($ung,"insert into comment (id, comment) values ('$id', '$binhluan')");
			}	
		}
		$strSQL="SELECT * FROM car WHERE seats =16";
		$car=mysqli_query($ung,$strSQL);
		?>
		<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
			<div class="col-md-4">
				<a href="DatXeDuLich.php?page=chitietxe" title="Xe 16 chỗ Mazda CX5">
					<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
					style="border:#999999 1px solid;" align="left" />
				</a>
				<h2 class="tensanpham_tencot">
					<a href="Xe-16-chỗ-Madza-CX5.html" title="Xe 16 chỗ Mazda CX5">
						<h5>
							<?php echo $row['carname']; ?>
							
						</h5>
					</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
				</h2>
			</div>
		<?php } ?>
	</div>
	
</div>
<div id="comment">
	<fieldset>
		<legend>Bình Luận</legend>
		<?php 
		if (isset($_SESSION["user"])){
			?>
			<form action="DatXeDuLich.php?page=tongxe8cho" method="post">
				<table>
					<tr>
						<td>Họ tên: <?=$_SESSION["user"]?></td>
					</tr>
					<tr>
						<td>Bình luận</td>
						<td><textarea cols="60" rows="5" name="binhluan"><?php echo $loi['binhluan']; ?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Bình Luận" name="gui"></td>
					</tr>
				</table>
			</form>
			<?php
		}else{
			?>
			<p>Bạn vui lòng đăng nhập để bình luận</p>
			<?php
		}
		?>
	</fieldset>
	<table>
		<tr>
			<th>Bình luận</th>
		</tr>
		<tr>
			<?php
			$sql=mysqli_query($ung,"SELECT comment.comment, users.username FROM comment JOIN users on comment.id = users.id");
			$row=mysqli_fetch_array($sql);
			$cmt=$row;
			?>
			<tbody>
				<?php while ($row=mysqli_fetch_array($sql)): ?>
					<tr>
						<td><?php echo htmlspecialchars($row['username']) ?></td>
						<td><?php echo htmlspecialchars($row['comment']); ?></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</tr>
	</table>
</div>