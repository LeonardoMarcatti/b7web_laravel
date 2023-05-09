<x-layout tab="{{$tab}}" authUser="{{$authUser}}">
  @slot('main')
    <section id="task_section">
      <h1>Deletar Tarefa</h1>
        <h2>Deseja emsmo deletar a tarefa?</h2>
       <a href="<?= route('sure', ['id' => $id])?>"><button class="btn btn-primary">Sim</button></a>
       <a href="<?= route('home') ?>"><button class="btn btn-primary">Não</button></a>
    </section>
  @endslot
</x-layout>