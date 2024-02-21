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

    include 'header.php';
    include 'conexao_bd.php';

    $sql = "SELECT * FROM professor ORDER BY nome";

    $resultado = retornarDados($sql);

    ?>

    <form name="formListar" action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                    <h1>Cliente - Listar</h2>

                    <div class="form-group">
                        <table>
                            <tr>
                            <td>Nome</td>
                            <td>Formação</td>
                            <td>Tempo de Experiência</td>
                            <td>Escola Antiga</td>
                            <td>Turno</td>
                            </tr>

                            <?php while ($linha = mysqli_fetch_assoc($resultado)) 
                            {
                                $nome = $linha["nome"];
                                $formacao = $linha["formacao"];
                                $tempo_exp = $linha["tempo_exp"];
                                $escola_ant = $linha["escola_ant"];
                                $turno = $linha["turno"];
                            
                            ?>
                            <tr>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $formacao ?></td>
                            <td><?php echo $tempo_exp ?></td>
                            <td><?php echo $escola_ant ?></td>
                            <td><?php echo $turno ?></td>
                            </tr>

                            <?php } ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </form>
</body>
</html>