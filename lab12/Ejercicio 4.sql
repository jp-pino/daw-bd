-- EJERCICO 4

-- Efectúa la siguiente sentencia INSERT:
INSERT INTO entregan VALUES (1000, 'AAAA800101', 5000, GETDATE(), 0);

-- Lista el registro que acabas de crear.
SELECT * FROM Entregan WHERE Clave = 1000 AND Cantidad = 0

-- ¿Qué uso se le está dando a GETDATE()?
--    Inserta en la tabla la fecha y hora (timestamp) del momento en que fue procesada la sentencia.

-- ¿Tiene sentido el valor del campo de cantidad?
--    No, porque no se puede entregar la cantidad de 0.

-- Elimina el registro que acabas de insertar (puedes caracterizarlo como el que tiene cantidad cero)
DELETE FROM Entregan WHERE Cantidad = 0

-- Para no permitir una cantidad igual a 0 utilizamos el siguiente constraint:
ALTER TABLE entregan ADD CONSTRAINT cantidad CHECK (cantidad > 0)

-- Intenta insertar un registro con cantidad igual o menor que 0.
INSERT INTO entregan VALUES (1000, 'AAAA800101', 5000, GETDATE(), 0);
-- ¿Cómo responde el sistema?
--    Dice que hay un conflico con el constraint CHECK de cantidad.
-- ¿Qué significa el mensaje?
--    Esto significa que la ya no se pueden insertar valores menores o iguales a cero en cantidad.

-- Nuevamente revisa los constraints de cada tabla y revisa las diferencias que existen entre cada uno de ellos.
sp_helpconstraint Entregan

-- Como parte del reporte, explica el concepto de integridad referencial
--    La integridad referencial es el conjunto de reglas definidas en una base de datos relacional
--    para asegurarse de que los registros que se inserten sean validos[1]. Esta relacionado a las llaves foraneas,
--    determinando que los valores que esta tome deben ser nulos o que existan en la llave a la que referencia[2].
--    El DBMS realiza comprobaciones con cada insercion/edicion/eliminacion de la base de datos para asegurarse de
--    que las reglas definidas se cumplan.


--  [1]  http://www.aulaclic.es/sql/b_8_1_1.htm
--  [2]  http://www.dataprix.com/43-regla-integridad-referencial