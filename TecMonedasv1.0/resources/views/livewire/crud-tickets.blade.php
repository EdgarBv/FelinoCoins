<x-slot name="header">
    <head>
        <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        table,
        th,
        td {
            color: #fff !important;
            border: 1px solid #fff;
            padding: 3px;
        }

        .accion {
            color: #f00;
        }
        </style>
    </head>
    <h1 style="font-size: 1.5rem; text-align: center; padding: 30px; color: #fff;">EDITAR TICKETS</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div class="has-text-centered">
                            <p class="text-sm has-text-danger">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <input type="text" wire:model="buscador">
            <button style="padding: 7.5px 5px;" class="py-2 bg-white" wire:click="buscar()">Buscar</button>
            <button style="padding: 7.5px 5px;" class="py-2 bg-white" wire:click="refresh()">Refrescar</button>
        </div>
        <table style="margin: 15px auto;">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">ID de usuario</th>
                    <th class="text-center">Folio</th>
                    <th class="text-center">Tipo de canje</th>
                    <th class="text-center">Fecha de canje</th>
                    <th class="text-center">Expiración</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                <tr>
                    <td class="text-center">{{ $ticket->id }}</td>
                    <td class="text-center">{{ $ticket->user_id}}</td>
                    <td class="text-center">{{ $ticket->invoice }}</td>
                    <td class="text-center">{{ $ticket->type}}</td>
                    <td class="text-center">{{ $ticket->created_at}}</td>
                    <td class="text-center">{{ $ticket->expiration}}</td>
                    <td class="text-center">{{ $ticket->status}}</td>

                    <td class="text-center">
                        <button class="has-text-danger" type="button" wire:click="delete({{ $ticket->id }})">Eliminar</button>
                        <button class="has-text-info" type="button" wire:click="edit({{ $ticket->id }})">Editar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>