<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <br/>
        <input type="text" value="" id="number"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    
</body>
<script type="text/javascript">
            function load_ajax(){
                $.ajax({
                    url : "result.php",
                    type : "post",
                    dataType:"json",
                    data : {
                         number : $('#number').val()
                    },
                    success : function (result){
                        console.log(result);
                        $("#result").html(result);
                        alert()
                    }
                });
            }
</script>
</html>