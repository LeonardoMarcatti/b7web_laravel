<x-layout tab={{$tab}} authUser="{{$authUser ?? ''}}" links="{{$links}}">
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
    @slot('main')
    <section id="task_section">
      <h1>Fala seu Login</h1>
      @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
        <form action="{{route('loginAction')}}" method="post">
          @csrf
          <x-form.input for="email" label="Seu email:" type="email" placeholder="Digite seu email" required="required" />
          <x-form.input for="password" label="Sua senha:" type="password" placeholder="Digite a senha" required="required" />
          <x-form.formButton txt="Entrar"/>
        </form>
    </section>
    @endslot
</x-layout>