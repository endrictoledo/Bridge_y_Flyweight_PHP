Patrones que se implementan: Bridge y Flyweight

BRIDGE:

Qué problema resuelve cada ejemplo: Los problemas principales que resuelve el patrón Bridge son el crecimiento exponencial de clases y la falta de flexibilidad cuando se utiliza herencia. 
En este caso se tiene la problematica de un equipo de desarrollo nuevo que está creando figuras para interacturar dentro dle juego, el problema es que mientras mas figuras incluyan dentro 
de este, se generarán mas clses, esto consume mas recursos y genera alta coheción entre los componentes, esto se soluciona dividiendo esta problematica en dos jerarquías distintas, Forma 
y Color unidas mediante una relación de agergación entre estas, ellas generan sus abstracciones refinadas e implementadores concretos respectivamente, que son con los que se va a comunicar
el cliente, de esta forma aplicando el patrón bridge correctametne y solucionando su problematica definitivamente.

Cómo ejecutar el proyecto del patrón Bridge: 
- Paso 1: Descargar XAMMP, este funciona como un servidor local, al instalarlo únicamente debemos configurar lo mínimo necesario (El servidor apache)
- Paso 2: Dentro de los archivos de la carpeta XAMPP, creada por defecto en la raiz de disco c:/xampp, tenemos que encontrar la carpeta htdocs, esta carpeta sirve para para que el servidor
  Apache pueda ejecutar archivos; una vez en la carpeta debemos de mover el archivo ejemploPatronBridge.php dentro. Esto permite que el servidor pueda leer y ejecutar el archivo. 
- Paso 3: Antes de interntar ejecutar el archivo se tiene que encender el servidor, se entra a XAMPP Control Panel, el ejecutable que se descarga automaticamente, y dentro seleciconamos en
 el apartado de Apache "Start", con ello si se pone en verde se iniciara el servidor. NOTA: si no funciona puede que los puertos que ocupe XAMPP esten siendo ocupados por otros programas,
 en tal caso se debe entrar a la configuracion(boton config) y cambiar el puerto por otro(buscar "Listen 80" y "ServerName localhost:80" y en ambos carbiar el numero, guardar y volver a
 iniciar Apache).
- Paso 4: Ya con esto podemos ver el resultado en el navegador, no se abre directamente, se tiene que ejecutar a traves de una URL localhost, normalmente sigue la estructura:
  http://localhost/ejemploPatronBridge.php
En caso de tener el archivo dentro de alguna carpeta dentro de htdocs se tendrá que poner la carpeta:
  http://localhost/carpeta/ejemploPatronBridge.php
Con estos pasos debería poder vizualizarse el resultado de la ejecución del código del patrón Bridge.
  
Versiones:
  Lenguaje: php-8.3.30-Win32-vs16-x64
  Framework: N/A
  Herramientas adicionales usadas:
  - Herramienta de modelado UML: Enterprise Architect 15.2.1554 (Build: 1554) - Unicode
  - Editor de código: Visual Studio Code Versión: 1.118.1 (user setup)
  - Entorno de ejecución: XAMPP Control Panel v3.3.0

Comandos necesarios para instalar dependencias: N/A
Comandos necesarios para ejecutar los ejemplos: N/A

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

FLYWEIGHT:

El codigo es una abstraccion del problema de falta de memoria RAM debido a un uso excesivo de clases 
completas con componentes gráficos, se realiza una separación a la clase en su estado intrínseco(el que no cambia y se comparte)
y su estado extrínseco(el que si cambia y es único), con esto la parte compartida (ArbolFlyweight), 
que en este caso sera la parte gráfica y que pesa mas en memoria, solo se crea una vez y las clase del contexto y cambiante 
(ArbolContexto) unicamente tiene el apartado de posicion y una referencia al flyweight, con ello se ahorra
la instanciación de 2000 clases completas pesadas, y con ello logramos tener la parte pesada una sola
vez en memoria y las posiciones en otras clases ligeras.

Para ejecutar a nivel localHost: 
1.- Descargar XAMPP, este funcionara como servidor local, al instalarlo configurara solo lo necesario(el servidor Apache principalmente).
2.- Dentro de los archivos de la carpeta XAMPP, creada por defecto en la raiz de disco c:/xampp, tenemos que encontrar la carpeta htdocs, esta 
carpeta sirve para para que el servidor Apache pueda ejecutar archivos; una vez en la carpeta debemos de mover el la carpeta 
ejemploExposicionFlyweight dentro. Esto permite que el servidor pueda leer y ejecutar los archivos. 
3.- Antes de interntar ejecutar el archivo se tiene que encender el servidor, se entra a XAMPP Control Panel, el ejecutable que se descarga 
automaticamente, y dentro seleciconamos en el apartado de Apache "Start", con ello si se pone en verde se iniciara el servidor. NOTA: si no 
funciona puede que los puertos que ocupe XAMPP esten siendo ocupados por otros programas, en tal caso se debe entrar a la configuracion(boton 
config) y cambiar el puerto por otro(buscar "Listen 80" y "ServerName localhost:80" y en ambos carbiar el numero, guardar y volver a iniciar 
Apache). 
4.- Ya con esto podemos ver el resultado en el navegador, no se abre directamente, se tiene que ejecutar a traves de una URL localhost, 
normalmente sigue la estructura:
  http://localhost/carpetaDeProyecto/index.php
En caso de tener el archivo dentro de alguna carpeta dentro de htdocs se tendrá que poner la carpeta:
  http://localhost/carpeta/EjemploExposicionFlyweight/
Con estos pasos debería poder vizualizarse el el navegador el "Bosque" que se busca representar a través del patron Flyweight.
Para mi caso especifico la url será:
    http://localhost/Proyectos/EjemploExposicionFlyweight/

Nota: En este caso el archivo index.php es el archivo que se ejecuta primero, es decir lo que en Java llamamos clase main,
gracias a convenciones los archivos con el nombre index son los que se ejecutan primero.

Versiónes:
  Lenguaje: php-8.2.12
  Framework: N/A
  Herramienta de desarrollo:
    Visual Studio Code Versión: v1.119.0 (user setup)
  Herramientas adicionales usadas:
    Enterprise Architect 15.2.1554 (Build: 1554) - Unicode
    XAMPP Control Panel v3.3.0
  Dependencias: N/A
