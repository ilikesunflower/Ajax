<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get and Post</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div>
		<p id="ductinh">Những đức tính cần có để trở thành lập trình viên tốt.</p>
	</div>
	<div id="noidung"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#ductinh").click(function(e){
			e.preventDefault();
            $.get('text.php',{
            	one: "Hai ba bốn",
            	two: "năm sáu bảy"
            } ,function(ketqua) {
            
                $('#noidung').html(ketqua);
                $('#noidung').html($("#p").html());
            });
  			  // e.preventDefault();
       //      $.get('text.php', {
       //          em: "Em Yêu Anh",
       //          anh: "Anh không phải người dễ dãi nhé"
       //      },function(ketqua) {
       //          $('#noidung').html(ketqua);
       //      });
            
		});
	});
</script>
</html>
