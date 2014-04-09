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
		<h1>REGISTRO DE USUARIO</h1>
	</div><!-- /header -->

	<div data-role="content">	
	
         <form method="post" action="envio.php" id="fo3" name="fo3" >
     
      	<legend>Perfil</legend>
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Nombres (*):</label>
		<input type="text" name="nombre" value="" placeholder="Inserte Nombres" class="required" id="firstname" />
	</div>
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Apellidos (*):</label>
		<input type="text" name="apellidos" value="" placeholder="Inserte Apellidos" class="required" id="firstname" />
	</div>
        
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Login :</label>
		<input type="text" name="login" value="" placeholder="" class="required" id="firstname" />
	</div>
        
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Password :</label>
		<input type="password" name="password" value="" placeholder="" class="required" id="firstname" />
	</div>
        
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Repetir Password :</label>
		<input type="password" name="password" value="" placeholder="" class="required" id="firstname" />
	</div>
        
        <div data-role="fieldcontain" class="text-field">
		<label for="firstname">Correo :</label>
		<input type="text" name="email" value="" placeholder="" class="required" id="firstname" />
	</div>
        
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
                <legend>Sexo :</legend>
                    <input type="radio" name="sexo" id="radio-choice-1" value="Hombre"/>
                    <label for="radio-choice-1">Hombre</label>

                    <input type="radio" name="sexo" id="radio-choice-2" value="Mujer"  />
                    <label for="radio-choice-2">Mujer</label>
           </fieldset>
        </div>
        <input type="submit"   name="mysubmit" value="Enviar" />
     </form>

</div>
<div id="result"></div>
</div>
            
 
	</div><!-- /content -->

	<div data-role="footer">
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>