-- EJERCICIO 3

-- Revisa y analiza el contenido de las tablas materiales, proveedores y proyectos, utilizando la sentencia.
SELECT * FROM Entregan
SELECT * FROM Materiales
SELECT * FROM Proveedores
SELECT * FROM Proyectos

-- Intenta insertar en la tabla entregan el siguiente registro:
INSERT INTO Entregan VALUES (0, 'xxx', 0, '1-jan-02', 0)

-- ¿Qué particularidad observas en los valores para clave, rfc y numero?
--    Clave y numero son de 4 digitos y rfc de 10. El registro insertado no sigue la estructura deseada.
-- ¿Cómo responde el sistema a la inserción de este registro?
--    Si permite insertar los datos.

-- Como no deseamos insertar un registro inconsistente, anulemos el efecto con:
DELETE FROM Entregan WHERE Clave = 0

-- Ahora agreguemos el siguiente constraint:
ALTER TABLE Entregan ADD CONSTRAINT cfentreganclave FOREIGN KEY (Clave) REFERENCES Materiales(Clave)

-- Intenta nuevamente la inserción del registro inconsistente.
-- ¿Qué significa el mensaje que emite el sistema?
--    Significa que no se puede insertar el valor porque hay un conflicto con la tabla de Materiales (no existe)
-- ¿Qué significado tiene la sentencia anterior?
--    Significa que la base de datos no nos va a dejar ingresar valores que no existan en otras tablas, aumentando su integridad referencial
INSERT INTO Entregan VALUES (0, 'xxx', 0, '1-jan-02', 0)

-- Para asegurar que no se presenten inconsistencias con relación a las otras llaves foráneas, agrega los constraints correspondientes a rfc y número.
ALTER TABLE Entregan ADD CONSTRAINT cfentreganrfc FOREIGN KEY (RFC) REFERENCES Proveedores(RFC)
ALTER TABLE Entregan ADD CONSTRAINT cfentregannumero FOREIGN KEY (Numero) REFERENCES Proyectos(Numero)

-- Revisa los constraints de cada tabla. Para visualizar los constraints que hemos creado, se utiliza la siguiente sentencia:
sp_helpconstraint Entregan
-- ¿Qué significan las columnas de esas consultas?
-- El tipo de contraint (Foraneo/Primario), el nombre asignado por nosotros, y las llaves involucradas en el constraint, entre otros parametros.

