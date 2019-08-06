<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div id="load"> <p>click></p</div>
		<p>cố lên nào fighting!</p>
	<div id="noidung"></div>
	<p>không có gì khó khăn hết chỉ cần kiên nhẫn thôi</p>
	<p>hehehehehe thêm thêm</p>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#load").click(function(e){
			e.preventDefault();
			 // e.preventDefault();
			$.ajax({
				url: "vidu.php",
				type: 'POST',
				dataType: 'html',
				data: {
					toi: "Lê Thị Ngọc Ánh",
					sinh: "05/06/1997",
					loi: "Xin cảm ơn rất nhiều vì tất cả"
				}
			}).done(function(ketqua){
				console.log(ketqua);
				$("#noidung").html(ketqua);
			});
		});
	});
</script>
</html>