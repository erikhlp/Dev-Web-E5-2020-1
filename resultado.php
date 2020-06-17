<?php
function calculateValueType($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10)
{
    $varAll = ((($var1 + $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10) / 30) * 100);
    round($varAll, 2);
    return $varAll;
}

if (isset($_POST['cadastrar'])) {
    require_once 'conexao.php';
    require_once 'classes/pessoa.php';
    require_once 'DAO/pessoaDAO.php';

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

    $resultadoR = calculateValueType($_POST['tipoR_01'], $_POST['tipoR_02'], $_POST['tipoR_03'], $_POST['tipoR_04'], $_POST['tipoR_05'], $_POST['tipoR_06'], $_POST['tipoR_07'], $_POST['tipoR_08'], $_POST['tipoR_09'], $_POST['tipoR_010']);
    $resultadoI = calculateValueType($_POST['tipoI_01'], $_POST['tipoI_02'], $_POST['tipoI_03'], $_POST['tipoI_04'], $_POST['tipoI_05'], $_POST['tipoI_06'], $_POST['tipoI_07'], $_POST['tipoI_08'], $_POST['tipoI_09'], $_POST['tipoI_010']);
    $resultadoA = calculateValueType($_POST['tipoA_01'], $_POST['tipoA_02'], $_POST['tipoA_03'], $_POST['tipoA_04'], $_POST['tipoA_05'], $_POST['tipoA_06'], $_POST['tipoA_07'], $_POST['tipoA_08'], $_POST['tipoA_09'], $_POST['tipoA_010']);
    $resultadoS = calculateValueType($_POST['tipoS_01'], $_POST['tipoS_02'], $_POST['tipoS_03'], $_POST['tipoS_04'], $_POST['tipoS_05'], $_POST['tipoS_06'], $_POST['tipoS_07'], $_POST['tipoS_08'], $_POST['tipoS_09'], $_POST['tipoS_010']);
    $resultadoE = calculateValueType($_POST['tipoE_01'], $_POST['tipoE_02'], $_POST['tipoE_03'], $_POST['tipoE_04'], $_POST['tipoE_05'], $_POST['tipoE_06'], $_POST['tipoE_07'], $_POST['tipoE_08'], $_POST['tipoE_09'], $_POST['tipoE_010']);
    $resultadoC = calculateValueType($_POST['tipoC_01'], $_POST['tipoC_02'], $_POST['tipoC_03'], $_POST['tipoC_04'], $_POST['tipoC_05'], $_POST['tipoC_06'], $_POST['tipoC_07'], $_POST['tipoC_08'], $_POST['tipoC_09'], $_POST['tipoC_010']);

    $pessoa->setResultadoR($resultadoR);
    $pessoa->setResultadoI($resultadoI);
    $pessoa->setResultadoA($resultadoA);
    $pessoa->setResultadoS($resultadoS);
    $pessoa->setResultadoE($resultadoE);
    $pessoa->setResultadoC($resultadoC);


    $pessoaDAO = new pessoaDAO();
    $pessoaDAO->InsertPessoa($pessoa);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atividade de autoconhecimento: Resultado</title>

    <style>
        body {
            background-color: #F25D23;
            font-family: Roboto, sans-serif;
        }

        .container {
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }

        .results {
            background-color: white;
            border-radius: 8px;
            width: 50%;
            height: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            padding-left: 14px;
            padding-right: 14px;
            padding-bottom: 14px;
        }

        h1 {
            color: black;
        }

        table {
            width: 100%;
            border: black solid;
            border-radius: 5px;
            padding-right: 10px;
        }

        tr {
            justify-content: space-between;
        }

        td {
            width: 30%;
        }

        strong {
            font-size: 24px;
            color: black;
        }

        .tipo {
            text-align: center;
            font-weight: bold;
            width: 30%;
        }

        .descricao {
            width: 50%;
        }

        .percentage {
            width: 20%;
            text-align: center;
        }

        .value {
            text-align: center;
            font-size: 36px;
        }

    </style>

</head>

<body>

    <div class="container">
        <div class="results">
            <h1>Resultado</h1>

            <table>
                <tr>
                    <td class="tipo">
                        <strong>Personalidade</strong>
                    </td>
                    <td class="descricao">
                    </td>
                    <td class="percentage">
                        <strong>Seu resultado</strong>
                    </td>
                </tr>
                <tr>
                    <td class="tipo">
                        <h2>Realístico</h2>
                    </td>
                    <td>
                        <p>As pessoas com esse perfil de personalidade são práticas e gostam de agir.
                            São vistas como ajustadas e simples. São persistentes, sensatas e na maioria
                            das vezes sinceras, diretas ao modo de se relacionar. Gostam de dizer o que
                            pensam, sem muitos rodeios. Sentem apreço por todas as coisas.
                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoR = round($resultadoR, 2);
                            echo "$resultadoR%";
                            ?>

                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="tipo">
                        <h2>Investigativo</h2>
                    </td>
                    <td>
                        <p>As pessoas desse tipo, gostam de observar e entender tudo o que está ao
                            seu redor, buscando explicações para o modo como as coisas acontecem.
                            São pessoas muito críticas e independentes em suas ideias. Em geral, são
                            metódicas, bem organizadas, racionais e reservadas em alguns casos. Suas
                            emoções são mais contidas. Gostam de adquirir conhecimento e se
                            alimentam do saber, mostrando muita curiosidade para observar,
                            experimentar, estimar resultados, elaborar teorias e modelos.
                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoI = round($resultadoI, 2);
                            echo "$resultadoI%";
                            ?>

                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="tipo">
                        <h2>Empreendedor</h2>
                    </td>
                    <td>
                        <p>Os empreendedores gostam de manipular, coordenar e supervisionar as
                            atividades dos outros, seja para alcançar seus próprios objetivos, seja para
                            atingir as metas da empresa onde trabalham, ou ainda para conseguir
                            resultados produtivos e obter lucro. São pessoas ativas, que gostam de
                            aventuras, riscos e dos bons prazeres da vida material. Estão sempre
                            buscando novidades e se mostram autoconfiantes. Geralmente são
                            otimistas, sociáveis, líderes, competitivos.

                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoE = round($resultadoE, 2);
                            echo "$resultadoE%";
                            ?>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="tipo">
                        <h2>Convencional</h2>
                    </td>
                    <td>
                        <p>Apreciam o trabalho concreto, bem organizado, rotineiro e com regras
                            claras. Não gostam de muita proximidade e intimidade, nem sentem muita
                            necessidade de contato afetivo, especialmente no trabalho, preferindo ás
                            vezes o isolamento. Mostram preferência por atividades de manipulação de
                            dados e fatos, como organização de arquivos e registros. Também gostam
                            de lidar com números e organização, sempre de acordo com planos préestabelecidos.
                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoC = round($resultadoC, 2);
                            echo "$resultadoC%";
                            ?>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="tipo">
                        <h2>Artístico</h2>
                    </td>
                    <td>
                        <p>Gostam de executar as atividades artística, e não somente de apreciá-las.
                            Não gostam de rotina nem de atividades controladas. Preferem realizar
                            tarefas nas quais possam mostrar seus talentos criativos e expressivos.
                            Compreender e expressar as emoções é fundamental. São pessoas originais
                            e inovadoras, expressivas, que gostam de chamar a atenção. São também
                            muito emotivas e intuitivas. Podem ser impulsivos, pois gostam de
                            novidades, espontaneidade e principalmente de liberdade.
                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoA = round($resultadoA, 2);
                            echo "$resultadoA%";
                            ?>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="tipo">
                        <h2>Social</h2>
                    </td>
                    <td>
                        <p>Gostam e buscam interações com os outros, seja para ajudar, informar,
                            treinar, desenvolver, curar, esclarecer, ensinar, ouvir ou cuidar. Mostram
                            bastante interesse pelo bem-estar dos outros, pelo trabalho social,
                            humanitário e religioso, e pela boa e justa organização da sociedade. São
                            pessoas atenciosas, compreensivas com os problemas dos outros,
                            simpáticas e colaborativas. Gostam de se dedicar ao outro e também se
                            mostram dominantes. São pessoas em geral responsáveis, idealistas, gentis
                            e de fácil relacionamento.
                        </p>
                    </td>
                    <td class="value">
                        <p>
                            <?php
                            $resultadoS = round($resultadoS, 2);
                            echo "$resultadoS%";
                            ?>
                        </p>
                    </td>
                </tr>

            </table>
        </div>
    </div>

</body>
</html>