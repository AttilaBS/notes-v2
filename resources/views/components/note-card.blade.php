<div class="max-w-sm rounded-md overflow-hidden shadow-lg note-card">
    <div class="px-6 py-4 height-title">
        <div class="font-bold text-xl mb-2">{{ $note->title }}</div>
    </div>
    <div class="px-6 py-4 height-content">
        <div class="text-lg mb-2">{{ Str::words($note->content, 20, '...') }}</div>
    </div>
    <div class="px-6 pt-4 pb-8">
        <button onclick="location.href='{{ route('notes.details', ['note' => $note]) }}'" class="px-4 py-2 bg-lime-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-800 focus:bg-lime-800 active:bg-lime-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-48">Exibir nota</buttom>
    </div>
</div>