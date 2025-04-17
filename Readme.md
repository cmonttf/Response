# 📦 StdJsonResponse

**StdJsonResponse** es una pequeña librería PHP para estructurar respuestas JSON de forma estándar. Está diseñada para usarse fácilmente dentro de proyectos Laravel (aunque no depende directamente de él), y también puede ser utilizada en proyectos PHP puros.

---

## 📌 ¿Para qué sirve?

Esta librería tiene como objetivo estandarizar las respuestas JSON de tu aplicación, manteniendo una estructura uniforme tanto en casos exitosos como en errores.

### Beneficios:

- ✅ Uniformidad en respuestas API
- 🧼 Controladores más limpios
- 🔁 Reutilizable en todo el proyecto
- 🧪 Testeable y desacoplada de Laravel
- 💥 Fácil de extender o personalizar

---

## 🛠 Instalación

Requiere PHP 8.0 o superior.

```bash
composer require tu-vendor/std-json-response
```

## 📂 Estructura del proyecto

```bash

StdJsonResponse/
├── src/
│   ├── StdResponse.php
│   └── JSONResponse.php
├── tests/
│   └── JSONResponseTest.php
├── composer.json
├── README.md
└── LICENSE
```

# 🧱 Clases disponibles
## 📄 StdResponse

Clase base para estructurar datos de respuesta.

``` bash

new StdResponse(
    string $message = '',
    bool $status = false,
    mixed $data = null,
    mixed $error = null
)

``` 

Propiedades públicas:

* status → true o false
* message → Texto explicativo
* data → Datos útiles (opcional)
* error → Detalles del error (opcional)

## 📄 JSONResponse

Transforma un StdResponse en una respuesta JSON lista para usar.

``` bash 
JSONResponse::success(StdResponse $response): array
JSONResponse::error(StdResponse $response): array
```

## 🚀 Ejemplo de uso en Laravel

``` bash
use Illuminate\Support\Facades\Response;
use StdJsonResponse\StdResponse;
use StdJsonResponse\JSONResponse;

public function showUser()
{
    try {
        $user = ['name' => 'Camilo', 'role' => 'Ingeniero'];
        $response = new StdResponse("Usuario encontrado", true, $user);

        return Response::json(JSONResponse::success($response));
    } catch (\Throwable $e) {
        $response = new StdResponse("Error al obtener usuario", false);
        $response->error = $e->getMessage();

        return Response::json(JSONResponse::error($response), 500);
    }
}
```

## ⚙️ Ejemplo de uso en PHP puro

``` bash 
require 'vendor/autoload.php';

use StdJsonResponse\StdResponse;
use StdJsonResponse\JSONResponse;

$response = new StdResponse("Proceso exitoso", true, ['foo' => 'bar']);
header('Content-Type: application/json');
echo json_encode(JSONResponse::success($response));
```

### 🔍 Formato de salida esperado

``` bash
{
  "status": true,
  "message": "Proceso exitoso",
  "data": {
    "foo": "bar"
  },
  "error": null
}
```

### Error

``` bash
{
  "status": false,
  "message": "Error al obtener usuario",
  "data": null,
  "error": "Detalles del error"
}
```

# 👨‍💻 Autor

Desarrollado por Camilo Montt Fierro

🛠️ Ingeniero Civil Informático

🎓 UCSC

📌 Especialista en desarrollo backend, migraciones y estructuras limpias.

GitHub: @cmontt

Email: cmonttf@gmail.com

# 📜 Licencia

MIT License — libre para usar, modificar y compartir. Solo no te olvides de darme el crédito. 😎