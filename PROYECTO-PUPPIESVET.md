# 🐶 PROYECTO PUPPIESVET - DOCUMENTACIÓN

## 📁 Estructura de Directorios

### Directorio Local de Trabajo
```
C:\xampp\htdocs\puppiesvet-clean
```
- **Propósito**: Instalación completa de WordPress para desarrollo local
- **Uso**: Aquí se trabaja y prueban todos los cambios
- **Contenido**: WordPress completo + tema Astra + tema hijo personalizado

### Directorio Sincronizado con GitHub (WP Pusher)
```
C:\xampp\htdocs\astra-child-theme
```
- **Propósito**: Repositorio sincronizado con WP Pusher para deploy automático
- **Repositorio GitHub**: https://github.com/ahumada985/astra-child-theme.git
- **Uso**: Solo contiene los archivos del tema hijo (no todo WordPress)
- **Deploy**: Cuando se hace push aquí, WP Pusher actualiza automáticamente el sitio en producción

### Repositorio WordPress Completo
```
Repositorio: https://github.com/ahumada985/Wordpress-puppiesvet.git
Branch: main
```
- **Propósito**: Backup completo del sitio WordPress
- **Contenido**: Todo el proyecto WordPress incluyendo plugins, uploads, etc.

## 🔄 Flujo de Trabajo para Deploy

### 1. Hacer Cambios Locales
Trabaja en: `C:\xampp\htdocs\puppiesvet-clean`

### 2. Guardar en Repositorio WordPress Completo
```bash
cd C:\xampp\htdocs\puppiesvet-clean
git add wp-content/themes/astra-child/
git commit -m "Descripción de cambios"
git push origin main
```

### 3. Sincronizar con Repositorio WP Pusher (Para Deploy)
```bash
# Copiar archivos del tema hijo al directorio de WP Pusher
cp C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\functions.php C:\xampp\htdocs\astra-child-theme\functions.php
cp C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\style.css C:\xampp\htdocs\astra-child-theme\style.css

# Si hay nuevas imágenes o videos:
cp C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\*.mp4 C:\xampp\htdocs\astra-child-theme\
cp C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\*.jpg C:\xampp\htdocs\astra-child-theme\
cp C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\*.png C:\xampp\htdocs\astra-child-theme\

# Hacer commit y push (esto activará WP Pusher)
cd C:\xampp\htdocs\astra-child-theme
git add .
git commit -m "Deploy: Descripción de cambios"
git push origin main
```

### 4. WP Pusher Deploy Automático
- WP Pusher detecta el push al repositorio `astra-child-theme`
- Actualiza automáticamente el tema en el servidor de producción
- ✅ Cambios en vivo!

## 📝 Archivos Principales del Tema

### functions.php
- Ubicación local: `C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\functions.php`
- Contenido: Funciones PHP del tema hijo
- Estado actual: Solo carga estilos (funciones custom removidas para usar Elementor)

### style.css
- Ubicación local: `C:\xampp\htdocs\puppiesvet-clean\wp-content\themes\astra-child\style.css`
- Contenido:
  - Hero section principal (`.puppiesvet-hero`)
  - Hero section para página /ssss/ (`.puppiesvet-ssss-hero`)
  - Estilos responsive
  - Ocultar footer y elementos específicos
- Versión actual: 1.0.1

### Archivos Multimedia
- Videos: `pup-animado.mp4`, `VIDEO_OFICIAL.mp4`, `VIDEO_OFICIAL2.mp4`
- Imágenes: Logos, fotos de productos, etc.

## 🎯 Páginas del Sitio

### Páginas Creadas
1. **Inicio** - Página principal del sitio
   - Clase CSS: `.puppiesvet-hero`
   - Características: Video animado, gradiente púrpura, botones CTA
   - Footer oculto

2. **Quiénes Somos** - Información sobre PuppiesVet
   - Presentación de la empresa
   - Misión y valores

3. **Reclamos y Sugerencias** - Formulario de contacto
   - Para atención al cliente
   - Gestión de feedback

### Páginas Especiales

#### Página /ssss/ (Demo/Test)
- Clase CSS: `.puppiesvet-ssss-hero`
- Características: Layout 45/55, video lado izquierdo, texto lado derecho
- Diseño: Más editorial y elegante

## 🛠️ Plugins Instalados (Local y Producción)

### Plugins de Seguridad
- **Wordfence Security** - Firewall y escaneo de malware
- **Really Simple SSL** - Configuración automática de SSL/HTTPS

### Plugins de Funcionalidad
- **Creame WhatsApp Me (JoinChat)** - Botón flotante de WhatsApp
- **Elementor** - Constructor visual de páginas
- **WP Pusher** - Deploy automático desde GitHub (solo en producción)

### Tema
- **Astra Theme** - Tema padre
- **Astra Child** - Tema hijo personalizado

## ⚡ Comandos Rápidos

### Deploy Completo (Un Solo Comando)
```bash
# En Windows (Git Bash)
cd /c/xampp/htdocs/puppiesvet-clean && \
git add wp-content/themes/astra-child/ && \
git commit -m "Update theme" && \
git push origin main && \
cp wp-content/themes/astra-child/functions.php ../astra-child-theme/ && \
cp wp-content/themes/astra-child/style.css ../astra-child-theme/ && \
cd ../astra-child-theme && \
git add . && \
git commit -m "Deploy: Update theme" && \
git push origin main
```

### Solo Deploy (Si ya está en WordPress repo)
```bash
cd /c/xampp/htdocs/astra-child-theme && \
cp ../puppiesvet-clean/wp-content/themes/astra-child/functions.php . && \
cp ../puppiesvet-clean/wp-content/themes/astra-child/style.css . && \
git add . && \
git commit -m "Deploy: Update" && \
git push origin main
```

## 🔍 Verificación Post-Deploy

1. ✅ Verificar push en GitHub: https://github.com/ahumada985/astra-child-theme
2. ✅ Verificar actualización en WP Pusher (WordPress admin)
3. ✅ Revisar sitio en producción
4. ✅ Probar responsive (móvil, tablet, desktop)

## 📌 Notas Importantes

- **NUNCA** editar directamente en `/c/xampp/htdocs/astra-child-theme`
- **SIEMPRE** trabajar en `/c/xampp/htdocs/puppiesvet-clean`
- Los archivos en `astra-child-theme` son solo para deploy
- WP Pusher solo actualiza cuando detecta cambios en el repositorio GitHub
- Mantener ambos repositorios sincronizados

## 🚀 Cómo Replicar Plugins y Páginas en Producción

### ⚠️ IMPORTANTE: WP Pusher solo actualiza el TEMA
WP Pusher NO sincroniza:
- ❌ Plugins nuevos
- ❌ Páginas creadas
- ❌ Posts/Entradas
- ❌ Configuraciones de WordPress
- ❌ Base de datos

### 📦 Instalar Plugins en Producción

**Opción 1: Instalación Manual (Recomendado)**

1. Accede al admin de WordPress en producción
2. Ve a **Plugins → Añadir nuevo**
3. Busca e instala:
   - **Wordfence Security**
   - **Really Simple SSL**
   - **Creame WhatsApp Me** (buscar "joinchat")

4. Activa cada plugin
5. Configura según sea necesario

**Opción 2: Copiar Configuración desde Local**
```bash
# Exportar lista de plugins activos (desde local)
wp plugin list --status=active --format=csv > plugins-activos.csv

# Luego en producción, instalar uno por uno con:
wp plugin install wordfence --activate
wp plugin install really-simple-ssl --activate
wp plugin install creame-whatsapp-me --activate
```

### 📄 Crear Páginas en Producción

**Opción 1: Creación Manual (Recomendado)**

1. En WordPress producción: **Páginas → Añadir nueva**

2. **Página "Inicio"**
   - Título: Inicio
   - Usar Elementor para diseñar
   - Aplicar plantilla con clase `.puppiesvet-hero`
   - Publicar

3. **Página "Quiénes Somos"**
   - Título: Quiénes Somos
   - Agregar contenido sobre la empresa
   - Publicar

4. **Página "Reclamos y Sugerencias"**
   - Título: Reclamos y Sugerencias
   - Agregar formulario de contacto
   - Publicar

5. **Configurar Página de Inicio**
   - Ir a **Ajustes → Lectura**
   - Seleccionar "Una página estática"
   - Elegir "Inicio" como página principal

**Opción 2: Exportar/Importar con Plugin**

1. En local: Instalar plugin **All-in-One WP Migration**
2. Ir a **All-in-One WP Migration → Exportar**
3. Seleccionar solo "Páginas" (desmarcar plugins, tema, etc.)
4. Descargar archivo
5. En producción: Importar el archivo

### 🔄 Migración Completa (Alternativa)

Si quieres migrar TODO de local a producción:

**Plugin Duplicator:**
1. Instalar **Duplicator** en local
2. Crear paquete completo
3. Descargar installer.php y archivo.zip
4. Subir a producción y ejecutar installer
5. ⚠️ Esto sobrescribe TODO en producción

## 🐛 Troubleshooting

### Los cambios del TEMA no aparecen en producción
1. Verificar que se hizo push a `astra-child-theme`
2. Revisar WP Pusher en WordPress admin
3. Limpiar caché del sitio
4. Hacer "Update" manual desde WP Pusher

### Los PLUGINS no aparecen en producción
- **Causa**: WP Pusher solo actualiza el tema
- **Solución**: Instalar plugins manualmente en producción (ver sección arriba)

### Las PÁGINAS no aparecen en producción
- **Causa**: Las páginas están en la base de datos, no en archivos
- **Solución**: Crear páginas manualmente en producción (ver sección arriba)

### Archivos desincronizados
```bash
# Copiar todo el tema desde puppiesvet-clean a astra-child-theme
cp -r /c/xampp/htdocs/puppiesvet-clean/wp-content/themes/astra-child/* /c/xampp/htdocs/astra-child-theme/
```

---

**Última actualización**: 2 de octubre de 2025
**Versión del tema**: 1.0.1
