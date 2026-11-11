# Centro de Estudios IASD

Tema de WordPress adaptable y accesible para presentar el Centro de Estudios IASD.

## Instalación

1. Comprime la carpeta `centro-estudios-iasd` en un archivo ZIP.
2. En WordPress, abre **Apariencia → Temas → Añadir nuevo → Subir tema** e instala el ZIP.
3. Activa el tema y abre **Apariencia → Personalizar** para configurar el anuncio, portada y pie de página.

## Personalización

- **Identidad del sitio:** el encabezado muestra el logo IASD incluido en `assets/images/iasd-logo.jpeg`. El logo de WordPress configurado en **Apariencia → Personalizar → Identidad del sitio** se conserva para la bienvenida animada.
- **Anuncio superior:** activa o desactiva el banner y ajusta texto, colores, velocidad y tamaño.
- **Portada y botones:** configura la imagen, títulos, descripciones, etiquetas, enlaces y estilos de los dos CTA.
- **Filosofía:** la sección con los valores de aprendizaje participativo se edita en `template-parts/philosophy.php`.
- **Método de estudio:** principios, pasos y bienvenida están en `template-parts/study-method.php`. Si el enlace del botón “Conoce cómo estudiamos” se deja vacío, lleva a esta sección.
- **Programa de los sábados:** el horario y sus actividades se editan en `template-parts/saturday-program.php`.
- **Novedades y comunidad:** proyectos, campañas y enlaces para orar o contactar están en `template-parts/community-updates.php`.
- **Galería:** las fotos de servicio, almuerzos y bautismo están en `template-parts/gallery.php` y se muestran en una cuadrícula adaptable.
- **Ubicación:** la sección de visita incluye mapa, dirección, teléfono, correo y horario; sus datos se editan en `template-parts/location.php`. Si el enlace del botón “Visítanos este sábado” se deja vacío, lleva a esta sección.
- **Pie de página:** edita la información, datos de contacto, redes sociales y verso bíblico.
- **Menús:** crea y asigna los menús principal y Explorar en **Apariencia → Menús** o en el editor de navegación de tu instalación.
- **Secciones de portada:** edita la página establecida como portada y agrega, ordena o elimina bloques de Gutenberg debajo del hero.

Los enlaces de los botones que se dejen vacíos llevan a la página de inicio. La animación del anuncio se pausa al pasar el cursor o enfocar el banner y se desactiva para usuarios que prefieren movimiento reducido.
