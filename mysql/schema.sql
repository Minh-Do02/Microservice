USE root;

CREATE TABLE test (
  id INTEGER AUTO_INCREMENT,
  data text,
  PRIMARY KEY (id)
);
CREATE TABLE étudiant (
  id INTEGER AUTO_INCREMENT,
  data text,
  PRIMARY KEY (id)
);
CREATE TABLE department (
  id INTEGER AUTO_INCREMENT,
  data text,
  PRIMARY KEY (id)
);
INSERT INTO test VALUES (DEFAULT, 'Je suis un texte dans la DB');
