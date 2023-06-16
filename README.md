# ESTADO_MEXICO
API que permite por medio del codigo postal 
obtener las direcciones en México asociadas a dicho codigo, 
este proyecto fue desarrollado con php realizando
consultas a una base de datos MySQL, este proyecto se desarrollo e implemento
con el objetivo de poder hacer consultas de direcciones en mi proyecto
de Servicio Social el cual se encuentra en el siguiente repositorio:
https://github.com/Joakiiin/portafolio

# CARACTERISTICAS
- Consulta de direcciones base al codigo postal;
- Consumible desde PHP;
- Base de datos obtenida directamente de la pagina de correos de México;

#INSTALACION E IMPLEMENTACION
- Descargar la carpeta del proyecto e implementarla ya sea en tu localhost.
- Importar la base de datos en tu gestor de base de datos, la base de datos es algo pesada, recomiendo configurar para aumentar el tiempo de espera para que no te mate el proceso a medias, otra opcion que fue lo que yo hice fue descargar el archivo xlx desde la web de correos de mexico e importar tabla por tabla, es mas tardado pero sabes perfectamente lo que tienes.
- Modificar tu archivo config con las credenciales y el nombre de tu base de datos.
![Ejemplo de imagen](configapi.PNG)
