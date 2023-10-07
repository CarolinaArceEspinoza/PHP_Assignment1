DROP DATABASE IF EXISTS soccerCamp;

CREATE DATABASE soccerCamp;
USE soccerCamp;

CREATE TABLE player (
  ID            INT NOT NULL auto_increment,
  NAME          VARCHAR(255) NOT NULL,
  BIRTH_YEAR	DATE NOT NULL,
  POSITION      VARCHAR(50) NULL,
  CONTACT_NUMB  BIGINT(10) NOT NULL,
  EMAIL         VARCHAR(255) NOT NULL,
  TIME_SLOT     VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

 select * from player;