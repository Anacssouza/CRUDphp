<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $celular = $_POST["celular"];

            $nomePet = $_POST["nomePet"];
            $idade = $_POST["idade"];
            $especie = $_POST["especie"];
            $raca = $_POST["raca"];
            $tamanho = $_POST["tamanho"];
            $peso = $_POST["peso"];

            $motivo = $_POST["motivoConsulta"];
            $doencas = $_POST["doencas"];
            $medicacoes = $_POST["medicacoes"];
            $data = $_POST["dataConsulta"];
            $vacinas = $_POST["vacinas"];
            $possuiPlano = $_POST["plano"];

            $sql = "INSERT INTO cadastro (nome, endereco, celular, nomePet, idade, especie, raca, tamanho, peso, motivoConsulta, doencas, medicacoes, dataConsulta, vacinas, plano) VALUES ('{$nome}', '{$endereco}', '{$celular}', '{$nomePet}', '{$idade}', '{$especie}', '{$raca}', '{$tamanho}', '{$peso}', '{$motivo}', '{$doencas}', '{$medicacoes}', '{$data}', '{$vacinas}', '{$possuiPlano}')";

            $res = $conn->query($sql); #execução da query

            if($res==true){
                print "<script> alert('Animal Cadastrado com sucesso') </script>";
                print "<script> location.href='?page=listar' </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar') </script>";
                print "<script> location.href='?page=listar' </script>";
            }

            break;

        case 'editar':
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $celular = $_POST["celular"];

            $nomePet = $_POST["nomePet"];
            $idade = $_POST["idade"];
            $especie = $_POST["especie"];
            $raca = $_POST["raca"];
            $tamanho = $_POST["tamanho"];
            $peso = $_POST["peso"];

            $motivo = $_POST["motivoConsulta"];
            $doencas = $_POST["doencas"];
            $medicacoes = $_POST["medicacoes"];
            $data = $_POST["dataConsulta"];
            $vacinas = $_POST["vacinas"];
            $possuiPlano = $_POST["plano"];

            $sql = "UPDATE cadastro SET 
                        nome ='{$nome}', 
                        endereco = '{$endereco}', 
                        celular = '{$celular}', 
                        nomePet = '{$nomePet}', 
                        idade = '{$idade}', 
                        especie = '{$especie}', 
                        raca = '{$raca}', 
                        tamanho ='{$tamanho}', 
                        peso = '{$peso}', 
                        motivoConsulta = '{$motivo}', 
                        doencas = '{$doencas}', 
                        medicacoes = '{$medicacoes}', 
                        dataConsulta = '{$data}', 
                        vacinas = '{$vacinas}', 
                        plano ='{$possuiPlano}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql); #execução da query

            if($res==true){
                print "<script> alert('Editado com sucesso') </script>";
                print "<script> location.href='?page=listar' </script>";
            } else {
                print "<script> alert('Não foi possível editar') </script>";
                print "<script> location.href='?page=listar' </script>";
            }

            break;
        
        case 'excluir':
            
            $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script> alert('Excluído com sucesso') </script>";
                print "<script> location.href='?page=listar' </script>";
            } else {
                print "<script> alert('Não foi possível excluir.') </script>";
                print "<script> location.href='?page=listar' </script>";
            }


            break;
        
        default:
            break;
    }





?>