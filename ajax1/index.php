<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Load dữ liệu</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body >
	<div>
		<p style="width: 20%"><a id="load_db">lấy dữ liệu:</a></p>
		<p>Ta là chúa tể muôn loài đây .meo meo</p>
		<p>Xin hãy thêm tôi vào</p>
		<p>Cho tôi vào nữa điii</p>
	</div>
	<div id="noidung" style=""></div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#load_db").click(function(){
			$("#noidung").load("load_du_lieu.txt");
		});
		$("#load_db").mouseenter(function(){
			$(this).css("color","blue");
		});
	});
	
</script>
</html>