<div class="container mx-auto">

    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">

        <div class="mb-3">
            <label for="name" class="form-label mb-2">Nombre</label>
            <input wire:model="name" id="name" name="body" placeholder="Ingrese un nombre"
            class="form-control">

            @error('name')
                <p class="text-xs text-red-500 italic">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-3">
            <label for="body" class="form-label mb-2">Descripción</label>
            <textarea wire:model="body" name="body" id="body" rows="4"
            placeholder="Ingrese la descripción del post" class="form-control"></textarea>

            @error('body')
                <p class="text-xs text-red-500 italic">{{$message}}</p>
            @enderror

        </div>

        @if($action == 'store')
            <button wire:click="store" class="btn-primary">Crear</button>
        @else
            <button wire:click="update" class="btn-primary">Actualizar</button>
            <button wire:click="default" class="btn-secundary">Cancelar</button>
        @endif

    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto mb-8">
        <table>
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wider">
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Nombre</th>
                    <th class="px-6 py-3">Body</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($posts as $post)
                    <tr class="text-sm text-gray-500">
                        <td class="px-6 py-4">{{$post->id}}</td>
                        <td class="px-6 py-4">{{$post->name}}</td>
                        <td class="px-6 py-4">{{$post->body}}</td>
                        <td class="px-6 py-4">
                            <button wire:click="edit({{$post}})" class="btn-primary w-full">Editar</button>
                            <button wire:click="destroy({{$post}})" class="btn-secundary">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="bg-gray-100 px-6 py-4 border-t border-gray-200">
            {{$posts->links()}}
        </div>
    </div>
</div>
