<x-app-layout>
    <div class="sm:px-14 px-4 pt-5">
        <h1 class="text-3xl py-6">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="bg-yellow-500 rounded-lg  relative flex flex-col justify-between ">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="bg-transparent border-transparent px-2 sm:px-8 py-5 h-80" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="flex flex-row items-center justify-end mt-3 gap-2 pb-2 pr-1">
                <a href="{{ route('note.index') }}" class="bg-red-600 px-3 py-1 rounded-lg text-white">Cancel</a>
                <button class="bg-green-600 px-3 py-1 rounded-lg text-white">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
