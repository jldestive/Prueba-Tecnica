## Sección 1: Symfony

1. **Pregunta de Configuración:**
    Lo primero es instalar Symfony-Cli en mac y linux es usando unos comandos en consola mientras 
    que en windows tienes que descargarlo aqui https://symfony.com/download
    Despues si vas a hacer un proyecto web normal usas symfony new --webapp {my_project} para crear 
    la aplicacion
    Si vas a usar microservicios usas symfony new my_project
    y para symfony server:start para iniciar el servidor


3. **Pregunta Teórica:**
    La arquitectura de Symfony se basa en el patrón Modelo-Vista-Controlador (MVC) y organiza el código en una estructura de proyecto estándar, facilitando la gestión y escalabilidad de aplicaciones web.

    src/: Contiene todo el código fuente de la aplicación.
    Controller/: Contiene los controladores, que gestionan la lógica de negocio relacionada con las solicitudes HTTP.
    Entity/: Define las entidades, que representan los objetos de dominio de la aplicación.
    Repository/: Implementa repositorios para interactuar con la base de datos.
    Validator/: Contiene validadores personalizados.
    Other Components/: Otras partes de la aplicación, dependiendo de sus necesidades específicas.

6. **Pregunta Teórica:**
    El concepto de Dependency Injection (DI) en Symfony se refiere a la práctica de suministrar dependencias a una clase en lugar de hacer que la clase las cree por sí misma. Esto promueve la modularidad, la facilidad de prueba y el mantenimiento del código. En Symfony, DI se implementa principalmente a través del Service Container, construido por el ContainerBuilder.

    Se debe registrar tus servicios en el Service Container

    En resumen, Dependency Injection en Symfony es una técnica poderosa que mejora la calidad del código al separar la creación de objetos de su uso, facilitar las pruebas y promover el diseño modular y desacoplado.


8. **Pregunta Teórica:**
    El Event Dispatcher en Symfony es un componente que permite a diferentes partes de una aplicación comunicarse entre sí mediante eventos y oyentes (listeners). Este patrón de diseño facilita la creación de aplicaciones modulares y desacopladas, donde los componentes pueden emitir eventos para informar a otros componentes sobre acciones importantes, y estos últimos pueden responder a esos eventos mediante la ejecución de acciones específicas.

