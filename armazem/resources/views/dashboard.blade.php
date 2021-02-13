<style type="text/css">
    table{
        border-collapse: collapse;
        text-align: center;
    }
    table td{
        border: 1px solid black;
    }
    table th{
        border:1px solid black;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Armazem') }}
        </h2>
    </x-slot>
    <b>
    <h1>Todos produtos</h1>
    </b>   
@php
$produtos=App\Models\Produto::where('tipo','produto')->get();
$clientes=App\Models\User::where('tipo','cliente')->get();
@endphp

<table>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Name</th>
            <th>Marca</th>
            <th>Data de validade</th>
            <th>Oções</th>
        </tr>   
     </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{$produto->codigo}}</td>
            <td>{{$produto->name}}</td>
            <td>{{$produto->marca}}</td>
            <td>{{$produto->data_de_validade}}</td>
            <td><a class="bg-red-200 rounded hover:bg-red-300" href="{{ route('rm-produto', $produto)}}">Excluir</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<b>
<h1>Todos os clientes</h1>
</b>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Cpf</th>
            <th>Data de nascimento</th>
        </tr>   
     </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$cliente->name}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->data_de_nascimento}}</td>
        </tr>
    @endforeach
    </tbody>
</table>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('add-produto') }}">
            @csrf

            <!-- Codigo -->
            <div>
                <x-label for="codigo" :value="__('Codigo')" />

                <x-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required/>
            </div>

             <!-- name -->
            <div class="mt-4">
                <x-label for="name" :value="__('nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
            </div>

           
            <!-- Marca -->
            <div class="mt-4">
                <x-label for="marca" :value="__('marca')" />

                <x-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" required />
            </div>

             <!-- data de validade -->
            <div class="mt-4">
                <x-label for="data_de_validade" :value="__('data de validade')" />

                <x-input id="data_de_validade" class="block mt-1 w-full" type="text" name="data_de_validade" :value="old('data_de_validade')" required />
            </div>

              <!-- tipo -->
            <div class="mt-4">
                

                <x-input id="tipo" class="block mt-1 w-full" type="hidden" name="tipo" :value="'produto'"  />
            </div>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
