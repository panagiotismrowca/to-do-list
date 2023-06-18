<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('CSS/main.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/alerts.css') }}">
    <script src="{{ asset('script.js') }}" defer></script>
  </head>
  <body>
    <header>
      <h1>ToDo List</h1>
      <button id="addTaskButton">Add new task</button> 
    </header>

    @yield('content')

    <div id='#navMenuDiv'>
        <ul>
          <li class="active" id="viewAll">All</li>
          <li class="active" id="viewComplited">Complited</li>
          <li class="active" id="viewPending">Pending</li>
        </ul>
      </div>