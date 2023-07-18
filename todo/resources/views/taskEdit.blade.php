<x-layout tab="{{$tab}}" authUser="{{$authUser}}" links="{{$links}}">
  @slot('main')
    <section id="task_section">
      <h1>Editar Tarefa</h1>
        <form action="{{route('taskEditAction')}}" method="post">
          @csrf
          <x-form.input :value="$task['id']" for="" type="hidden" for="id" required="required" />
          <x-form.input :value="$task['title']" for="title" label="Título da Task" type="text" placeholder="Digite o título" required="required" />
          <x-form.select for="category_id" label="Selecione a Categoria" required="required" >
            @foreach($categories as $cat)
              @if($cat['id'] === $task['category_id'])
                <option value="{{$cat['id']}}" selected>{{$cat['description']}}</option>
              @else
                <option value="{{$cat['id']}}">{{$cat['description']}}</option>
              @endif
            @endforeach
          </x-form.select>
          <x-form.input :value="$task['date']" for="date" label="Data de Realização" type="datetime-local" required="required" />
          <x-form.textArea :value="$task['description']" for="description" label="Descrição" placeholder="Digite uma descrição para sua tarefa" required="required" />
          <x-form.checkbox for="checkbox" :checked="$task['done']" />
          <x-form.formButton  txt="Editar Tarefa"/>
        </form>
    </section>
  @endslot
</x-layout>