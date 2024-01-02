<div class="flex p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem-vindo ao aplicativo Notes-v2 !
    </h1>
</div>

<div class="bg-gray-200 bg-opacity-25 flex justify-around p-6 lg:p-8">
    <button onclick="location.href='{{ route('notes.all') }}'" class="px-4 py-2 bg-lime-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-800 focus:bg-lime-800 active:bg-lime-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-48">Ver todas as notas</buttom>
    <button onclick="location.href='{{ route('notes.all') }}'" class="px-4 py-2 bg-lime-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-800 focus:bg-lime-800 active:bg-lime-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 w-48">Criar uma nota</buttom>
</div>
