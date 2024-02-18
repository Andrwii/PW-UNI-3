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
    ?>

   
    <div class="container-xxl py-5">
            <div class="container">
                <div class="footer">

                <?php 
                include 'header.php';
                ?>

                <h1> CADASTRAR PROFESSOR </h1>

                <form action="cadastro_professor_salvar.php" method="post">

                <ul>
                    <li>
                    <div class="col-sm-6">
                            <input type="text" name="txtNome" class="form-control border-0" id="pnome" placeholder="Nome">
                    </div>
                    </li>
                    <li></li>
                    <li>
                    <div class="col-sm-6">
                            <input type="text" class="form-control border-0" name="txtFormacao" id="pformacao" placeholder="Formação">
                    </div>
                    </li>
                    <li></li>
                    <li>
                    <div class="col-sm-6">
                            <input type="number" class="form-control border-0" name="TempoExp" id="ptempo" placeholder="Tempo de Eperiência">
                    </div>
                    </li>
                    <li></li>
                    <li>
                    <div class="col-sm-6">
                            <input type="text" class="form-control border-0" name="txtEscolaAnt" id="pescant" placeholder="Escola Anterior">
                    </div>
                    </li>
                    <li></li>
                    <li>
                            <select name="turno" class="form-control border-0" id="">
                            <option>Matutino</option>
                            <option>Vespertino</option>
                            <option>Noturno</option>
                            </select>
                    </li>
                    <li></li>
                    <li>
                        <input type="submit" value="Enviar" class="btn btn-primary w-10 py-2">
                    </li>
                </ul>
                </div>
            </div>    
    </div>         
    </form>
</body>
</html>