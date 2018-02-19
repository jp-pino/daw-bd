BULK INSERT a1205525.a1205525.[Proveedores]
   FROM 'e:\wwwroot\a1205525\proveedores.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );