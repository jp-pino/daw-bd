BULK INSERT a1205525.a1205525.[Proyectos]
   FROM 'e:\wwwroot\a1205525\proyectos.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );