<x-layout tab="{{$tab}}" authUser="{{$authUser}}">
  @slot('main')
    <section id="task_section">
      <h1>Criar Tarefa</h1>
        <form action="{{route('taskCreateAction')}}" method="post">
          @csrf
          <x-form.input for="title" label="Título da Task" type="text" placeholder="Digite o título" required="required"></x-form.input>
          <x-form.select for="category_id" label="Selecione a Categoria" required="required" >
            @foreach($categories as $cat)
              <option value="{{$cat['id']}}">{{$cat['description']}}</option>
            @endforeach
          </x-form.select>
          <x-form.input for="date" label="Data de Realização" type="datetime-local" required="required"></x-form.input>
          <x-form.textArea for="description" label="Descrição" placeholder="Digite uma descrição para sua tarefa" required="required" />
          <x-form.formButton txt="Criar Tarefa"/>
        </form>
    </section>
  @endslot
</x-layout>

