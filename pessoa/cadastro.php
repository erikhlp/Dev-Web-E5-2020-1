<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    <form method="post" action="cadastro.php" >
        <span>Email:</span><input type="text" name="email" /> <br />
        <span>Nome:</span><input type="text" name="nome" /> <br />
        <span>Data de Nascimento:</span><input type="text" name="ano" /> <br />
        <span>Rg:</span><input type="number" name="rg" /> <br />
        <span>Celular:</span><input type="number" name="celular" /> <br />
        <span>Endereço:</span><input type="text" name="endereco" /> <br />
        <span>Numero:</span><input type="number" name="numero" /> <br />
        <span>Complemento:</span><input type="text" name="complemento" /> <br />
        <span>Bairro:</span><input type="text" name="bairro" /> <br />
        <span>Estado:</span><input type="text" name="estado" /> <br />
        <span>Cidade:</span><input type="text" name="cidade" /> <br />
        <span>Nome da Escola:</span><input type="text" name="nomeEscola" /> <br />
        <span>Bairro da Escola:</span><input type="text" name="bairroEscola" /> <br />
        <span>Ano da Escola:</span><input type="text" name="anoEscolar" /> <br />
        <span>Turma:</span><input type="text" name="turma" /> <br />
        <span>Perfil da Escola:</span>
          <select id="rd-select_field-ka4ak55d" class="bricks-form__input required" data-use-type="STRING" name="perfilEscola" required="required">
            <option value="">
            Selecione
            </option>
              <option value="Particular">Particular</option>
              <option value="Pública">Pública</option>
          </select> <br />
        <label for="rd-select_field-ka4ak55g" class="bricks-form__label">
            Questões intelectuais profundas não me interessam.*
        </label>
        <select
                id="rd-select_field-ka4ak55g"
                class="bricks-form__input required"
                data-use-type="STRING"
                name="teste1"
                required="required"
        >
            <option value="">
                Selecione
            </option>

            <option value="0">0 - Nada</option>

            <option value="1">1 - Às vezes</option>

            <option value="2">2 - Frequentemente</option>

            <option value="3">3 - Sou eu!</option>

        </select>

        <label for="rd-select_field-ka4ak55g" class="bricks-form__label">
            Teste:
        </label>
        <select
                id="rd-select_field-ka4ak55g"
                class="bricks-form__input required"
                data-use-type="STRING"
                name="teste2"
                required="required"
        >
            <option value="">
                Selecione
            </option>

            <option value="0">0 - Nada</option>

            <option value="1">1 - Às vezes</option>

            <option value="2">2 - Frequentemente</option>

            <option value="3">3 - Sou eu!</option>

        </select>

        <input type="submit" name="cadastrar">
    </form>

</body>
</html>

<?php

function calculateValueType($var1, $var2) {
//    return ((($var1 + $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10)/30)*100) ;
    return $var1 + $var2;
}

if (isset($_POST['cadastrar'])) {
    require_once '../conexao.php';
    require_once '../classes/pessoa.php';
    require_once '../DAO/pessoaDAO.php';

    $pessoa = new pessoa();
    $pessoa->setEmail($_POST['email']);
    $pessoa->setNome($_POST['nome']);
    $pessoa->setAno($_POST['ano']);
    $pessoa->setRg($_POST['rg']);
    $pessoa->setCelular($_POST['celular']);
    $pessoa->setEndereco($_POST['endereco']);
    $pessoa->setNumero($_POST['numero']);
    $pessoa->setComplemento($_POST['complemento']);
    $pessoa->setBairro($_POST['bairro']);
    $pessoa->setEstado($_POST['estado']);
    $pessoa->setCidade($_POST['cidade']);
    $pessoa->setNomeEscola($_POST['nomeEscola']);
    $pessoa->setBairroEscola($_POST['bairroEscola']);
    $pessoa->setAnoEscolar($_POST['anoEscolar']);
    $pessoa->setTurma($_POST['turma']);
    $pessoa->setPerfilEscola($_POST['perfilEscola']);

    $varteste = calculateValueType($_POST['teste1'], $_POST['teste2']);

    $pessoa->setResultado($varteste);



    $pessoaDAO = new pessoaDAO();
    $pessoaDAO->InsertPessoa($pessoa);
}