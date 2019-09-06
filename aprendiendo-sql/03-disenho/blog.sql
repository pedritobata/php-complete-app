create database blog_master;
use blog_master

create table usuario(
    id  int(255) not null auto_increment,
    nombre  varchar(100) not null,
    apellidos  varchar(100) not null,
    email  varchar(255) not null,
    password  varchar(200) not null,
    fecha  date not null,
    CONSTRAINT pk_usuario PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;
#InnoDb es un motor optimizado para las operaciones transaccionales como inserts o updates
# mantiene la intergridad referencial, osea que las llaves primarias y foraneas se respeten perfectamente.
# normalmente InnoDb se setea por default
#hay otro motor myISAM  esta  optimizado para cuando se tienen que hacer muchisimos selects . Es una bala .
# Pero para integridad referencial manca.

create table categoria(
    id  int(255) not null auto_increment,
    nombre  varchar(100),
    CONSTRAINT pk_categoria PRIMARY KEY (id)
)ENGINE=InnoDb;

create table entrada(
    id  int(255) not null auto_increment,
    usuario_id  int(255),
    categoria_id  int(255),
    titulo  varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha  date not null,
    CONSTRAINT pk_entrada PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categoria (id)
)ENGINE=InnoDb;

