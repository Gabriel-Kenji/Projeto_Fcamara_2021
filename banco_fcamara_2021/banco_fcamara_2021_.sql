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
CREATE TABLE tb_status_pedido (
    cd_status int NOT NULL AUTO_INCREMENT,
    nm_status varchar(255) NOT NULL,
    PRIMARY KEY (cd_status)
);


CREATE TABLE tb_pedido (
    cd_pedido int NOT NULL AUTO_INCREMENT,
    cd_RA int NOT NULL,
    PRIMARY KEY (cd_pedido),
    FOREIGN KEY (cd_RA) REFERENCES tb_aluno(cd_RA)
);

create table tb_pedido_material(
	cd_pedido_material int not null AUTO_INCREMENT,
	cd_pedido int not null,
    cd_material int not null,
    cd_status int NOT NULL,
	ds_quantidade int NOT NULL,
    PRIMARY KEY (cd_pedido_material),
    FOREIGN KEY (cd_material) REFERENCES tb_material(cd_material),
    FOREIGN KEY (cd_pedido) REFERENCES tb_pedido(cd_pedido),
    FOREIGN KEY (cd_status) REFERENCES tb_status_pedido(cd_status)
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

CREATE TABLE tb_status_doacao (
    cd_status int NOT NULL AUTO_INCREMENT,
    nm_status varchar(255) NOT NULL,
    PRIMARY KEY (cd_status)
);

CREATE TABLE tb_doacao(
    cd_doacao int NOT NULL AUTO_INCREMENT,
    cd_status int NOT NULL,
    cd_CPF int NOT NULL,
    PRIMARY KEY (cd_doacao),
    FOREIGN KEY (cd_status) REFERENCES tb_status_doacao(cd_status),
    FOREIGN KEY (cd_CPF) REFERENCES tb_doador(cd_CPF)
);


create table tb_doacao_material(
	cd_pedido_material int not null,
    cd_doacao int NOT NULL,
	ds_quantidade int NOT NULL,
    FOREIGN KEY (cd_pedido_material) REFERENCES tb_pedido_material(cd_pedido_material),
    FOREIGN KEY (cd_doacao) REFERENCES tb_doacao(cd_doacao)
);

INSERT INTO `tb_status_pedido` (`cd_status`, `nm_status`) VALUES
(1, 'EM ANDAMENTO'),
(2, 'CONCLUÍDO ');

INSERT INTO `tb_status_doacao` (`cd_status`, `nm_status`) VALUES
(1, 'EM ANDAMENTO'),
(2, 'CONCLUÍDO ');


INSERT INTO `tb_material` (`cd_material`, `nm_material`) VALUES 
('1', 'Apontador'),
('2', 'Borracha escolar'),
('3', 'Caderno 10 matérias'),
('4', 'Caderno de caligrafia'),
('5', 'Caderno 1 matérias'),
('6', 'Canetinha hidrográfica (12 cores)'),
('7', 'Cola branca 90g'),
('8', 'Lápis de cor (12 cores)'),
('9', 'Lápis grafite'),
('10', 'Lapiseira'),
('11', 'Caneta esferográfica'),
('12', 'Tesoura sem ponta'),
('13', 'Régua'),
('14', 'Esquadro 45o'),
('15', 'Esquadro 60o'),
('16', 'Transferidor 180o'),
('17', 'Pasta'),
('18', 'Estojo'),
('19', 'Mochila');

INSERT INTO `tb_escola` (`cd_INEP`, `nm_escola`, `nm_email`, `nm_senha`, `sg_estado`, `nm_cidade`, `nm_bairro`, `ds_telefone`) VALUES
('35909836', 'Vila Tupi', 'vila@tupi.com', '1234', 'SP', 'Praia Grande', 'Vila Tupi', '1399999999'),
('35045196', 'Professora Magali Alonso', 'Magali@alonso.com', '1234', 'SP', 'Praia Grande', 'Vila Tupi', '1399999999'),
('35008096', 'Doutor Luiz Lobo Neto', 'lobo@neto.com', '1234', 'SP', 'Santo André', 'Paraiso', '1199999999'),
('35008059', 'Doutor Celso Gama', 'celso@gama.com', '1234', 'SP', 'Santo André', 'Vila Assunção', '1199999999');

INSERT INTO `tb_aluno` (`cd_RA`, `nm_aluno`, `nm_email`, `nm_senha`, `sg_estado`, `nm_cidade`, `nm_bairro`, `ds_telefone`, `cd_INEP`) VALUES 
('1', 'Gabriel Kenji', 'gabrielkenji@gmail.com', '1234', 'SP', 'Praia Grande', 'Vila Tupi', '13999999999', '35909836'), 
('2', 'Rodrigo', 'rodrigo@gmail.com', '1234', 'SP', 'Praia Grande', 'Vila Tupi', '13999999999', '35045196') ;

