<div>
    <h1>Lista de Paises</h1>
    <form action="" wire:submit.prevent="save">
        <input type="text" placeholder="Ingresar un nuevo País" wire:model="pais"/>
        <button >Guardar</button>
    </form>  
    <!--
    <input type="text" placeholder="Ingresar un nuevo País" wire:model="pais" wire:keydown.enter="save"/>
    <button wire:click="save">Guardar</button>
    -->  
    <ul>
        @foreach ($paises as $pais)
            <li>{{$pais}}</li>
        @endforeach
    </ul>
</div>
 