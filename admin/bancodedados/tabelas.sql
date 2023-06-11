--Acessos--
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  email VARCHAR(255) NULL,
);

--Fornecedores--
CREATE TABLE fornecedores (
    id_fornecedor INT AUTO_INCREMENT PRIMARY KEY,
    nome_fornecedor VARCHAR(255) NOT NULL,
    cnpj VARCHAR(14) NOT NULL,
    telefone INT(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    endereco VARCHAR(255) NOT NULL
);


--Produtos--
CREATE TABLE produtos (
  id_produto INT AUTO_INCREMENT PRIMARY KEY,
  codigo VARCHAR(50) NOT NULL,
  descricao VARCHAR(255) NOT NULL,
  estoqueInicial INT NOT NULL,
  estoqueAtual INT NOT NULL,
  precoCompra DECIMAL(10, 2) NOT NULL,
  precoVenda DECIMAL(10, 2) NOT NULL,
  id_fornecedor INT NOT NULL,
  FOREIGN KEY (id_fornecedor) REFERENCES fornecedores (id_fornecedor)
);
