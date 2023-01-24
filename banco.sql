CREATE TABLE clientes (
    id_cliente int NOT NULL,
    nome_cliente varchar(50),
    sobrenome_cliente varchar(50),
    endereco_cliente varchar(150),
    cidade_cliente varchar(50),
    estado_cliente varchar(50),
    cep_cliente varchar(50),
    Host varchar(50),
    PRIMARY KEY (id_cliente)
);
