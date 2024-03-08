<nav>
   <ul>
      <li>
         <a href="{{route('home')}}">Home</a>
      </li>
         <li>
         <a href="{{route('users', ['number' => 666])}}">Users</a>
      </li>
      <li>
         <a href="{{route('blade')}}">Blade</a>
      </li>
      <li>
         <a href="{{route('logout')}}">Logout</a>
      </li>
      <li>
        <a href="{{route('include')}}">Include</a>
      </li>
      <li>
        <a href="{{route('components')}}">Components</a>
      </li>
      <li>
        <a href="{{route('layout')}}">Layout</a>
      </li>
   </ul>
</nav>
