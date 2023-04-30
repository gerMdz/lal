<div >
    <p>Contador: {{$count}} </p>

    <button wire:click="incrementar">
        Aumentar desde el componente
    </button>
    <div x-data="data()" x-init="start()">
        <button :disabled="open" @click="isOpen()">
            Menu
        </button>

        <nav class="hidden" :class="{'hidden':!open}") @click.away="close()">
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
            open:null,
            start(){
                this.open = false
            },
            isOpen(){
                this.open = !this.open
            },
            close(){
                this.open = false
            }
        }
    }
</script>

