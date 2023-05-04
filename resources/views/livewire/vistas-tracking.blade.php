<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <x-table>
            <div class="m-2 px-6 py-4">
                {{--                <input type="text" wire:model="busqueda">--}}
                <x-jet-input class="w-full" placeholder="Texto a buscar" type="text" wire:model="busqueda"/>
            </div>
            @if($vistas->count())

                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Id</th>
                        <th scope="col" class="px-6 py-4">Título</th>
                        <th scope="col" class="px-6 py-4">Descripción</th>
                        <th scope="col" class="px-6 py-4">Edit</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($vistas as $vista)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="px-6 py-4 font-medium">{{$vista->id}}</td>
                            <td class="px-6 py-4">{{$vista->title}}</td>
                            <td class="px-6 py-4">{{$vista->description}}</td>
                            <td class="px-6 py-4">@twitter</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    <h4>
                        No se encontraron vistas
                    </h4>
                </div>
            @endif
        </x-table>

    </div>


</div>
