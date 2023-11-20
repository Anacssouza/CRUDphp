<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de animal </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    
    <h1  class="mt-6 tituloCriacao "> Cadastro de Animal </h1>

    <form action="?page=salvar" class="row g-3 form" method="post" >
        <input type="hidden" name="acao" value="cadastrar">    

        <div style='display: flex; flex-direction: row; align-items: center; justify-content: center;'>
            <div style='width: 50rem'>
                <legend> Dados Do Responsável: </legend>
                <fieldset class="row g-3 border p-5" style='width: 50rem'>
                    <div class="col-md-12">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder='digite seu nome aqui'>
                    </div>
                    <div class="col-md-12">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder='digite seu endereço aqui'>
                    </div>
                    <div class="col-6">
                        <label for="celular" class="form-label"> Celular </label>
                        <input type="number" class="form-control" name="celular" placeholder="digite seu celular aqui">
                    </div>
                </fieldset>
            </div>
        </div>

        <div style='display: flex; flex-direction: row; align-items: center; justify-content: center;'>
            <div style='width: 50rem'>
                <legend> Dados do Animal: </legend>
                <fieldset class="row g-3 border p-5" style='width: 50rem'>
                    
                    <div class="col-md-6">
                        <label for="nomePet" class="form-label"> Nome </label>
                        <input type="text" class="form-control" name="nomePet" placeholder='digite o nome do animalzinho aqui'>
                    </div>
                    <div class="col-md-6">
                        <label for="idade" class="form-label"> Idade </label>
                        <input type="number" class="form-control" name="idade" placeholder='informe a idade do pet aqui'>
                    </div>
                    <div class="col-6">
                        <label for="especie" class="form-label"> Espécie </label>
                        <input type="text" class="form-control" name="especie" placeholder="digite qual a especie aqui">
                    </div>
                    <div class="col-md-6">
                        <label for="raca" class="form-label"> Raça </label>
                        <input type="text" class="form-control" name="raca" placeholder="digite qual a raça aqui">
                    </div>
                    <div class="col-md-6">
                        <label for="tamanho" class="form-label"> Tamanho </label>
                        <input type="number" class="form-control" name="tamanho" placeholder="digite o tamanho do animal aqui">
                    </div>
                    <div class="col-md-6">
                        <label for="peso" class="form-label"> Peso </label>
                        <input type="number" class="form-control" name="peso" placeholder="digite o peso do animal aqui">
                    </div>
                </fieldset>
            </div>
        </div>

        <div style='display: flex; flex-direction: row; align-items: center; justify-content: center;'>
            <div style='width: 50rem;'>
                <legend> Triagem: </legend>
                <fieldset class="row g-3 border p-5" style='width: 50rem; justify-content: space-around;'>
                    <div class="col-md-12">
                        <label for="motivoConsulta" class="form-label"> Motivo da consulta: </label>
                        <input type="text" class="form-control" name="motivoConsulta" placeholder=' coloque aqui o motivo da consulta'>
                    </div>
                    <div class="col-md-12">
                        <label for="doencas" class="form-label"> Doenças pré existentes </label>
                        <input type="text" class="form-control" name="doencas" placeholder='informe se o animal possui doenças pré existentes e quais'>
                    </div>
                    <div class="col-md-12">
                        <label for="medicacoes" class="form-label"> Medicações controladas </label>
                        <input type="text" class="form-control" name="medicacoes" placeholder='informe se o animal possui medicações controladas e quais'>
                    </div>
                    <div class="col-md-4">
                        <label for="dataConsulta" class="form-label"> Data da última consulta </label>
                        <input type="date" class="form-control" style="width:9rem;" name="dataConsulta" placeholder='informe a data da ultima vez que o animal se consultou'>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label"> Vacinas em dia? </label>
                        <input type="text" class="form-control" name="vacinas" placeholder='o animal possui todas as vacinas?'>
                    </div>
                    <div class="col-md-2" style='align-items: center; justify-content: center;'>
                        <label class="form-label"> Possui Plano? </label>
                        <input type="text" class="form-control" name="plano" placeholder='possui plano?'>
                    </div>
                </fieldset>
            </div> 
        </div>
        <div style='display: flex; flex-direction: row; align-items: center; justify-content: center;'>
            <a class="btn btn-light" href="?page=listar" > Voltar </a>
            <input type="submit" value="Enviar"  class="btn btn-success">
            
        </div>

    </form>

</body>
</html>




