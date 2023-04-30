### Iniciando el proyecto

#### Cap 1

Si tengo el instalador de Laravel:

```bash
laravel new name-project --opciones
```

* ej. laravel new coders-free-08 --jet

Si no lo tienes, vamos a descargarlo con composer

```bash
composer global require laravel/installer
```

Trabajo con sqlite

```bash
php artisan migrate
```

Si no se instala las directivas en el app.js de alpine correr

```bash
composer require livewire/livewire
php artisan migrate
php artisan jetstream:install livewire
```

Luego agregamos los node_modules

```bash
npm install
```

Para instalar en el public los archivos necesarios

```bash
npm run dev
```

Creando componentes con el artesano

```bash
php artisan make:livewire Nombre_componente
```

Si la vista no queda bien, veamos si agregando en app.blade.php y guest.blade.php

```html

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@livewireStyles
<script src="{{ asset('js/app.js') }}" defer></script>
```

Refresquemos y deberíamos ver bien nuestra pantalla

#### Uso

$wire -> Nos permite acceder a las propiedades definidas en el componente que renderiza la vista.
@entangle -> Nos permite sincronizar tanto la propiedad como la variable del mismo nombre dentro de la vista.
wire: -> Nos permite llamar una función dentro del componente.
.defer: -> Nos permite llamar asíncronamente una función dentro de la vista, pero una vez que se realice una acción en
el componente.


#### Cap 2
##### Inicializar componentes con x-data y x-ini
###### Uso
x-data -> Se puede definir desde la vista.
function -> Podemos sacar de la parte central las funciones y agregarlas en un script específico.
.away -> Directiva, no se bien que hace.
