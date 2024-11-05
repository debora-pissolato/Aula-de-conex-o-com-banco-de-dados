<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1 allign="center">Confirmação de Envio!!</h1>

       <?php
       $conexao =new mysqli("localhost","root","","formulario");

       if (isset($_POST['cnome']).($_POST['cemail']).($_POST['ccomentario']));
       {
        $cnome = mysqli_real_escape_string($conexao,$_POST['cnome']);
        $cemail = mysqli_real_escape_string($conexao,$_POST['cemail']);
        $ccomentario = mysqli_real_escape_string($conexao,$_POST['ccomentario']);

        $query = "INSERT INTO dados (nome, email, comentario) VALUES ('$cnome','$cemail','$ccomentario')";

        mysqli_query($conexao, $query);
       }
       
       echo "<center> <p> Obrigado <b>$cnome!!</b><br><br> Seu comentário foi enviado com Sucesso!!! </p> </br></center>";

       ?>

<div style="text-align: center;"><a href="index.html">Voltar</a></div>

</body>
</html>