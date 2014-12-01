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
	
	

	
	<div class="page-container">
    <div class="container" style="position: relative">
      <div class="marketing">
        <h2>Welcome Noodle TomYam Mi.Me</h2>
        
			 
      </div>
      <form name="form1" method="post" action="">
        <table width="426" height="135" border="0">
          <tr>
            <td width="206"><input type="image" name="im1" id="im1" src="im/1-620x392.JPG"></td>
            <td width="405"><input type="image" name="im2" id="im2" src="im/Cover1-620x392.jpg"></td>
          </tr>
          <tr>
            <td><input type="image" name="im3" id="ima3" src="im/IMG_7991-Cover-620x392.jpg"></td>
            <td><input type="image" name="im4" id="im4" src="im/sapan-620x392.JPG"></td>
          </tr>
        </table>
        <br />
        
        <!-- Button trigger modal -->      
      </form>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 MENU
</button>

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
							<p>&nbsp;</p>
							<p>
							  
						    </p>
							<p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>











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