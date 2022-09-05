<?php
include_once 'conexao.php';
        $sql = "INSERT INTO viagens(placa, nome_motorista, modelo_carro, origem, destino, gasolina_gasta, km_rodado, valor_gasilina) 
        VALUES (:Placa, :NomeMotorista, :Modelo, :Origem, :Destino, :GasolinaGasta, :Distancia, :Preco)";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "Placa"=>$_POST['Placa'], 
            "NomeMotorista"=>$_POST['NomeMotorista'], 
            "Modelo"=>$_POST['Modelo'],
            "Origem"=>$_POST['Origem'],
            "Destino"=>$_POST['Destino'],
            "GasolinaGasta"=>$_POST['GasolinaGasta'],
            "Preco"=>$_POST['Preco'],
            "Distancia"=>$_POST['Distancia']
        ));
?>