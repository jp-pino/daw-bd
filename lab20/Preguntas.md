# Preguntas

### Explica y elabora un diagrama sobre cómo funciona AJAX con jQuery.

```sequence
participant Cliente
participant jQuery
participant Servidor
Cliente->Servidor: Petición HTTP
Servidor->Cliente: Respuesta con HTML + CSS
Cliente-->jQuery: Llamada por javascript
jQuery-->Servidor: Peticion HTTP
Servidor-->jQuery: Respuesta HTTP
jQuery-->Cliente: HTML + CSS

```

Al utilizar **jQuery** añadimos una capa en javascript para interactuar con el servidor mediante **AJAX**. Este permite estandarizar en los distintos navegadores web la creación de la petición AJAX y recuperación de la subsecuente respuesta para desplegarla en la aplicación. 

https://stackoverflow.com/questions/1510011/how-does-ajax-work

### ¿Qué alternativas a jQuery existen?

* **Prototype**
* **Ext**
* **Dojo Toolkit**
* **MooTools**
* ...

http://www.jscripters.com/popular-jquery-alternatives/

