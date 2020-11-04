<!DOCTYPE html>
<html>
<head>
	<title>Modelo chat básico</title>
	<link rel="stylesheet" href="../css/style.css">
	
		
</head>
<body>
<div id="lista">
</div>
<div id="form-chat">
	<form id="chat" action="" method="post">
                    <label>Nome:</label><br><input type="text" name="nome" id="nome" required/>
                    <br><br><label>Mensagem:</label><br><textarea type="text" name="mensagem" id="mensagem" required></textarea>
                   
                    <br/><br/>
                    <input type="button" value="Enviar" id="enviar" />
    </form>

    <div id="news-message"><i class="fas fa-chevron-down" onclick="rolar()"></i></div>
</div>
</body>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script src="https://kit.fontawesome.com/d3beb9c95a.js" crossorigin="anonymous"></script>
</html>