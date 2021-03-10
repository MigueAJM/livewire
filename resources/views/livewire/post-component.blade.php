<div class="container mx-auto">

    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
        <div class="mb-3">
            <label for="name" class="form-label mb-2">Nombre</label>
            <input id="name" name="body" placeholder="Ingrese un nombre"
            class="form-control">
        </div>

        <div class="mb-3">
            <label for="body" class="form-label mb-2">Descripción</label>
            <textarea  name="body" id="body" rows="4"
            placeholder="Ingrese la descripción del post" class="form-control"></textarea>
        </div>

        <div>
            <button class="btn-primary">Crear post</button>
        </div>
    </div>

    <table class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto">
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
                        <button class="btn-primary w-full">Editar</button>
                        <button class="btn-secundary">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
