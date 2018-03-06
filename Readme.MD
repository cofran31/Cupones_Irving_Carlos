# Proyecto Final - Módulo de cupones
##### Maestrante: Irving Zenón Coronel Cabrera
##### Maestrante: Juan Carlos Ortube Lahor

##### ARQUITECTURA DE LA APLICACIÓN:

La aplicación está estructurada en una arquitectura cliente servidor.


##### MÓDULOS IDENTIFICADOS DE LA APLICACIÓN:

Para el funcionamiento se identificó los siguientes modelos con sus respectivos patrones para su desarrollo:


##### MÓDULO:
Manejo de lista de productos, compra y descuento de cupón  (CLIENTE)
##### Prototype 

Conexión de la Base datos (SERVIDOR)
##### Strategy 

Generación de Datos de salida renderizables (SERVIDOR)
##### Decorator 

Creacion de Consultas sencillas a travez de comandos de ejecucion de consultas.
##### Command 


##### CLIENTE 

Manejo del patrón creacional Prototype para el uso del lado del cliente desarrollado en JavaScript.

Para este desarrollo nos basamo en la liberia minicart para que interactue directamente con nuestros patrones de diseño de lado del servidor.

A continuación mostramos el diagrama de clases para es uso del prototype en nuestro en la aplicación de lado del Cliente:




##### SERVIDOR


Para el desarrollo de los patrones de diseño de lado del servidor, implementamos los siguientes patrones de diseño:

Command.- A través de este patrón implementación consultas a la base de datos de forma sencilla sin escribir consultas directas Sql, es como una implementación de ORM muy básico.
Decorator.-  Es el encargado de renderizar la salida de informacion hacia nuestra aplicacion CLiente tiene dos configuracion que son JSON(lo usamos por defecto) y XML 
Strategy.- Lo usamos como nuestro gestionador de conexiones de base de datos en nuestro caso tenemos 3 tipos de conexión a base de datos, la que utilizamos por defecto es la conexión StrategyPDO.php 


##### NOTA ADICIONAL.- Lamentablemente no pudimos concluir por falta de tiempo, la falta de una visión general de donde implementar el patrón preciso hizo que se realicen varias pruebas antes de la implementación general de los patrones descuidando otras utilidades del software.

##### Por lo que pedimos que nos tome en cuenta la creación de los patrones como una manera de verdaderamente haber analizado correctamente el uso en una situación casi real.
