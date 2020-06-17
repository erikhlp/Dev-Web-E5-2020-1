<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atividade de autoconhecimento</title>

    <style>
        body {
            background-color: #F25D23;
        }

        .container {
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }

        .form {
            background-color: white;
            border-radius: 8px;
            width: 30%;
            height: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            padding-left: 14px;
            padding-right: 14px;
            padding-bottom: 14px;
        }

        .form h1 {
            color: rgb(255, 191, 64);
            font-size: 16px;
            font-family: Roboto, sans-serif;
        }

        .form form {
            width: 100%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding-left: 10px;
            padding-right: 10px;
        }

        .campo {
            color: #5a5a5a;
            background-color: #ffffff;
            border-bottom-style: solid;
            border-left-style: solid;
            border-right-style: solid;
            border-top-style: solid;
            border-color: #aeaeae;
            border-radius: 4px;
            border-width: 1px;
            font-family: Roboto, sans-serif;
            font-size: 16px;
            height: 28px;
            width: 100%;
            margin: auto;
            margin-bottom: 10px;
            cursor: auto;
        }

        option {
            font-size: 16px;
        }

        .envio {
            background-color: #F25D23;
            color: white;
            border-radius: 5px;
            font-size: 24px;
            line-height: 36px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Inventário de personalidade ocupacional</h1>
            <strong>Preencha os campos abaixo para realizar sua atividade de autoconhecimento.</strong> <br/>
            <form method="post" action="resultado.php">
                <label>Nome*</label>
                <input name="nome" type="text" data-use-type="STRING" class="campo" placeholder="Nome" required="required">

                <label>Email*</label>
                <input name="email" type="text" data-use-type="STRING" class="campo" placeholder="Email" required="required">

                <label>Data de Nascimento*</label>
                <input name="ano" type="text" data-use-type="STRING" class="campo" placeholder="Data de Nascimento" required="required">

                <label>RG*</label>
                <input name="rg" type="text" data-use-type="STRING" class="campo" placeholder="RG" required="required">

                <label>Celular*</label>
                <input name="celular" type="text" data-use-type="STRING" class="campo" placeholder="(XX) XXXXX-XXXX" required="required">

                <label>Endereco*</label>
                <input name="endereco" type="text" data-use-type="STRING" class="campo" placeholder="Rua ou Avenida" required="required">

                <label>Numero*</label>
                <input name="numero" type="text" data-use-type="STRING" class="campo" placeholder="ex: 123" required="required">

                <label>Complemento*</label>
                <input name="complemento" type="text" data-use-type="STRING" class="campo" placeholder="Apto" required="required">

                <label>Bairro*</label>
                <input name="bairro" type="text" data-use-type="STRING" class="campo" placeholder="Bairro" required="required">

                <label>Estado*</label>
                <input name="estado" type="text" data-use-type="STRING" class="campo" placeholder="UF" required="required">

                <label>Cidade*</label>
                <input name="cidade" type="text" data-use-type="STRING" class="campo" placeholder="Cidade" required="required">

                <label>Nome da Escola*</label>
                <input name="nomeEscola" type="text" data-use-type="STRING" class="campo" placeholder="Nome da Escola" required="required">

                <label>Bairro da Escola*</label>
                <input name="bairroEscola" type="text" data-use-type="STRING" class="campo" placeholder="Bairro da Escola" required="required">

                <label>Turma*</label>
                <input name="turma" type="text" data-use-type="STRING" class="campo" placeholder="Turma" required="required">

                <label>Ano Escolar*</label>
                <select class="campo" data-use-type="STRING" name="anoEscolar" required="required">
                    <option value="">Selecione</option>
                    <option value="Primeiro ano">Primeiro ano</option>
                    <option value="Segundo ano">Segundo ano</option>
                    <option value="Terceiro ano">Terceiro ano</option>
                    <option value="Outros">Outros</option>
                </select>

                <label>Perfil da Escola*</label>
                <select class="campo" data-use-type="STRING" name="perfilEscola" required="required">
                    <option value="">Selecione</option>
                    <option value="Particular">Particular</option>
                    <option value="Pública">Pública</option>
                </select>

                <label>Sou bastante autêntico e digo aquilo que penso.*</label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>
                </select>

                <label>
                    Sou tímido, penso muito antes de me expor.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>
                </select>

                <label>
                    Questões intelectuais profundas não me interessam.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>
                </select>

                <label>
                    Sou persistente e não desisto até atingir meus objetivos.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    As pessoas podem contar comigo. Sou bastante estável em minhas ações.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de trabalhar com materiais, com as mãos, objetos e instrumentos.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Consigo aguentar por um bom tempo uma atividade física ou intelectual.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Dou muito valor para o dinheiro.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sei utilizar instrumentos e aparelhos eletrônicos.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Aceito bem as regras, limites, ordens e o contexto no qual vivo.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoR_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de observar, analisar e entender o modo como as coisas, a natureza ou as pessoas funcionam.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Não sou muito impulsivo, penso antes de agir.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Áreas como matemática ou ciências me atraem. Gosto de estudar um assunto a fundo.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Tenho facilidade para aprender.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou racional para tomar uma decisão ou para decidir o melhor caminho a seguir.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou muito organizado e detalhista.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou capaz de dar respostas precisas sobre datas, valores e descrever bem determinada situação do passado.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Tenho um grande senso crítico. As coisas sempre podem ser melhoradas.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de tomar minhas próprias decisões, mesmo que seja diferente do pensamento da maioria.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Tenho boa habilidade lógica ou matemática.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoI_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    É difícil para mim aceitar regras, limites e algo que me é imposto.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Para mim, é fácil viver em um ambiente desorganizado e fazer as coisas sem uma lógica.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou muito sensível. Uso mais a emoção nas minhas decisões.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou uma pessoa idealista. Acredito que possamos construir um mundo melhor.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de criar, inventar, idealizar e fantasiar.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de causar impacto, provocando, entretendo, seduzindo, encantando as pessoas.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de descobrir novas possibilidades para as coisas e situações da vida.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Muitas vezes não penso muito antes de tomar uma decisão, nem meço as consequências.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de me expressar, de representar ou de me mostrar em público.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou responsável por minhas atitudes e decisões.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoA_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de liderar, de organizar ou de mobilizar um grupo em torno de uma causa ou ação.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de ajudar e colaborar com os outros. Sou leal e gosto de fazer o bem.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Uso a emoção e a sensibilidade para tomar decisões.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Em geral sou uma pessoa agradável e fácil de lidar.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou idealista e quero mais da vida.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Questões éticas, de justiça ou bem-estar comum são importantes para mim.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou responsável. Podem contar comigo porque sempre correspondo ao esperado.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Costumo me dedicar a pessoas, ou a causas, "vestindo a camisa" de um grupo ou clube que eu acredite.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    No geral, me relaciono bem com os outros. Tenho facilidade para dialogar.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de ajudar, ensinar, cuidar, de alguma forma quero ser importante para os outros.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoS_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou firme e confiante em minhas decisões e não preciso de palpites.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Muitas vezes consigo convencer as pessoas sobre determinado ponto de vista.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou uma pessoa motivada, autoincentivada, otimista.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Falo muito. Não desisto facilmente de uma argumentação.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Dou muito valor aos bens materiais. Gosto de comprar e, às vezes, até de demonstrar aos outros minhas conquistas, meus bens materiais, minha sabedoria e meus talentos.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Tomo decisões rapidamente. Ajo sem refletir muito. Chego a ser impulsivo.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de estar no meio das pessoas, especialmente para mostrar a elas o modo como penso.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto muito de aventuras, de me arriscar e de desafios.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Estou sempre procurando novas oportunidades, novos caminhos a seguir.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Prefiro ser o dono de um negócio do que trabalhar para alguém.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoE_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Aceito bem as regras e o contexto no qual vivo. Gosto de limites claros.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_01"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou introvertido, me resguardo e não me exponho muito.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_02"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Cuido de minhas coisas e gosto de conservá-las.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_03"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou bem calmo e tenho bom equilíbrio emocional.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_04"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Prefiro ter um plano de ação, uma rotina definida de trabalho.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_05"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou um tipo de pessoa estável, confiável, adequada á realidade.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_06"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Respeito a ética, guardo segredos, cumpro com meus combinados.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_07"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Sou muito organizado e detalhista nas coisas. Eficácia é muito importante para mim.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_08"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Eu vou até o fim em meus objetivos. Não desisto até atingi-los.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_09"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>

                <label>
                    Gosto de satisfazer os outros em relação aquilo que me pedem.*
                </label>
                <select
                        class="campo"
                        data-use-type="STRING"
                        name="tipoC_010"
                        required="required"
                >
                    <?php require 'FormOptions.php' ?>

                </select>


                <input type="submit" name="cadastrar" class="envio" placeholder="Enviar">

            </form>

        </div>
    </div>
</body>
</html>
<!---->
<?php
//function calculateValueType($var1, $var2, $var3, $var4 , $var5, $var6, $var7, $var8, $var9, $var10) {
//    $varAll = ((($var1 + $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10)/30)*100) ;
//    round($varAll, 2);
//    return $varAll;
//}
//
//if (isset($_POST['cadastrar'])) {
//    require_once 'conexao.php';
//    require_once 'classes/pessoa.php';
//    require_once 'DAO/pessoaDAO.php';
//
//    $pessoa = new pessoa();
//    $pessoa->setEmail($_POST['email']);
//    $pessoa->setNome($_POST['nome']);
//    $pessoa->setAno($_POST['ano']);
//    $pessoa->setRg($_POST['rg']);
//    $pessoa->setCelular($_POST['celular']);
//    $pessoa->setEndereco($_POST['endereco']);
//    $pessoa->setNumero($_POST['numero']);
//    $pessoa->setComplemento($_POST['complemento']);
//    $pessoa->setBairro($_POST['bairro']);
//    $pessoa->setEstado($_POST['estado']);
//    $pessoa->setCidade($_POST['cidade']);
//    $pessoa->setNomeEscola($_POST['nomeEscola']);
//    $pessoa->setBairroEscola($_POST['bairroEscola']);
//    $pessoa->setAnoEscolar($_POST['anoEscolar']);
//    $pessoa->setTurma($_POST['turma']);
//    $pessoa->setPerfilEscola($_POST['perfilEscola']);
//
//    $resultadoR = calculateValueType($_POST['tipoR_01'], $_POST['tipoR_02'], $_POST['tipoR_03'], $_POST['tipoR_04'], $_POST['tipoR_05'], $_POST['tipoR_06'], $_POST['tipoR_07'], $_POST['tipoR_08'], $_POST['tipoR_09'], $_POST['tipoR_010']);
//    $resultadoI = calculateValueType($_POST['tipoI_01'], $_POST['tipoI_02'], $_POST['tipoI_03'], $_POST['tipoI_04'], $_POST['tipoI_05'], $_POST['tipoI_06'], $_POST['tipoI_07'], $_POST['tipoI_08'], $_POST['tipoI_09'], $_POST['tipoI_010']);
//    $resultadoA = calculateValueType($_POST['tipoA_01'], $_POST['tipoA_02'], $_POST['tipoA_03'], $_POST['tipoA_04'], $_POST['tipoA_05'], $_POST['tipoA_06'], $_POST['tipoA_07'], $_POST['tipoA_08'], $_POST['tipoA_09'], $_POST['tipoA_010']);
//    $resultadoS = calculateValueType($_POST['tipoS_01'], $_POST['tipoS_02'], $_POST['tipoS_03'], $_POST['tipoS_04'], $_POST['tipoS_05'], $_POST['tipoS_06'], $_POST['tipoS_07'], $_POST['tipoS_08'], $_POST['tipoS_09'], $_POST['tipoS_010']);
//    $resultadoE = calculateValueType($_POST['tipoE_01'], $_POST['tipoE_02'], $_POST['tipoE_03'], $_POST['tipoE_04'], $_POST['tipoE_05'], $_POST['tipoE_06'], $_POST['tipoE_07'], $_POST['tipoE_08'], $_POST['tipoE_09'], $_POST['tipoE_010']);
//    $resultadoC = calculateValueType($_POST['tipoC_01'], $_POST['tipoC_02'], $_POST['tipoC_03'], $_POST['tipoC_04'], $_POST['tipoC_05'], $_POST['tipoC_06'], $_POST['tipoC_07'], $_POST['tipoC_08'], $_POST['tipoC_09'], $_POST['tipoC_010']);
//
//    $pessoa->setResultadoR($resultadoR);
//    $pessoa->setResultadoI($resultadoI);
//    $pessoa->setResultadoA($resultadoA);
//    $pessoa->setResultadoS($resultadoS);
//    $pessoa->setResultadoE($resultadoE);
//    $pessoa->setResultadoC($resultadoC);
//
//
//
//    $pessoaDAO = new pessoaDAO();
//    $pessoaDAO->InsertPessoa($pessoa);
//}