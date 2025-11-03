# 📦 Formulario de Producto (PHP + PostgreSQL)
---

## 🚀 Instalación y ejecución

### 1️⃣ Clonar o descargar el proyecto

Guarda la carpeta **`Registro_productos`** dentro del directorio **htdocs** de XAMPP:

```
C:\xampp\htdocs\Registro_productos
```

O, si prefieres usar Git:

```bash
git clone https://github.com/AntonioYoma96/formulario-producto-php.git
```

---

### 2️⃣ Importar la base de datos

Importa el archivo **`registro_productos.sql`** ubicado en la carpeta **`sql`** del proyecto dentro de tu gestor de bases de datos **PostgreSQL**.

---

### 3️⃣ Configurar la conexión a la base de datos

Abre el archivo:

```
php/conexion.php
```

y modifica las variables `$user` y `$pass` con las credenciales de tu usuario de PostgreSQL:

```php
$user = "TU_USUARIO_DE_POSTGRES";
$pass = "TU_CONTRASEÑA_DE_POSTGRES";
```

---

### 4️⃣ Iniciar el servidor Apache

Abre el **Panel de Control de XAMPP** y activa el servicio **Apache**.

---

### 5️⃣ Ejecutar la aplicación

Abre tu navegador y accede a la siguiente dirección (por defecto, el puerto es el 80):

```
http://localhost:80/Registro_productos
```

Si utilizas otro puerto, reemplázalo según corresponda, por ejemplo:

```
http://localhost:8080/Registro_productos
```

---

## 🧩 Tecnologías utilizadas

* **PHP** 8.0.7
* **PostgreSQL** 13.1
* **HTML5 / CSS3**
* **JavaScript**
* **XAMPP**

---

## 👨‍💻 Autor

**Antonio Yoma**
📎 [GitHub](https://github.com/AntonioYoma96)
