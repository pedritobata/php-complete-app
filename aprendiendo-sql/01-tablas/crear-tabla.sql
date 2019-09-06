/* 
  CREACION DE TABLAS
 */
/**
 * Author:  TATO
 * Created: 04/09/2019
 */

create database master_php;
use master_php

/* copio y pego el codigo de este sql en la consola de mysql !! jeje */
create table usuario(
  id  int(11) not null auto_increment,
  nombre  varchar(100) not null,
  apellidos  varchar(255) default 'Martinez',
  email   varchar(100),
  password   varchar(255),
  constraint pk_usuarios primary key (id)
);





