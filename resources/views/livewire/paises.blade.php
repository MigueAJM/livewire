<div>
    <h1>Lista de Paises</h1>

    <input type="text" placeholder="Ingresar un nuevo País" wire:model="pais"/>

    <button wire:click="save">Guardar</button>

    <ul>
        @foreach ($paises as $pais)
            <li>{{$pais}}</li>
        @endforeach
    </ul>
</div>
 