<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eden Kite - Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/completed.css">
    <script src="https://kit.fontawesome.com/68814eaa34.js" crossorigin="anonymous"></script>
    <script src="{{ asset('script/completed.js') }}" defer></script>
</head>
<body>
    <!-- Hero Section -->
    <div id="hero">
        <div class="hero-container">
            <div class="hero-wrap">
                <a href="/logout" class="logout-btn" type="button">Log-out</a>
                <div class="hero-nav">
                    <li class="nav-list"><a href="/" data-after="Overview" >Overview</a></li>
                    <li class="nav-list"><a href="/todo" data-after="To-Do" style="color: rgb(255, 226, 99);">To-Do</a></li>
                </div>
            </div>
        </div>
    </div>

    <!-- TODO  -->
    <section class="todo_container">
        @if (isset($messages['success']))
            <div class="success s_container">
                <span>{{ $messages['success'] }}</span>
                <i class="fa-solid fa-xmark close_msg"></i>
            </div>
        @endif
        <form action="{{ url('/createTodo') }}" class="todo_list_form" method="POST">
            @csrf
            <input name="todoTitle" type="text">
            <button><i class="fa-solid fa-plus"></i></button>
        </form>
        <div class="todo_nav">
            <a href="/todo">Active <i class="fa-solid fa-list"></i></a>
            <a href="/completed" class="completed">Completed <i class="fa-solid fa-check"></i></a>
            <a href="/deleted" class="deleted_btn_link">Deleted <i class="fa-solid fa-trash"></i></a>
        </div>
        <div class="todolist_list">
            @forelse ($todos as $todo)
                <div class="list">
                    <i class="fa-solid fa-check complete"></i>
                    <p>{{ $todo->todoTitle }}</p>
                    <div class="actions">
                        <i class="fa-regular fa-calendar-xmark deleted_list forceDelete" data-todo-id="{{ $todo->_id }}"></i>
                        <span class="force_text">Force Delete</span>
                        <!-- <i class="fa-solid fa-trash-can-arrow-up restore_btn" data-todo-id="{{ $todo->_id }}"></i> -->
                    </div>
                </div>
            @empty
                <p>No Completed</p>
            @endforelse
        </div>
    </section>
    <!-- TODO  -->

    <!-- Footer Section -->
    <div id="footer">
        <div class="footer-container">
            <div class="footer-wrapper">
                <p class="footer-content">©2023 Eden Kite. All rights reserved.</p>
                <p class="footer-content">KodeGo Capstone.To-Do Web App</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
