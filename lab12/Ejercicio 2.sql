-- EJERCICIO 2

-- Agrega un nuevo registro a la tabla de materiales:
INSERT INTO Materiales values(1000, 'xxx', 1000)

-- Revisa el contenido de la tabla materiales y determina si existe alguna inconsistencia en el contenido de la tabla. ¿Cuál es? ¿A qué se debe?
--    La inconsistencia es el registro que acabo de insertar

-- Elimina el registro que acabas de agregar:
DELETE FROM Materiales WHERE Clave = 1000 AND Costo = 1000

-- A continuación definiremos a la Clave como llave primaria de la tabla de materiales, esto mediante la creación de un constraint.
ALTER TABLE Materiales ADD CONSTRAINT llaveMateriales PRIMARY KEY (Clave)

-- Agrega nuevamente el registro a la tabla de materiales:
INSERT INTO Materiales values(1000, 'xxx', 1000);

-- ¿Qué ocurrió?
--    No me permite ingresarlo puesto que ambos registros tienen la misma llave primaria

-- Verifica si la tabla de materiales tiene definido algún constraint (restricción)
sp_helpconstraint materiales
--    Si existe.

-- ¿Qué información muestra esta consulta?
--    Muestra el tipo de constraint (PRIMARY KEY), el nombre y otros parametros

-- Asegúrate de crear constraints análogos para definir las llaves primarias de las tablas proveedores, y proyectos.
-- ¿Qué sentencias utilizaste para definir las llaves primarias?
ALTER TABLE Proveedores ADD CONSTRAINT llaveProveedores PRIMARY KEY (RFC)
ALTER TABLE Proyectos ADD CONSTRAINT llaveProyectos PRIMARY KEY (Numero)

-- Define el constraint correspondiente a la llave primaria para la tabla entregan, considerando que en este caso, la llave primaria está integrada por varias columnas.
-- ¿Qué sentencias utilizaste para definir este constrait?
ALTER TABLE Entregan ADD CONSTRAINT llaveEntregan PRIMARY KEY (Clave, RFC, Numero, Fecha)


