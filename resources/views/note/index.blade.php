<x-app-layout>
    <div class="py-3 px-5">
        <div class="flex flex-row items-center justify-between py-5">
    <h1 class="text-2xl  font-medium">Notas</h1>
    <a class="bg-green-500 py-3 px-3 rounded-lg text-white" href="{{route("note.create")}}">New note</a>
    </div>
    <div>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 py-5 sm:px-28 px-7 ">
            @foreach ($notes as $note)
            <div class="bg-yellow-500 rounded-lg px-3 py-2 relative flex flex-col justify-between ">
                <div class="text-xl sm:text-3xl">
                    {{Str::words($note->note,30)}}
                </div>
                <div class="flex flex-row justify-end gap-2">
                    <a class="bg-blue-600 px-3 py-1 rounded-lg text-white" href="{{route("note.show",$note)}}">View</a>
                    <a class="bg-blue-600 px-3 py-1 rounded-lg text-white" href="{{route("note.edit",$note)}}">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="bg-red-600 px-3 py-1 rounded-lg text-white">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="p-6">
        {{$notes->links()}}
    </div>
    </div>
</div>
</x-app-layout>
