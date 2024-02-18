<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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
                                $turno = $linhas["turno"];
                            }
                            ?>
                            <tr>
                            <tr><?php echo $nome ?></tr>
                            <tr><?php echo $formaco ?></tr>
                            <tr><?php echo $tempo_exp ?></tr>
                            <tr><?php echo $escola_ant ?></tr>
                            <tr><?php echo $turno ?></tr>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </form>
</body>
</html>