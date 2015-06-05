<?php
    //echo "helo php";
	session_start();
?>

<html>
 <title>部务会议题管理系统</title>
 <head>
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link href="clndr.css" rel="stylesheet" type="text/css"/>

	<script src="jquery-2.1.4.min.js"  type="text/javascript" ></script>
	<script src="json2.js"></script>
	<script src="underscore-min.js"></script>
	<script src= "moment-2.8.3.js"></script>
	<script src="clndr.js"></script>
	<script src="site.js"></script>	
	</script>
</head>
 
 <body>
 
 <div id = "container">
    <div id="header">
	部务会议题管理系统
	</div>

    <div id="main">
        <div id="left">
		
			<div class="cal1">
			</div>
		</div>
		
		<div id="right">
			会议时间：<br/><br/><br/><br/>
			<form>
				议题序号：
				<select name="discuss_number">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				</select>
				<br><br/><br/><br/>
				议题名称：
				<input type="text" name="discuss_name" />
			</form>
			<br/><br/><br/>
			<form action="upload_file.php" method="post" enctype="multipart/form-data">
				<label for="file">上传文件:</label>
				<input type="file" name="file" id="file" /> 
				<input type="submit" name="submit" value="上传" />				
			</form>
				
			   
		
		</div>
			
    </div>

    <div id="footer">
     宁夏自治区党委组织部 信息技术中心 版权所有
    </div>

 </div>
	
</body>
</html>
