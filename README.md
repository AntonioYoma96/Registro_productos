# 📦 Formulario de Producto (PHP + PostgreSQL)

Este proyecto permite registrar productos con distintos atributos (como nombre, bodega, sucursal, materiales, descripción, etc.) a través de un formulario web desarrollado en **PHP**, **HTML**, **CSS** y **PostgreSQL**.

---

## 🚀 Instalación y ejecución

### 1. Clonar o descargar el proyecto

Guarda la carpeta **`Registro_productos`** dentro del directorio **htdocs** de XAMPP:

```
C:\xampp\htdocs\Registro_productos
```

O, si prefieres usar Git:

```bash
git clone https://github.com/AntonioYoma96/formulario-producto-php.git
```

---

### 2. Abrir el proyecto

Abre la carpeta **Registro_productos** con **Visual Studio Code** o tu editor preferido.

---

### 3. Configurar la conexión a la base de datos

En el archivo:

```
php/conexion.php
```

modifica el valor de la variable `$pass` con la contraseña de tu usuario de **PostgreSQL**:

```php
$pass = "TU_CONTRASEÑA_DE_POSTGRES";
```

---

### 4. Iniciar el servidor Apache

Abre el **Panel de control de XAMPP** y activa el servicio **Apache**.

---

### 5. Ejecutar la aplicación

Abre tu navegador y accede a la siguiente dirección (por defecto, el puerto es el 80):

```
http://localhost:80/Registro_productos
```

Si usas otro puerto, reemplázalo según corresponda (por ejemplo: `http://localhost:8080/Registro_productos`).

---

## 🧩 Tecnologías utilizadas

* PHP 8+
* PostgreSQL
* HTML5 / CSS3
* JavaScript
* XAMPP

---

## 🧑‍💻 Autor

**Antonio Yoma**
[GitHub](https://github.com/AntonioYoma96)
