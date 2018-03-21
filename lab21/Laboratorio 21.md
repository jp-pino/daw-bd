# Laboratorio 21: 

## Manipulación de datos usando Stored Procedures

### ¿Qué hace el primer bloque del código (bloque del IF)? 

Se asegura de que no exista el procedure.

### ¿Para qué sirve la instrucción GO? 

Hace que se ejecuten todas las instrucciones desde el ultimo GO juntas.

### ¿Explica que recibe como parámetro este Procedimiento y qué tabla modifica?

Este procedimiento recibe parámetros que van de acuerdo a las columnas de la tabla Materiales.

### ¿Qué ventajas tienen el utilizar Store Procedures en una aplicación cliente-servidor?

Facilita las consultas largas, haciendo que el modelo en php se resuma.

### ¿Qué ventajas tiene utilizar SP en un proyecto?

Hace el codigo mas facil de entender.

### Para reforzar el entendimiento de los SP, crea un SP que sea de utilidad en tu proyecto (en caso de usar otra tecnología, se deberá asumir). Incorpora dicho SP en tu reporte.

```sql
IF EXISTS (SELECT name FROM sysobjects
           WHERE name = 'login' AND type = 'P')
    DROP PROCEDURE login
GO

CREATE PROCEDURE login
    @uclave VARCHAR(30)
    @pswd VARCHAR(30)
AS
    SELECT email FROM usuario WHERE email = @uemail AND pswd = 			@pswd
GO
```



