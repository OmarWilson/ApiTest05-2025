# VIP2CARS - Sistema de Registro de Vehículos y Contactos

Este proyecto es un CRUD desarrollado con Laravel que permite registrar vehículos y datos de contacto de los clientes. Pensado para la empresa automotriz **VIP2CARS**.

---

## Funcionalidades

- Crear, listar, actualizar y eliminar vehículos registrados.
- Validación de datos (la **placa es única**).
- API RESTful lista para integrarse con frontend o apps externas.

---

## Requisitos

Antes de comenzar, asegurate de tener instalado:

- PHP >= 8.1
- Composer
- MySQL
- Laravel 12
- Git 

---

## 🚀 Instalación paso a paso

1. **Clonar el repositorio**

git clone https://github.com/OmarWilson/ApiTest05-2025.git

2. **Crear una base de Datos MySQL**

Se recomienda usar un user root, se ha incluido el archivo .int en el repositorio en donde se encuentra la configuracion de conexion.
Usar el siguiente MySQL:


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla testapi.cache: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.cache_locks: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.job_batches: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.migrations: ~6 rows (aproximadamente)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_04_28_053744_create_personal_access_tokens_table', 2),
	(5, '2025_04_28_055641_create_student', 3),
	(6, '2025_04_28_193013_create_vehiculos_contactos_tabla', 4);

-- Volcando datos para la tabla testapi.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.sessions: ~1 rows (aproximadamente)
REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('k7D9qGVRdrBWMqYoHX4JZr4Hw6BuRyK4VX47fcmx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVM3Zm5lSFY2U2lBdm14ZzFaVlQ4VnZRMEszNGpMWFAwR3VZN0VqZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745741366);

-- Volcando datos para la tabla testapi.users: ~0 rows (aproximadamente)

-- Volcando datos para la tabla testapi.vehiculos_contactos: ~1 rows (aproximadamente)
REPLACE INTO `vehiculos_contactos` (`id`, `placa`, `marca`, `modelo`, `anio_fabricacion`, `nombre_cliente`, `apellidos_cliente`, `nro_documento_cliente`, `correo_cliente`, `telefono_cliente`, `created_at`, `updated_at`) VALUES
	(1, 'ABC123', 'Toyota', 'Corolla', '2018', 'Juanito', 'Pérez', '12345678', 'juan.perez@example.com', '987654321', '2025-04-29 12:31:03', '2025-04-29 12:47:48');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;


3. **Ejecutar Migracion**

En consola ejecutar:

    php artisan migrate

4. **Listo!: Puedes Levantar el Servidor**

Para levantar usar el comando:

    php artisan serve

Puedes usar Postman para probar el CRUD

Aqui una collecion simple para probarla

https://awdada-1550.postman.co/workspace/New-Personal-Workspace~94469bf1-6600-49ea-b899-6a117f9819f3/collection/36385962-40ed0a9b-206e-49c6-b502-d713feb46814?action=share&creator=36385962


