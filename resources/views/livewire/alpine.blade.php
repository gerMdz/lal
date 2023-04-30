<div>
    <p>Contador: {{$count}} </p>

    <button wire:click="incrementar">
        Aumentar desde el componente
    </button>

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
