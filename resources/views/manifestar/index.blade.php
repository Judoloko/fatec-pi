<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manifestações de Interesse') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-3xl">Ações Administrativas</h1>
                    <ul class="mt-2">
                        <li class="list-disc ml-5"><a href="{{ route('editais.create') }}" class="underline text-blue-500">Cadastrar Edital</a></li>
                    </ul>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-lg font-semibold mb-4">Usuários que fizeram manifestações:</h2>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Usuário</th>
                                <th class="py-3 px-6 text-left">Número do Edital</th>
                                <th class="py-3 px-6 text-left">Data da Manifestação</th>
                                <th class="py-3 px-6 text-left">Partir de</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($manifestacoes as $manifestacao)
                            <tr class="hover:bg-gray-50">
                                <td class="py-4 px-6 border-b border-gray-200">{{ $manifestacao->id }}</td>
                                <td class="py-4 px-6 border-b border-gray-200">{{ $manifestacao->usuario->email }}</td>
                                <td class="py-4 px-6 border-b border-gray-200">{{ $manifestacao->edital->numero_edital }}</td>
                                <td class="py-4 px-6 border-b border-gray-200">{{ $manifestacao->created_at->format('d/m/Y') }}</td>
                                <td class="py-4 px-6 border-b border-gray-200">{{ $manifestacao->partir_de }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>