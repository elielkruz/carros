CREATE TABLE marca (
  id_marca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_marca VARCHAR(45) NULL,
  PRIMARY KEY(id_marca)
);

CREATE TABLE modelo (
  id_modelo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  marca_id_marca INTEGER UNSIGNED NOT NULL,
  nome_modelo VARCHAR(45) NULL,
  cor_modelo VARCHAR(20) NULL,
  ano_modelo YEAR NULL,
  placa_modelo CHAR(8) NULL,
  PRIMARY KEY(id_modelo),
  INDEX modelo_FKIndex1(marca_id_marca)
);


