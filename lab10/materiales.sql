BULK INSERT a1205525.a1205525.[Materiales]
   FROM 'e:\wwwroot\a1205525\materiales.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );