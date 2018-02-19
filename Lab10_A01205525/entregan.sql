SET DATEFORMAT dmy;

BULK INSERT a1205525.a1205525.[Entregan]
   FROM 'e:\wwwroot\a1205525\entregan.csv'
   WITH
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );