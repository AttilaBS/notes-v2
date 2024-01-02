<div>
    <div class="px-6 pt-12 pb-8">
        <button onclick="location.href='{{ route('notes.all') }}'" class="px-4 py-2 bg-lime-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-800 focus:bg-lime-800 active:bg-lime-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-48">Criar nota</buttom>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg px-4 py-8">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="grid grid-flow-row xs:grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 mobile-adjust">
                @foreach ($notes as $note)
                    @component('components.note-card', ['note' => $note])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
</div>
