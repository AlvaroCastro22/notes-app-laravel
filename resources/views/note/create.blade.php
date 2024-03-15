<x-layout>
    <div>
        <h1>Create new Note</h1> 
        <form action="{{route("note.store")}}" method="POST" class="note">
            @csrf;
            <textarea name="note" class="note-body" rows="10"></textarea>
            <div class="note-buttons">
                <a href="{{route("note.index")}}" >Cancel</a>
                <button >Submit</button>
            </div>
        </form>
    </div>
       
</x-layout>
