<!DOCTYPE html> 
<html> 
<head> 
	<title>Contact Us</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
</head> 
<body> 
    <script language="javascript">
$(document).ready(function() {
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
    $('#form, #fat, #fo3').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#result').html(data);

            }
        })
        
        return false;
    }); 
})  
</script>
<style type="text/css">
<!--
body,td,th {
	color: #333333;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
fieldset {
	width:380px;
	margin:auto;
}
#result {
	width:280px;
	padding:10px;
	border:1px solid #bfcddb;
	margin:auto;
	margin-top:10px;
	text-align:center;
}
-->
</style>
<div data-role="page">

	<div data-role="header">
		<h1>Contact Us</h1>
	</div><!-- /header -->

	<div data-role="content">	
	<div data-role="content">
            <form method="post" action="analizar.php" name="form1" id="form1">
                <div id="login" data-role="fieldcontain">  
                <label id="usuario1" for="usuario">usuario</label>  
                <input id="login" name="login" type="text" />  
                </div>  
                <div id="login" data-role="fieldcontain">  
                    <label for="password">password</label>  
                    <input id="password" name="password" type="password" />  
                </div>  
                <div id="login" data-role="fieldcontain">  
                    <label for="Enviar"></label>  
                    <input id="enviar" name="enviar" type="submit" value="enviar" onSubmit="javascript:enviar();"/>  
                </div>  
            </form>
        </div>
            
 
	</div><!-- /content -->

	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>