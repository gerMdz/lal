<div>
    <div x-data="cap6()" @resize.window="verAncho()" x-init="verAncho()">
        <form action="" @submit.prevent="console.log(mensaje)">
{{--            <input type="text" x-model="mensaje" class="form-input border-gray-300 m-1 bg-gray-500 text-white">--}}
            <input type="text" x-model="mensaje" class="form-input border-gray-100 m-1 bg-gray-600 text-white"
                   @keydown.ctrl.b="console.log(mensaje)"
            >
        <button @click.away="console.log('Haciendo clic fuera del botón')">
            Haz clic
        </button>
        </form>
        <p x-show="ancho">Solo en pantallas xl</p>
    </div>

    <div x-data="cap5()">
        <ul class="text-center text-gray-800">
            {{--            <template x-for="producto in productos">--}}
            {{--                <li>--}}
            {{--                    <span x-text="producto.name"></span>--}}
            {{--                    <span x-text="producto.stock"></span>--}}

            {{--                </li>--}}

            {{--            </template>--}}
            <template x-for="propiedad in Object.values(propiedades)">
                <li>
                    <span x-text="propiedad.name"></span>
                    <span x-text="propiedad.stock"></span>

                    <template x-if="propiedad.stock <= 5 ">
                        <span>
                        (Hacer pedido)
                        </span>
                    </template>


                </li>

            </template>

        </ul>
    </div>

    <div x-data="{mensaje: $wire.mensaje}" class="m-1 bg-gray-50">
        <input type="text" x-model="mensaje" class="form-input border-gray-300 m-1 bg-gray-500 text-white">
        <button @click="$refs.msj.innerText=mensaje" class="btn btn-primary">
            Enviar
        </button>
        <p x-ref="msj"></p>

    </div>
    <p>Contador: {{$count}} </p>

    <button wire:click="incrementar">
        Aumentar desde el componente
    </button>
    <div x-data="data()" x-init="start()">
        <button :disabled="open" @click="isOpen()">
            Menu
        </button>

        <nav class="hidden" :class="{'hidden':!open}" ) @click.away="close()">
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
            </ul>
        </nav>


    </div>


    <div x-data="{count: @entangle('count').defer}">
        <p>
            Un contador dentro de alpine
            <spn x-text="count"></spn>
        </p>
        <button @click="count++">
            Sumar
        </button>
    </div>
</div>

<script>
    function data() {
        return {
            open: null,
            start() {
                this.open = false
            },
            isOpen() {
                this.open = !this.open
            },
            close() {
                this.open = false
            }
        }
    }

    function cap5() {
        return {
            // productos: [
            //     {
            //         id: 1,
            //         name: 'General',
            //         stock: 5,
            //     },
            //     {
            //         id: 2,
            //         name: 'Profile',
            //         stock: 7,
            //     },
            //     {
            //         id: 3,
            //         name: 'Preguntas',
            //         stock: 10,
            //     },
            //     {
            //         id: 4,
            //         name: 'Progreso',
            //         stock: 14,
            //     },
            //
            // ],
            // Cmo array de objetos
            propiedades: {
                1: {
                    id: 1,
                    name: 'General',
                    stock: 5,
                },
                2: {
                    id: 2,
                    name: 'Profile',
                    stock: 7,
                },
                3: {
                    id: 3,
                    name: 'Preguntas',
                    stock: 10,
                },
                4: {
                    id: 4,
                    name: 'Progreso',
                    stock: 0,
                }

            }
        }
    }

    function cap6() {
        return {
            mensaje: 'Hola inicial',
            ancho: true,
            verAncho(){
                this.ancho = window.outerWidth > 768
            }
        }
    }
</script>

