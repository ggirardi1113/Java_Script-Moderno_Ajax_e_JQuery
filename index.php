<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viagens</title>
    <?php include 'conexao.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Calcular Gastos</h1>
    <form action="" method="post">
    <label for="nomeMotorista" class="form-label">Nome do Motorista</label>
    <input type="text" id="nomeMotorista" class="form-control" name="nomeMotorista" placeholder="Nome do Motorista"><br>
    <label for="modelo" class="form-label">Modelo do Carro</label>
    <input type="text" id="modelo" class="form-control" name="modelo" placeholder="Modelo do Carro"><br>
    <label for="placa" class="form-label">Placa do Carro</label>
    <input type="text" id="placa" class="form-control" name="placa" placeholder="Placa do Carro"><br>
    <label for="origem" class="form-label">Local de origem</label>
    <input type="text" id="origem" class="form-control" name="origem" placeholder="Local de origem"><br>
    <label for="destino" class="form-label">Local do destino</label>
    <input type="text" id="destino" class="form-control" name="destino" placeholder="Local do destino"><br>
    <label for="gasolinaGasta" class="form-label">Gasolina Gasta (Litros)</label>
    <input type="number" id="gasolinaGasta" class="form-control" name="gasolinaGasta" placeholder="Litros"><br>
    <label for="preco" class="form-label">Preço da Gasolina atual</label>
    <input type="number" id="preco" class="form-control" name="preco" placeholder="Preço"><br>
    <label for="distancia" class="form-label">Distância Percorrida (KM)</label>
    <input type="number" id="distancia" class="form-control" name="distancia" placeholder="Distância"><br>
    <input type="button" value="salvar" id='salvar'>
    </form>
    <p id="resultado"></p>

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
        <td>origem</td>
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
  </body>
  <script src="funcoes.js"></script>
</html>