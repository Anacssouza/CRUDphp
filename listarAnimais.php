<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listagem de animais </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    

<h1> listagem de animais </h1>
<?php
    $sql = "SELECT * FROM cadastro";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th> Ações </th>";
        print "<th> ID </th>";
        print "<th> Nome </th>";
        print "<th> Endereço </th>";
        print "<th> Celular </th>";
        print "<th> Nome Pet </th>";
        print "<th> Idade </th>";
        print "<th> Especie </th>";
        print "<th> Raça </th>";
        print "<th> Tamanho </th>";
        print "<th> Peso </th>";
        print "<th> Motivo da Consulta </th>";
        print "<th> Doenças </th>";
        print "<th> Medicações </th>";
        print "<th> Data Última Consulta </th>";
        print "<th> Possui Vacinas? </th>";
        print "<th> Possui Plano? </th>";
        print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>
                    <button  onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'> Editar </button>
                     <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'> Excluir </button>
                    </td>";
            print "<td>" .$row->id. "</td>";
            print "<td>" .$row->nome. "</td>";
            print "<td>" .$row->endereco. "</td>";
            print "<td>" .$row->celular. "</td>";
            print "<td>" .$row->nomePet. "</td>";
            print "<td>" .$row->idade. "</td>";
            print "<td>" .$row->especie. "</td>";
            print "<td>" .$row->raca. "</td>";
            print "<td>" .$row->tamanho. "</td>";
            print "<td>" .$row->peso. "</td>";
            print "<td>" .$row->motivoConsulta. "</td>";
            print "<td>" .$row->doencas. "</td>";
            print "<td>" .$row->medicacoes. "</td>";
            print "<td>" .$row->dataConsulta. "</td>";
            print "<td>" .$row->vacinas. "</td>";
            print "<td>" .$row->plano. "</td>";

            
            print "</tr>";
        }
        print "</table>";

    }


?>
</body>
</html>