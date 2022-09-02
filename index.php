<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viagens</title>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <?php include 'conexao.php';?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Calcular Gastos</h1>
    <form action="" method="post">
    <label for="NomeMotorista" class="form-label">Nome do Motorista</label>
    <input type="text" id="NomeMotorista" class="form-control" name="NomeMotorista" placeholder="Nome do Motorista"><br>
    <label for="Modelo" class="form-label">Modelo do Carro</label>
    <input type="text" id="Modelo" class="form-control" name="Modelo" placeholder="Modelo do Carro"><br>
    <label for="Placa" class="form-label">Placa do Carro</label>
    <input type="text" id="Placa" class="form-control" name="Placa" placeholder="Placa do Carro"><br>
    <label for="Origem" class="form-label">Local de Origem</label>
    <input type="text" id="Origem" class="form-control" name="Origem" placeholder="Local de Origem"><br>
    <label for="Destino" class="form-label">Local do Destino</label>
    <input type="text" id="Destino" class="form-control" name="Destino" placeholder="Local do Destino"><br>
    <label for="GasolinaGasta" class="form-label">Gasolina Gasta (Litros)</label>
    <input type="text" id="GasolinaGasta" class="form-control" name="GasolinaGasta" placeholder="Litros"><br>
    <label for="Preco" class="form-label">Preço da Gasolina atual</label>
    <input type="text" id="Preco" class="form-control" name="Preco" placeholder="Preço"><br>
    <label for="Distancia" class="form-label">Distância Percorrida (KM)</label>
    <input type="text" id="Distancia" class="form-control" name="Distancia" placeholder="Distância"><br>
    <input type="submit" value="Salvar" id='salvar'>
    </form>
    <script type="text/javascript" language="javascript">
    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#salvar').click(function() {
            var dados = $('#cadUsuario').serialize();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'salvar.php',
                async: true,
                data: dados,
                success: function(response) {
                    location.reload();
                }
            });
        });
    });
</script>
<?php
    $sql = 'SELECT * FROM viagens';
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>
<hr><br><table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Modelo</td>
        <td>Placa</td>
        <td>Origem</td>
        <td>destino</td>
        <td>KM</td>
        <td>Gasilina L</td>
        <td>Valor(Gasolina)</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['nome_motorista']; ?></td>
                    <td><?php echo $row['modelo_carro']; ?></td>
                    <td><?php echo $row['placa']; ?></td>
                    <td><?php echo $row['origem']; ?></td>
                    <td><?php echo $row['destino']; ?></td>
                    <td><?php echo $row['km_rodado']; ?></td>
                    <td><?php echo $row['gasolina_gasta']; ?></td>
                    <td><?php echo $row['valor_gasilina']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>