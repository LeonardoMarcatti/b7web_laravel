<div class="task">
  <div class="title">
    <input type="checkbox" name="" id=""
      @if($data['done'])
        checked
      @endif
    >
    <div class="task_title">{{$data['title'] ?? ''}}</div>
  </div>
  <div class="priority">
    <div class="sphere"></div>
    <div>{{$data->category['description'] ?? ''}}</div>
  </div>
  <div class="actions">
    <a href="{{route('taskEdit', ['id' => $data['id']])}}"><img src={{ URL::asset("assets/images/icon-edit.png") }} alt="" srcset=""></a>
    <a href="{{route('taskDelete', ['id' => $data['id']])}}"><img src={{ URL::asset("assets/images/icon-delete.png") }} alt="" srcset=""></a>
  </div>
</div>