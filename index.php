<?php
    echo "helo php";
	session_start();
?>

<html>
 <title>上会系统</title>
 <head>
     <link href="style.css" rel="stylesheet" type="text/css"/>
 <script src="jquery-2.1.4.min.js"  type="text/javascript" ></script>
 </script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});
</script>

 </head>
 <body>
	<div top > 
	议题审议:
	</div>
	<a href="/prepare.php">议题准备</a>
	<p>如果您点击我，我会消失。</p>
</body>
</html>
