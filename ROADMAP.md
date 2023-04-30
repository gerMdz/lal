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

#### Cap 3

##### Atributos dinámicos (x-bind)

###### Uso

x-bind: -> Cambiar atributos html.
':' -> reemplaza a 'x-bind:' en los atributos.
'x-on:' pude ser reemplazo por '@'

#### Cap 4

##### Sincronizar inputs (x-model)

###### Uso

x-model: -> Permite sincronizar los valores de un input con las variables de alpinejs.

#### Cap 5

##### Bucles y condicionales

###### Uso

```<template>``` -> Permite mostrar datos de un bucle.

* ej.: ```<template x-for="">```

```<template>``` -> Permite mostrar datos en un condicional.
* ej.: ```<template x-if="">```

** Recordar que poner un ```<template>``` dentro de otro ```<template>``` obliga a que el contenido esté envuelto en
otro tag si no da error de unique root o algo parecido dado que solo acepta una etiqueta padre por template

#### Cap 6

##### Métodos mágicos

###### Uso

$el -> Se referencia a si mismo.

$refs -> Hace referencia a otro elemento indicando (x-ref) individualizándola por `.valor_de_la_referencia`. 

@event -> Captura el evento.
* $event.target.value toma el valor.

@mi-evento -> Pueden crearse eventos propios.
* $dispatch -> Envía el evento al navegador.
* $event.detail -> Toma el valor del evento personalizado.



###### Next [Cap 6](https://www.youtube.com/watch?v=7UF0WccR0ss)
