# :gear: Taller Mecánico: Gestión de Clientes, Coches, Pedidos y Piezas

## 1. :bulb: Descripción del problema

En un taller mecánico, surge la necesidad de gestionar de forma eficiente a los clientes, sus vehículos, los pedidos de piezas y los detalles de las reparaciones realizadas. El sistema debe permitir:

- Registrar y gestionar clientes, relacionándolos con sus respectivos coches.
- Llevar un control de los pedidos realizados a proveedores, con información de las piezas solicitadas.
- Gestionar el inventario de piezas, con información del stock disponible.
- Registrar los detalles de cada reparación, incluyendo los coches involucrados, piezas utilizadas y cantidades.

Este proyecto se ha desarrollado en **Laravel** y utiliza un modelo relacional para gestionar las tablas y relaciones necesarias, proporcionando una solución útil y escalable.

---

## 2. :chart_with_upwards_trend: Modelo E-R

El sistema implementa el siguiente modelo Entidad-Relación:

![Modelo E-R](/Modelo_ER_Practica_UD3.png)

El diagrama anterior muestra las tablas y las relaciones necesarias para el correcto funcionamiento del sistema. Incluye todas las claves primarias (PK), claves foráneas (FK) y las cardinalidades correspondientes entre las entidades.

---

## :clipboard: Detalles del Proyecto

### 1. :label: Modelos

Los modelos utilizan **Eloquent ORM** para simplificar las operaciones CRUD y las relaciones entre las tablas.

**Modelos utilizados:**

- **Cliente**: Representa a los clientes registrados en el sistema.
- **Coche**: Gestiona los coches asociados a los clientes.
- **Pedido**: Registra los pedidos de piezas realizados.
- **Pieza**: Define las piezas disponibles en el inventario.
- **DetallePedido**: Relaciona los pedidos con las piezas y coches involucrados.

### 2. :building_construction: Migraciones

Las migraciones definen la estructura de las tablas y relaciones:

- **Clientes**: Tabla independiente que no depende de otras.
- **Coches**: Relacionada con la tabla clientes.
- **Pedidos**: Asociada a clientes.
- **Piezas**: Tabla independiente para gestionar el inventario.
- **DetallePedidos**: Relaciona pedidos, piezas y coches.

### 3. :floppy_disk: Seeders

Se han creado seeders para poblar las tablas con datos de ejemplo y facilitar las pruebas.

**Seeders creados:**

- **ClienteSeeder**: Crea clientes ficticios.
- **CocheSeeder**: Registra coches de prueba.
- **PedidoSeeder**: Genera pedidos con datos simulados.
- **PiezaSeeder**: Define piezas de ejemplo.
- **DetallePedidoSeeder**: Relaciona pedidos, coches y piezas.

### 4. :rocket: Rutas API

El archivo `api.php` contiene las rutas necesarias para interactuar con la API.

---

## :hammer: Way of Working

### 1. Docker

- Herramienta utilizada para desplegar la base de datos MariaDB y el entorno Laravel en contenedores aislados.
- Descárgalo desde [Docker](https://www.docker.com/).

### 2. Composer

- Gestor de dependencias para PHP, necesario para instalar y mantener las dependencias de Laravel.
- Descárgalo desde [Composer](https://getcomposer.org/).

### 3. PHP

- Se requiere **PHP 8.1 o superior** con las extensiones necesarias para Laravel.

### 4. Postman

- Utilizado para realizar pruebas de los endpoints de la API.
- Descárgalo desde [Postman](https://www.postman.com/).

---

## :wrench: Pasos para Configurar el Entorno

### 1. :arrow_down_small: Clonar el Proyecto

Clona el repositorio desde GitHub y accede a la carpeta del proyecto:

```bash
git clone https://github.com/SergioSoria12/Practica_UD3
cd Practica_UD3
```

### 2. Configurar el archivo `.env`

Configura las variables de conexión a la base de datos MariaDB:

```bash
DB_CONNECTION=mysql  
DB_HOST=mariadb  
DB_PORT=3306
DB_DATABASE=practica_ud3
DB_USERNAME=root
DB_PASSWORD=s3cr3t
```

Si no existe el archivo `.env`, crea uno basado en el ejemplo:

```bash
cp .env.example .env
```

### 3. :whale2: Levantar los contenedores mediante Docker Compose

Levanta los contenedores:

```bash
docker-compose up --build -d
```

Verifica que los contenedores estén funcionando:

```bash
docker ps
```

Deberías ver los contenedores de Laravel y MariaDB en ejecución.

### 4. :arrow_up: Migrar y poblar la base de datos

Ejecuta las migraciones y seeders para preparar la base de datos:

```bash
docker exec -it laravel bash
php artisan migrate
php artisan db:seed
```

### 5. :file_folder: Acceso a la base de datos (opcional)

Si necesitas acceder directamente a MariaDB:

```bash
docker exec -it practica_ud3_mariadb mariadb -u root -p
```

Contraseña:

```bash
s3cr3t
```

Ejemplo de comandos SQL:

```bash
SHOW DATABASES;
USE practica_ud3;
SHOW TABLES;
```

### 6. :package: Dependencias (Composer)

Si encuentras errores con las dependencias:

```bash
docker exec -it laravel bash
composer install
```

---

## :test_tube: Pruebas con Postman

Para probar los endpoints de la API:

1. Abre Postman.
2. Haz clic en Import y selecciona el archivo `Practica_UD3.postman_collection.json`.
3. Usa las rutas disponibles en la colección para realizar las pruebas.

### Ejemplos de peticiones

**Listar Clientes:**

- **GET** /api/clientes
- URL Completa: `http://127.0.0.1:8000/api/clientes`

**Crear Cliente:**

- **POST** /api/clientes
- URL Completa: `http://127.0.0.1:8000/api/clientes`

Body (JSON):

```json
{
    "nombre": "Juan Pérez",
    "telefono": "600123456",
    "email": "juan.perez@example.com"
}
```

**Actualizar Coche:**

- **PUT** /api/coches/1
- URL Completa: `http://127.0.0.1:8000/api/coches/1`

Body (JSON):

```json
{
    "matricula": "5678XYZ",
    "marca": "Honda",
    "modelo": "Civic",
    "cliente_id": 2
}
```

**Eliminar Pedido:**

- **DELETE** /api/pedidos/1
- URL Completa: `http://127.0.0.1:8000/api/pedidos/1`

---

## :mag_right: Comandos útiles

Limpiar la caché:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

Ver las rutas registradas:

```bash
php artisan route:list
```

