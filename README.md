# ESTADO_MEXICO
API que permite por medio del codigo postal 
obtener las direcciones en México asociadas a dicho codigo, 
este proyecto fue desarrollado con php realizando
consultas a una base de datos MySQL, este proyecto se desarrollo e implemento
con el objetivo de poder hacer consultas de direcciones en mi proyecto
de Servicio Social el cual se encuentra en el siguiente repositorio.
https://github.com/Joakiiin/portafolio

# CARACTERISTICAS
- Consulta de direcciones base al codigo postal;
- Consumible desde PHP;
- Base de datos obtenida directamente de la pagina de correos de México;

# INSTALACION E IMPLEMENTACION
- Descargar la carpeta del proyecto e implementarla ya sea en tu localhost;
- Importar la base de datos en tu gestor de base de datos, la base de datos es algo pesada, recomiendo configurar para aumentar el tiempo de espera para que no te mate el proceso a medias, otra opcion que fue lo que yo hice fue descargar el archivo xlx desde la web de correos de mexico e importar tabla por tabla, es mas tardado pero sabes perfectamente lo que tienes;
- Modificar tu archivo config con las credenciales y el nombre de tu base de datos;
  
![Ejemplo de imagen](configapi.PNG)

- Modifica el URL por el cual va a ser consumida la api segun donde tu tengas almacenado el proyecto, por ejemplo mi link es el siguiente;

![Ejemplo de imagen](URL.PNG)

# PRUEBA DE FUNCIONAMIENTO
## METODO 1
- El metodo 1 es la forma mas sencilla de probar el correcto funcionamiento de la API, ustedes simplemente deberan copiar la url de su proyecto junto a los parametros que utilizaran, dicha información la encontraran en el index.php del proyecto, sustituyen el $d_codigo al final de la url por un codigo postal de México y el correcto funcionamiento debe lucir igual que en la imagen inferior.

![Ejemplo de imagen](metodo1api.PNG)

## METODO 2
- El metodo 1 aunque mas facil y rapido podran notar no es algo muy elegante a falta de codificación UTF-8 por parte de un html, utilizando el software de Postman obtendras unos resultados mas adecuados, dicho software lo puedes descargar e instalar desde la siguiente liga: https://www.postman.com/downloads/
- Una vez descargado e instalado al igual que el metodo 1 copiaran la url sustituyendo $_codigo por un codigo postal de México, le indican al software que el metodo a utilizar es GET y dan click en SEND, podran apreciar en la imagen inferior los resultados de un correcto funcionamiento.

![Ejemplo de imagen](metodo2api.PNG)
