# 🎨 Portfolio de Invitaciones - Laravel

Portfolio de invitaciones web elegantes y modernas desarrollado con Laravel. Este proyecto muestra 5 diferentes tipos de invitaciones con diseños únicos y animaciones.

## ✨ Características

- **5 Invitaciones Únicas**: Cada invitación tiene su propio diseño y tema
- **Diseño Responsive**: Perfectas en cualquier dispositivo (móvil, tablet, desktop)
- **Animaciones Suaves**: Transiciones y efectos visuales elegantes
- **Sin Base de Datos**: Funcionan directamente sin configuración adicional
- **Estilos Inline**: CSS integrado en cada plantilla para fácil personalización

## 🎉 Tipos de Invitaciones

### 1. Cumpleaños Infantil 🎈
Diseño colorido y divertido con tema de globos y celebración. Ideal para fiestas infantiles.
- **Ruta**: `/invitations/birthday-kids`
- **Colores**: Violeta, amarillo, rosa
- **Estilo**: Divertido y energético

### 2. Cumpleaños Elegante 🎉
Invitación sofisticada para cumpleaños de adultos con estilo formal y elegante.
- **Ruta**: `/invitations/birthday-adult`
- **Colores**: Negro, dorado, blanco
- **Estilo**: Elegante y profesional

### 3. Bautizo 🕊️
Diseño celestial y tierno para celebrar el sacramento del bautismo.
- **Ruta**: `/invitations/baptism`
- **Colores**: Azul cielo, blanco, dorado
- **Estilo**: Pacífico y espiritual

### 4. Quinceañera 👑
Invitación de ensueño con tema de princesa para celebrar los 15 años.
- **Ruta**: `/invitations/quinceanera`
- **Colores**: Rosa, dorado, blanco
- **Estilo**: Romántico y elegante

### 5. Primera Comunión 🍷
Diseño sagrado y especial para celebrar la primera comunión.
- **Ruta**: `/invitations/religious-celebration`
- **Colores**: Crema, dorado, marrón
- **Estilo**: Tradicional y ceremonial

## 🚀 Instalación

1. Clonar el repositorio
2. Instalar dependencias de Composer:
   ```bash
   composer install
   ```
3. Copiar el archivo de configuración:
   ```bash
   cp .env.example .env
   ```
4. Generar la clave de aplicación:
   ```bash
   php artisan key:generate
   ```
5. Iniciar el servidor de desarrollo:
   ```bash
   php artisan serve
   ```
6. Abrir en el navegador: `http://localhost:8000`

## 📁 Estructura del Proyecto

```
├── app/Http/Controllers/
│   └── InvitationController.php    # Controlador principal
├── resources/views/
│   ├── portfolio/
│   │   └── index.blade.php         # Página principal del portfolio
│   └── invitations/
│       ├── birthday-kids.blade.php
│       ├── birthday-adult.blade.php
│       ├── baptism.blade.php
│       ├── quinceanera.blade.php
│       └── religious-celebration.blade.php
└── routes/
    └── web.php                      # Rutas de la aplicación
```

## 🎯 Rutas Disponibles

- `/` - Portfolio principal con todas las invitaciones
- `/invitations/birthday-kids` - Invitación de cumpleaños infantil
- `/invitations/birthday-adult` - Invitación de cumpleaños elegante
- `/invitations/baptism` - Invitación de bautizo
- `/invitations/quinceanera` - Invitación de XV años
- `/invitations/religious-celebration` - Invitación de primera comunión

## 🛠️ Personalización

Cada invitación es fácil de personalizar:

1. Abre el archivo `.blade.php` correspondiente
2. Modifica los datos (nombres, fechas, lugares)
3. Ajusta los colores en la sección `<style>`
4. Cambia los emojis según tu preferencia

## 💻 Tecnologías

- **Laravel**: Framework PHP moderno
- **Blade**: Motor de plantillas de Laravel
- **CSS3**: Estilos y animaciones
- **HTML5**: Estructura semántica

## 📝 Licencia

Este proyecto está desarrollado con fines educativos y de demostración.
