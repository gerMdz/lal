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
                        <th scope="col"
                            class="cursor-pointer px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('id')"
                        >
                            Id
                            {{--                            Sort--}}
                            @if($sort == 'id')
                                @if($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fa fa-sort float-right mt-1"></i>

                            @endif
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('title')"
                        >
                            Título
{{--                            Sort--}}
                            @if($sort == 'title')
                                @if($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fa fa-sort float-right mt-1"></i>

                            @endif

                        </th>
                        <th scope="col"
                            class="cursor-pointer px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('description')"
                        >
                            Descripción
                            {{--                            Sort--}}
                            @if($sort == 'description')
                                @if($direction == 'asc')
                                    <i class="fa fa-sort-alpha-asc float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-desc float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fa fa-sort float-right mt-1"></i>

                            @endif
                        </th>
                        <th scope="col"
                            class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($vistas as $vista)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="px-6 py-4 font-medium">{{$vista->id}}</td>
                            <td class="px-6 py-4">{{$vista->title}}</td>
                            <td class="px-6 py-4">{{$vista->description}}</td>
                            <td class="px-6 py-4">EDIT</td>
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
