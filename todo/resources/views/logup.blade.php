<x-layout authUser="{{$authUser ?? ''}}" links="{{$links}}">
    @slot('tab')
        {{$tab}}
    @endslot
    @slot('main')
    <section id="task_section">
      @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
      <h1>Registro de Usuários</h1>
        <form action="{{route('logupAction')}}" method="post">
          @csrf
          <x-form.input for="name" label="Nome Completo:" type="text" placeholder="Digite seu nome" required="required" value="{{ old('name') }}"/>
          <x-form.input for="email" label="Endereço de Email:" type="email" placeholder="Digite seu email" required="required" value="{{ old('email') }}"/>
          <x-form.input for="password" label="Senha" type="password" required="required" small="Mínimo de 6 caracteres"/>
          <x-form.input for="password_confirmation" label="Repita Senha" type="password" required="required" small="Mínimo de 6 caracteres"/>
          <x-form.formButton txt="Registre-se"/>
        </form>
    </section>
    @endslot
</x-layout>