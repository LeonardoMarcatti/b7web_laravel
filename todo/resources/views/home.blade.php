<x-layout tab="{{$tab}}" authUser="{{$authUser ?? ''}}" links="{{$links ?? ''}}">
  @slot('btn')
    <x-btn text="Nova Tarefa" link="taskCreate" />
  @endslot
  @slot('main')
    <section class="graph">
      <div class="graph_header">
        <h2>Progresso do Dia</h2>
        <hr>
        <div class="graph_header_date">
        <a href="{{route('home', ['date' => $prev_date_btn])}}"><img src={{ URL::asset("assets/images/icon-prev.png") }} alt=""></a>
        {{$date_as_string}}
        <a href="{{route('home', ['date'=> $next_date_btn])}}"><img src={{ URL::asset("assets/images/icon-next.png") }} alt=""></a>
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
    <script >
      const taskUpdate = async param =>  {
        const status = param.checked
        const url = "{{route('taskUpdate')}}";
        const id = param.id
        const result = await fetch(url, {
          method: 'post',
          headers:{
            'Content-type' : 'application/json',
            'accept': 'application/json'
          },
          body: JSON.stringify({status, id, _token: '{{csrf_token()}}'})
        })

        const json = await result.json()

        if (json.success) {
          alert('Tarefa atualizada com sucesso!')
        } else {
          param.checked = !param.checked
        }
        
      };
    </script>
  @endslot
</x-layout>