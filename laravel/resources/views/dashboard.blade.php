<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <h1>AAAAAAAAAAAAAAAAAAAAAA</h1>
            @foreach ( Auth::user() ->asCoisas as $coisas)
        <div>
            {$coisas-> nome}
        </div>
            @endforeach
        </div>
        <div>
            <form action="{{route('coisa.store')}}" method="POST">
                @csrf
                <x-text-input name="nome" placeholder="NOME"/>
                <x-primary-button>manda</x-primary-button>
            </form>
            
        </div>

    </div>
</x-app-layout>
