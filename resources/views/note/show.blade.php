<x-app-layout>
    <div class="note-container single-note">
        <div class="flex flex-row items-center justify-between sm:px-7 px-5 py-5">
            <h1 class="text-lg py-4" >Note: {{ $note->created_at }}</h1>
            <div class="note-buttons flex flex-row items-center justify-between gap-2">
                <a class="bg-blue-600 px-3 py-1 rounded-lg text-white" href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="bg-red-600 px-3 py-1 rounded-lg text-white">Delete</button>
                </form>
            </div>
        </div>
        <div class="note bg-yellow-500 rounded-lg px-2 sm:px-8 py-5 relative flex flex-col justify-between mx-5 sm:mx-14">
            <div class="text-lg sm:text-3xl">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>