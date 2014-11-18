<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Basis Template for Bootstrap 3</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		

</head>
<body>
	<div class="wrapper">
		<div class="box">
			<div class="row">

				<!-- sidebar -->
				<div class="column col-sm-3" id="sidebar"></div>
				<!-- /sidebar -->

				<!-- main -->
				<div class="column col-sm-9" id="main">

					<div class="full col-sm-9">

						<!-- content -->
							
							<?php
							if (isset ( $_POST ['ch1'] )) {
								$Add = $_POST ['ch1'];
								$Add = $Add * 35;
								if (isset ( $_POST ['jumpMenu'] )) {
									
									$Add = $Add + ($_POST ['jumpMenu'] * 55);
								}
								
								if (isset ( $_POST ['jumpMenu2'] )) {
									
									$Add = $Add + ($_POST ['jumpMenu2'] * 55);
								}
								if (isset ( $_POST ['jumpMenu3'] )) {
									
									$Add = $Add + ($_POST ['jumpMenu3'] * 15);
								}
								
								$name="ก๋วยเตี๋ยวต้มยำ ";
								
								if (isset ( $_POST ['s1'] )) {
									$name=$name.$_POST ['s1'];
								
								
								
								}
								if (isset ( $_POST ['s2'] )) {
									$name=$name.$_POST ['s2'];
										
								
								}
								if (isset ( $_POST ['s3'] )) {
									$name=$name.$_POST ['s3'];
								
								
								
								}
								if (isset ( $_POST ['s4'] )) {
									$name=$name.$_POST ['s4'];
										
								
								}
								
								$name=$name." สิ่งที่ไม่ใส่";
								
								if (isset ( $_POST ['t1'] )) {
									$name=$name.$_POST ['t1'];
								
								
								
								}
								if (isset ( $_POST ['t2'] )) {
									$name=$name.$_POST ['t2'];
								
								
								}
								if (isset ( $_POST ['t3'] )) {
									$name=$name.$_POST ['t3'];
								
								
								
								}
								if (isset ( $_POST ['t4'] )) {
									$name=$name.$_POST ['t4'];
								
								
								}
								$name=$name." รถชาติ";
								
								if (isset ( $_POST ['c1'] )) {
									$name=$name.$_POST ['c1'];
								
								
								
								}
								if (isset ( $_POST ['c2'] )) {
									$name=$name.$_POST ['c2'];
								
								
								}
								if (isset ( $_POST ['c3'] )) {
									$name=$name.$_POST ['c3'];
								
								
								
								}
							
								
								
								
								
								
								
								
								
								
								
								
								
							}
							

						
							?>

							<form id="form1" name="form1" method="post" action="index.php">
							<h1>
								<legend>
									<em><strong><h2>ร้านก๋ยวเตี๋ยวต้มยำ บ้านลายจุดข้างวัง</h2></strong></em>
								</legend>
							</h1>
							<p>ก๋วยเตี๋ยวต้มยำของร้านบ้านลายจุดข้างวัง เริ่มต้นในราคาชามละ 35
								บาท</p>
							<p>โดยทางร้านจะใส่ หมู ลูกชิ้น หมูสับ ตับหลวก
								แต่ถ้าลูกค้าท่านใดที่จะเลือกไม่รับของที่ทางร้านได้ใส่ให้
								กรุณากดเลือกได้เลยค่ะ</p>
							<p>
								<input type="checkbox" name="t1" id="t1" value="หมู "> <label
									for="t1"></label> หมู <input type="checkbox" name="t2" id="t2"
									value="ลูกชิ้น" /> <label for="t2"></label> ลูกชิ้น <label
									for="checkbox2"></label> <input type="checkbox" name="t3"
									id="t3" value="หมูสับ " /> <label for="t3"></label> หมูสับ <label
									for="checkbox2"></label> <input type="checkbox" name="t4"
									id="t4" value="ตับลวก" /> <label for="t4"></label> ตับหลวก
							</p>
							<p>** กรุณาเลือกเส้น</p>
							<p>
								<input type="checkbox" name="s1" id="s1"  value="เส้นเล็ก"/> <label for="s1"></label>
								เส้นเล็ก <input type="checkbox" name="s2" id="s2" value="เส้นหมี่ "/> <label
									for="s2"></label> เส้นหมี่ <input type="checkbox" name="s3"
									id="s3" value="บะหมี่ " /> <label for="s3"></label> บะหมี่ <input
									type="checkbox" name="s4" id="s4"  value="วุ่นเส้น"/> <label for="s4"></label>
								วุ่นเส้น
							</p>
							<p>** กรุณาเลือกท็อปปิ้ง</p>
							<p>

								กุ้งแม่น้ำ ตัวละ 55-. เลือกจำนวน <label for="n1"></label> <select
									name="jumpMenu" id="jumpMenu"
									onchange="MM_jumpMenu('parent',this,0)">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</p>
							<p>

								<label for="a2"></label> <label for="a3"></label> ปลาหมึก ตัวละ
								55-. เลือกจำนวน <select name="jumpMenu2" id="jumpMenu2"
									onchange="MM_jumpMenu('parent',this,0)">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</p>
							<p>

								<label for="a3"></label> ใส่ไข่มะตูม ฟองละ 15-. เลือกจำนวน <select
									name="jumpMenu3" id="jumpMenu3"
									onchange="MM_jumpMenu('parent',this,0)">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</p>
							<p>** กรุณาเลือกรสชาติ</p>
							<p>
								<input type="checkbox" name="c1" id="c1" value="เผ็ด"/> <label for="c1"></label>
								เผ็ด <input type="checkbox" name="c2" id="c2" value="ไม่เผ็ด"/> <label for="c2"></label>
								ไม่เผ็ด <input type="checkbox" name="c3" id="c3" value="น้ำใส" /> <label
									for="c3"></label> น้ำใส
							</p>
							<p>
								** จำนวนที่สั่ง <label for="ch1"></label> <input type="text"
									name="ch1" id="ch1" /> ชาม
							</p>
							<p>
								** ราคา ก๋วยเตี๋ยวต้มยำ<?php   
								if (isset ( $_POST ['ch1'] )) { echo ($_POST ['ch1']*35);}  ?>  บาท<br>
								** เพิ่ม กุ้งแม่น้ำ <?php   
								if (isset ( $_POST ['jumpMenu'] )) { echo ($_POST ['jumpMenu']*55);}  ?>  บาท<br>
								** เพิ่ม ปลาหมึก <?php   
								if (isset ( $_POST ['jumpMenu2'] )) { echo ($_POST ['jumpMenu2']*55);}  ?>  บาท<br>
								** เพิ่ม ไข่มะตูม  <?php   
								if (isset ( $_POST ['jumpMenu3'] )) { echo ($_POST ['jumpMenu3']*15);}  ?>  บาท<br>
								** ราคา รวม  <?php   
								if (isset ( $_POST ['ch1'] )) { echo ($Add);}  ?>  บาท<br><br>
								
								
								
								
								** รายการที่สั้ง คือ   <?php   
								if (isset ( $_POST ['ch1'] )) {
								echo($name); }?>
								
								
								
							</p>


							<!-- Button -->
							<div class="form-group">

								<div class="col-md-2">
									<button id="summit" name="singlebutton" class="btn btn-primary">Ok</button>
								</div>
							</div>



							<hr>

							<div class="row" id="footer">
								<div class="col-sm-6"></div>

							</div>
					
					</div>
					<!-- /col-9 -->
				</div>
				<!-- /padding -->
			</div>
			<!-- /main -->

		</div>
	</div>
	</div>
	<!-- script references -->
	<script
		src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>