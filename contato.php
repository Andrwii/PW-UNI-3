<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Kider - Escola Bilingue</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php 
include 'header.php'
?>

<form action="" method="post">
        <div class="container-xxl py-5">
        <div class="container">
        <h1> FALE CONOSCO </h1>   

        <ol>
            <li>
                <input type="text"  class="form-control border-0" name="txtNome" id="" placeholder="Nome">
            </li>
            <li><br></li>
            <li>
                <input type="text"  class="form-control border-0" name="txtEmail" id="" placeholder="E-mail">
            </li>
            <li><br></li>
            <li>
                <input type="text"  class="form-control border-0" name="txtAssunto" id="" placeholder="Assunto">
            </li>
            <li><br></li>
            <li>
                <textarea type=""  class="form-control border-0" name="txtMensagem" id="" placeholder="Mensagem"></textarea>
            </li>
            <li><br></li>
            <li>
                <input type="submit" value="Enviar" class="btn btn-primary w-10 py-2tn">
            </li>
        </ol>        
</form>    



</body>
</html>