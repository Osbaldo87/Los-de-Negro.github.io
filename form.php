<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body bgcolor="gray">
<form method="POST">
    <center>
    <br>
    <br>
    <I><h4>Nombre Completo: <input type="text"></h4></I>
    <I><h4>Contraseña: <input type="password" maxlength="9" name="cont" id="co"></h4></I>
    <I><h4>Conf. Contraseña: <input type="password" maxlength="9" name="cont1 " id="co1"></h4></I>
    <label form="contra"><font color="gray">-------</font>Mostrar contraseña</label>
    <input type="radio" name="mostrar" value="contra" id="contra">
	<br>
    <p>
    </form>
    <a href="infor.html" target="principal"> <input type="submit" name="button" id="button" value="Aceptar" />
	</a>                                   
    <br>
    </p>
        <script>
		const co=document.getElementById("button");
		//const co1=document.getElementById("cont1");
		button.onclick=btn1;
		
		function btn1(){
			alert("Registro exitoso")
			/*if(co==co1){
				alert("Inicio de sesion exitoso")
			}else{
				alert("No coinciden las contraseñas")
			}*/
		}
		
		</script>
        <font color="WHITE">
        <marquee direction="left" style="background:red">123-456-7890
</marquee>
</body>
</html>