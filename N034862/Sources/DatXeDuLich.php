<?php 

		include("xuly/head.php");
		include("xuly/menu.php");
		
	 ?>


	

		
		<main class="rounded container">

			<div class="row">
				<div class="col-md-9" style="padding-top: 30px;" >
					<div class="row">
						
						<?php
						if($page =='')
							include('php/trangchu.php');
						if($page =='trangchu')
							include "php/trangchu.php";
						if($page =='datxe')
							include "php/datxe.html";
						if($page =='lienhe')
							include "php/lienhe.php";
						if($page =='gioithieu')
							include "php/gioithieu.php";
						if($page =='baogia')
							include "php/baogia.php";
						if($page =='DatXeDuLich')
							include  "php/trangchu.php";
						
						
						if($page =='dangky')
							include "register.html";
						
						

						if($page =='chitietxe')
							include('php/chitietxe.php');
						if($page =='tongxe4cho')
							include('php/tong_xe_4_cho.php');
						if($page =='tongxe8cho')
							include('php/tong_xe_8_cho.php');
						if($page =='tongxe16cho')
							include('php/tong_xe_16_cho.php');
						if($page =='tongxe35cho')
							include('php/tong_xe_35_cho.php');
						if($page =='tongxe45cho')
							include('php/tong_xe_45_cho.php');
							
						
						?>
					</div>	
					<?php 
						include("xuly/mainleft.php");
					?>
	</main>

	<?php 

		include("xuly/footer.php");
		
	 ?>
