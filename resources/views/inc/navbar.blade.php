<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="/"> Navbar </a>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="{{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/"> TodoList </a>
      </li>
      <li class="{{Request::is('todo/create') ? 'active' : ''}}">
        <a class="nav-link" href="todo/create"> Create Todo </a>
      </li>
    </ul>
  </div>
</nav>