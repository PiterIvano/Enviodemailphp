
<!DOCTYPE html>
<html>
<head>
 <title>Enviar Gmail</title>
 <link rel="icon" type="image/png" href="icono.ico" />
<meta content="utf-8" name="charset">
<meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport">
    <meta property="og:type" content="website">
<meta property="og:title" content="EnviarGmail">
    <meta property="og:url" content="Anonimo y seguro">
<meta property="og:site_name" content="index.html">
    <meta property="og:image" content="Gmail.png">





 <style type="text/css">


    * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

 
        body{

  background:url(cine.jpg) no-repeat fixed;
  background-size:cover;
  background-position:50%;
  color: white;
      
       
}

     
     form{
color: blue;
    background: radial-gradient(ellipse at center,);
  border: 1px solid #2d416d;
  -webkit-box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  width: 760px;
  height: 550px;
  margin: 60px auto;
  padding: 0px 50px 30 30px;
  text-align: center;
}

fieldset{
color: blue;
    background: radial-gradient(ellipse at center,);
  border: 1px solid #2d416d;
  -webkit-box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  width: 320px;
  height: 350px;
  margin: 60px auto;
  padding: 30px 30px 0 30px;
  text-align: center;
}

input{
    margin: 12px;
    padding: 8px;
    width: 600px;
    
}

textarea{
    font-size: 15px;
    margin: 15px;
    padding: 10px;
    min-width: 600px;
    max-width: 600px;
    min-height: 100px;
    max-height: 100px;
}

.boton{
     font-size: 25px;
}


 </style>
 

</head>
<body>

 <form id="contactform" action="correo.php" name="contactform" method="POST">
    <fieldset>

        <div>
            <input type="email" name="email1" placeholder="Enviar Con El Correo" required>
        </div>
        
        <div>
            <input type="email" name="email2" placeholder="Enviar A=" required>
        </div>
        <div>
            <input type="text" name="asunto"  placeholder="Asunto" required>
        </div>
        
        <div>
            <textarea name="mensaje" rows="6"placeholder="Mensaje" required></textarea>
        </div>
        <input class="boton" type="submit" name="enviar" value="Enviar">
    </fieldset>
    <h2>Created By Piter <a href="https://www.youtube.com/channel/UCSKfCaD1LNJvAioh4N4Flsw" target="_black">Link Del Canal</a></h2>
         
</form>
</body>
</html>