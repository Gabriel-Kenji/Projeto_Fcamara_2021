create database db_fcamara;

use db_fcamara;

CREATE TABLE tb_escola (
    cd_INEP int NOT NULL,
    nm_escola varchar(255) NOT NULL,
    nm_email varchar(255) NOT NULL,
    nm_senha varchar(16) NOT NULL,
    sg_estado varchar(2) NOT NULL,
    nm_cidade varchar(255) NOT NULL,
    nm_bairro varchar(255) NOT NULL,
    ds_telefone varchar(45),
    PRIMARY KEY (cd_INEP)
);

CREATE TABLE tb_aluno (
    cd_RA int NOT NULL,
    nm_aluno varchar(255) NOT NULL,
    nm_email varchar(255) NOT NULL,
    nm_senha varchar(16) NOT NULL,
    sg_estado varchar(2) NOT NULL,
    nm_cidade varchar(255) NOT NULL,
    nm_bairro varchar(255) NOT NULL,
    ds_telefone varchar(45),
    cd_INEP int NOT NULL,
    PRIMARY KEY (cd_RA),
    FOREIGN KEY (cd_INEP) REFERENCES tb_escola(cd_INEP)
);

CREATE TABLE tb_material (
    cd_material int NOT NULL AUTO_INCREMENT,
    nm_material varchar(255) NOT NULL,
    PRIMARY KEY (cd_material)
);

CREATE TABLE tb_pedido (
    cd_pedido int NOT NULL AUTO_INCREMENT,
    ds_status varchar(255) NOT NULL,
    cd_material int NOT NULL,
    cd_RA int NOT NULL,
    PRIMARY KEY (cd_pedido),
    FOREIGN KEY (cd_RA) REFERENCES tb_aluno(cd_RA),
    FOREIGN KEY (cd_material) REFERENCES tb_material(cd_material)
);

CREATE TABLE tb_doador (
    cd_CPF int NOT NULL ,
    nm_doador varchar(255) NOT NULL,
    nm_email varchar(255) NOT NULL,
    nm_senha varchar(16) NOT NULL,
    sg_estado varchar(2) NOT NULL,
    nm_cidade varchar(255) NOT NULL,
    nm_bairro varchar(255) NOT NULL,
    ds_telefone varchar(45),
    PRIMARY KEY (cd_CPF)
);

CREATE TABLE tb_doacao (
    cd_doacao int NOT NULL AUTO_INCREMENT,
    ds_status varchar(255) NOT NULL,
    cd_CPF int NOT NULL,
    cd_pedido int NOT NULL,
    PRIMARY KEY (cd_doacao),
    FOREIGN KEY (cd_CPF) REFERENCES tb_doador(cd_CPF),
    FOREIGN KEY (cd_pedido) REFERENCES tb_pedido(cd_pedido)
);

