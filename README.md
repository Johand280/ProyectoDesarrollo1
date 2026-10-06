# Drawing Thoughts

Drawing Thoughts es un sitio web estático dedicado al arte. Su objetivo es presentar obras visuales, dar a conocer artistas y ofrecer a los visitantes una forma sencilla de explorar una galería en línea.

## Secciones del sitio

- **Inicio (`Index.html`):** portada con presentación del proyecto, una selección visual de obras, artistas destacados y enlaces para visitar la galería.
- **Artistas (`Pagina1.html`):** galería organizada por artista. Actualmente incluye a Herbert James Draper, Frédéric Soulacroix y Auguste Toulmouche, con dos obras y un precio de muestra en pesos colombianos (COP) por artista.
- **Sobre nosotros (`Pagina2.html`):** presenta la misión, visión y valores de Drawing Thoughts.

Las páginas comparten la navegación, el estilo visual y el pie de página para mantener una experiencia coherente.

## Funcionalidades actuales

- Navegación entre las páginas y enlaces a las secciones principales.
- Diseño adaptable a pantallas de escritorio y dispositivos móviles.
- Imágenes de arte en línea: fotografías de Unsplash para algunas secciones y obras de Wikimedia Commons para la galería de artistas.
- Carrito de muestra en la página de artistas: permite añadir obras, eliminarlas, vaciar el carrito y consultar el total.
- El carrito guarda su contenido en `localStorage` del navegador; no se envía a un servidor.

## Tecnologías

- HTML para el contenido y la estructura de las páginas.
- CSS (`style.css`) para el diseño, la tipografía y los estilos responsivos.
- JavaScript integrado en `Pagina1.html` para las interacciones del carrito.
- Bootstrap Icons y Google Fonts cargados desde sus respectivos servicios web.

## Cómo ejecutar

No se requiere instalación de dependencias ni configuración de una base de datos. Abre `Index.html` en un navegador para comenzar. También puedes colocar la carpeta del proyecto dentro del directorio de XAMPP y abrirla a través de `http://localhost/ProyectoDesarrollo1/`.

Se necesita conexión a internet para cargar las imágenes, Bootstrap Icons y las fuentes externas.

## Alcance y próximos pasos

Este proyecto es actualmente una interfaz demostrativa: no tiene backend, base de datos, cuentas de usuario, inicio de sesión ni procesamiento real de pagos. Los precios y las acciones de compra son ilustrativos. La integración de servicios de servidor y persistencia de datos queda para una etapa futura, asi que momentaneamente este solo es el esquema de la aplicación.
