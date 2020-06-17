<?php
class pessoaDAO
{
    public function InsertPessoa(Pessoa $pessoa)
    {
        global $con;


        $sql = $con->prepare("INSERT INTO pessoa(id, email, nome, ano, rg, celular, endereco, numero, complemento, bairro, estado, cidade, nomeEscola, bairroEscola, anoEscolar, turma, perfilEscola, resultadoR, resultadoI, resultadoA, resultadoS, resultadoE, resultadoC) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" );
        $sql ->bind_param("sssssssssssssssssssssss", $id, $email, $nome, $ano, $rg, $celular, $endereco, $numero, $complemento, $bairro, $estado, $cidade, $nomeEscola, $bairroEscola, $anoEscolar, $turma, $perfilEscola, $resultadoR, $resultadoI, $resultadoA, $resultadoS, $resultadoE, $resultadoC);

        $email = $pessoa ->getEmail();
        $nome = $pessoa ->getNome();
        $ano = $pessoa ->getAno();
        $rg = $pessoa ->getRg();
        $celular = $pessoa ->getCelular();
        $endereco = $pessoa ->getEndereco();
        $numero = $pessoa ->getNumero();
        $complemento = $pessoa ->getComplemento();
        $bairro = $pessoa ->getBairro();
        $estado = $pessoa ->getEstado();
        $cidade = $pessoa ->getCidade();
        $nomeEscola = $pessoa ->getNomeEscola();
        $bairroEscola = $pessoa ->getBairroEscola();
        $anoEscolar = $pessoa ->getAnoEscolar();
        $turma = $pessoa ->getTurma();
        $perfilEscola = $pessoa ->getPerfilEscola();
        $resultadoR = $pessoa ->getResultadoR();
        $resultadoI = $pessoa ->getResultadoI();
        $resultadoA = $pessoa ->getResultadoA();
        $resultadoS = $pessoa ->getResultadoS();
        $resultadoE = $pessoa ->getResultadoE();
        $resultadoC = $pessoa ->getResultadoC();


        $sql->execute();

    }

}


