<x-layout>
    @slot('tab')
        {{$tab}}
    @endslot
    @slot('main')
        {{$message}}
    @endslot
    @slot('btn')
        <x-btn>
            @slot('text')
                Registre-se Agora
            @endslot
            @slot('link')
                logup
            @endslot
        </x-btn>
    @endslot
</x-layout>