<x-app-layout>
    <div class="sm:px-14 px-4 pt-5">
        <h1 class="text-3xl py-6">Crea una nueva nota</h1> 
        <form action="{{route("note.store")}}" method="POST" class="bg-yellow-500 rounded-lg  relative flex flex-col justify-between ">
            @csrf
            <textarea placeholder="Ingresa aqui tu nota" name="note" class="bg-transparent border-transparent px-2 sm:px-8 py-5 h-80" rows="10"></textarea>
            <div class="flex flex-row items-center justify-end mt-3 gap-2 pb-2 pr-1">
                <a href="{{route("note.index")}}" class="bg-red-600 px-3 py-1 rounded-lg text-white" >Cancelar</a>
                <button class="bg-green-600 px-3 py-1 rounded-lg text-white">Agregar</button>
            </div>
        </form>
    </div>
       
</x-app-layout>
