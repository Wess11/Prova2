CREATE DATABASE 'gestaodetimes';

CREATE TABLE 'tbdtimes' (
  'id' int(21) NOT NULL AUTO_INCREMENT,
  'nome' varchar(200) NOT NULL,
  'esporte' varchar(200) NOT NULL,
  'participantes' text NOT NULL,
  'genero' varchar(25) NOT null,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2;
