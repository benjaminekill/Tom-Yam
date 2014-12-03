<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <title>Bootstrap-modal by jschr</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" />
  <link href="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet" />
<style>
  body { 
    padding-top: 40px; 
  }
</style>
  <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/bootstrap-modal.css" rel="stylesheet" />
<style>      
  .text-center { 
    text-align: center; 
  }

  .marketing h1 {
    font-size: 50px;
    font-weight: lighter;
    line-height: 1;
  }

  .marketing p {
    font-size: 18px;
  }
  </style>
</head>
<body>
	
	<form action="index.php" method="post">

	
	<div class="page-container">
    <div class="container" style="position: relative">
      <div class="marketing">
        <h2>Noodle TomYam Mi.Me</h2>
        
			 
      </div>
      <br />
		  <div class="row">
			  <div class="span10">
<p>เรียนเชิญลูกค้าทุกท่านแวะรับประทานก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวังของเราได้เลย</p>
<p>โดยทางร้านเรานั้นมีของสดจากทะเลและอื่นๆอีกมากมายที่รอให้ท่านลูกค้ามาเลือกรับประทานได้เลย</p>
         


<!-- Button trigger modal --></p>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 สั่งรายการ
</button>
<br>
<br>
<br>
รายการที่สั่ง
<br>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
if ($_POST['N_1']!=null) {
	echo "เส้นใหญ่	".$_POST['N_1']." ชาม"."<br>" ;
}
if ($_POST['N_2']!=null) {
	echo "เส้นเล็ก	".$_POST['N_2']." ชาม"."<br>" ;
}
if ($_POST['N_3']!=null) {
	echo "เส้นหมีเหลือง 	".$_POST['N_3']." ชาม"."<br>" ;
}
if ($_POST['N_4']!=null) {
	echo "เส้นหมี	".$_POST['N_4']." ชาม"."<br>" ;
}


if ($_POST['T_1']!=null) {
	echo "กุ้งแม่น้ำ	".$_POST['T_1']." ตัว"."<br>" ;
}
if ($_POST['T_2']!=null) {
	echo "ปลาหมึก	".$_POST['T_2']." ตัว"."<br>" ;
}
if ($_POST['T_3']!=null) {
	echo "ไข่ต้มมะตูม	".$_POST['T_3']." ฟอง"."<br>" ;
}
	



?>
<br>
จำนวน ราคา  
<?php



echo (($_POST['N_1']*35)+($_POST['N_2']*35)+($_POST['N_3']*35)+($_POST['N_4']*35)) ;


?>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
        
		
		
		<h4 class="modal-title" id="myModalLabel">รายการสั่ง</h4>
      </div>
      <div class="modal-body">
        
		<p>ก๋วยเตี๋ยวต้มยำของร้านบ้านลายจุดข้างวัง เริ่มต้นในราคาชามละ 35
								บาท</p>
							<p>โดยทางร้านจะใส่ หมู ลูกชิ้น หมูสับ ตับหลวก
								แต่ถ้าลูกค้าท่านใดที่จะเลือกไม่รับของที่ทางร้านได้ใส่ให้
								กรุณากดเลือกได้เลยค่ะ</p>
							<p>
							
				
		</p>
							<p>** กรุณาเลือกเส้น</p>
							<table width="438" border="0">
							  <tr>
							    <td width="104" valign="top"><div align="center">เส้นใหญ่</div></td>
							    <td width="108" valign="top"><div align="center">จำนวน (ชาม)</div></td>
							    <td width="204">
							      <div align="center">
							        <input type="text" name="N_1" id="N_1" />
							         <label for="N_1"></label>
						          </div>
							     
						        </td>
						      </tr>
							  <tr>
							    <td valign="top"><div align="center">เส้นเล็ก</div></td>
							    <td valign="top"><div align="center">จำนวน (ชาม)</div></td>
							    <td>
							      <div align="center">
							        <input type="text" name="N_2" id="N_2">
							        <label for="N_2"></label>
						          </div>
							      
						        </td>
						      </tr>
							  <tr>
							    <td valign="top"><div align="center">เส้นหมีเหลือง</div></td>
							    <td valign="top"><div align="center">จำนวน (ชาม)</div></td>
							    <td>
							      <div align="center">
							        <input type="text" name="N_3" id="N_3">
							        <label for="N_3"></label>
						          </div>
							      
						        </td>
						      </tr>
	    </table>
							<table width="438" border="0">
							  <tr>
							    <td width="103" valign="top"><div align="center">เส้นหมี</div></td>
							    <td width="105" valign="top"><div align="center">จำนวน (ชาม)</div></td>
							    <td width="208">
							      <div align="center">
							        <input type="text" name="N_4" id="N_4">
							        <label for="N_4"></label>
						          </div>
							      
						        </td>
						      </tr>
	    </table>
							<p>** กรุณาเลือกท็อปปิ้ง</p>
                            
							<table width="400" border="0">
							  <tr>
							    <td width="97" height="44" valign="top"><div align="center">กุ้งแม่น้ำ</div></td>
							    <td width="120" valign="top">  <div align="center">จำนวน</div></td>
							    <td width="204">
							      <div align="center">
							        <input type="text" name="T_1" id="T_1">
							        <label for="T_1"></label>
						          </div>
							      
						       </td>
						      </tr>
							  <tr>
							    <td height="46" valign="top"><div align="center">ปลาหมึก</div></td>
							    <td valign="top"><div align="center">จำนวน</div></td>
							    <td>
							      <div align="center">
							        <input type="text" name="T_2" id="T_2">
							        <label for="T_2"></label>
						          </div>
							      
						        </td>
						      </tr>
							  <tr>
							    <td height="46" valign="top"><div align="center">ไข่ต้มมะตูม</div></td>
							    <td valign="top" ><div align="center">จำนวน</div></td>
							    <td>
							      <div align="center">
							        <input type="text" name="T_3" id="T_3">
							        <label for="T_3"></label>
						          </div>
							      
						        </td>
						      </tr>
	    </table>
							<p>** กรุณาเลือกรสชาติ
							</p>
							
							  <p>
							    <label>
							      <input type="radio" name="s_1" value="ต้มยำ" id="s_1">
							      ต้มยำ</label>
							    
							    <label>
							      <input type="radio" name="s_" value="radio" id="2">
							      น้ำตก</label>
							    
							    <label>
							      <input type="radio" name="s_" value="radio" id="3">
							      น้ำใส่</label>
							    
							    <label>
							      <input type="radio" name="s_" value="radio" id="4">
							      แห้ง</label>
							    
						      </p>
	    
							<p>
								
							</p>
							<p></p>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">สั้งรายการ</button>




</form>






      </div>
    </div>
  </div>
</div></td>
	</tr>

	














































<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
    <script src="js/bootstrap-modalmanager.js"></script>
    <script src="js/bootstrap-modal.js"></script>
<script type="text/javascript">

  $(function(){

    $.fn.modalmanager.defaults.resize = true;

    $('[data-source]').each(function(){
      var $this = $(this),
        $source = $($this.data('source'));

      var text = [];
      $source.each(function(){
        var $s = $(this);
        if ($s.attr('type') == 'text/javascript'){
          text.push($s.html().replace(/(\n)*/, ''));
        } else {
          text.push($s.clone().wrap('<div>').parent().html());
        }
      });
      
      $this.text(text.join('\n\n').replace(/\t/g, '    '));
    });

    prettyPrint();
  });
</script>
    

<script id="dynamic" type="text/javascript">
$('.dynamic .demo').click(function(){
  var tmpl = [
    // tabindex is required for focus
    '<div class="modal hide fade" tabindex="-1">',
      '<div class="modal-header">',
        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
        '<h3>Modal header</h3>', 
      '</div>',
      '<div class="modal-body">',
        '<p>Test</p>',
      '</div>',
      '<div class="modal-footer">',
        '<a href="#" data-dismiss="modal" class="btn">Close</a>',
        '<a href="#" class="btn btn-primary">Save changes</a>',
      '</div>',
    '</div>'
  ].join('');
  
  $(tmpl).modal();
});
</script>

<script id="ajax" type="text/javascript">

var $modal = $('#ajax-modal');

$('.ajax .demo').on('click', function(){
  // create the backdrop and wait for next modal to be triggered
  $('body').modalmanager('loading');

  setTimeout(function(){
     $modal.load('modal_ajax_test.html', '', function(){
      $modal.modal();
    });
  }, 1000);
});

$modal.on('click', '.update', function(){
  $modal.modal('loading');
  setTimeout(function(){
    $modal
      .modal('loading')
      .find('.modal-body')
        .prepend('<div class="alert alert-info fade in">' +
          'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
        '</div>');
  }, 1000);
});

</script> 
  </body>
</html>