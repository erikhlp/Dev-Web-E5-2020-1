CREATE TABLE pessoa(
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(10) NOT NULL,
    nome VARCHAR(10) NOT NULL,
    ano VARCHAR(10) NOT NULL,
    rg VARCHAR(10) NOT NULL,
    celular VARCHAR(10) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(10) NOT NULL,
    bairro VARCHAR(10) NOT NULL,
    estado VARCHAR(10) NOT NULL,
    cidade VARCHAR(10) NOT NULL,
    nomeEscola VARCHAR(10) NOT NULL,
    bairroEscola VARCHAR(10) NOT NULL,
    anoEscolar VARCHAR(10) NOT NULL,
    turma VARCHAR(10) NOT NULL,
    perfilEscola VARCHAR(10) NOT NULL,
    resultadoR VARCHAR(10) NOT NULL,
    resultadoI VARCHAR(10) NOT NULL,
    resultadoA VARCHAR(10) NOT NULL,
    resultadoS VARCHAR(10) NOT NULL,
    resultadoE VARCHAR(10) NOT NULL,
    resultadoC VARCHAR(10) NOT NULL,


    PRIMARY KEY (id)
);