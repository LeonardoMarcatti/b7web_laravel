<x-layout>
  @slot('tab')
    {{$tab}}
  @endslot
  @slot('btn')
    <x-btn>
      @slot('text')
          Nova Tarefa
      @endslot
      @slot('link')
          taskCreate
      @endslot
    </x-btn>
  @endslot
  @slot('main')
    <section class="graph">
      <div class="graph_header">
        <h2>Progresso do Dia</h2>
        <hr>
        <div class="graph_header_date">
        <img src={{ URL::asset("assets/images/icon-prev.png") }} alt="">
        13/Dez/2023
        <img src={{ URL::asset("assets/images/icon-next.png") }} alt="">
        </div>
      </div>
      <div class="graph_header_subtitle">
        Tarefas: <b>3/6</b> 
      </div>
      <div class="graph-placeholder"></div>
      <div class="tasks_left_footer">
        <img src={{ URL::asset("assets/images/icon-info.png") }} alt="" srcset="">
        <p>Restam 3 tarefas para serem realizadas</p>
      </div>
    </section>
    <section class="list">
      <div class="list_header">
        <select name="" id="" class="list_header_select">
          <option value="0">Todas as Tarefas</option>
        </select>
      </div>
      <div class="task_list">
        @foreach($tasks as $task)
          <x-task :data=$task />
        @endforeach
      </div>
    </section>
  @endslot
</x-layout>