# Renombrar una tabla
ALTER TABLE usuario RENAME TO user;

# Renombrar una columna
ALTER TABLE user CHANGE apellidos apellido varchar(150) default 'Goyoneche';

# Modificar una columna si modificar su nombre
ALTER TABLE user MODIFY apellido char(50) not null;

# Agregar una columna a una tabla
ALTER TABLE user ADD website varchar(50) null;

# Añadir restriccion a una columna
ALTER TABLE user ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar un campo de una tabla en todos los registros
ALTER TABLE user DROP website;