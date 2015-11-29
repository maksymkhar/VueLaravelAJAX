<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>

    <body>

        <div class="container">

            <h1>My Tasks</h1>

            <ul class="list-group">

                @foreach($tasks as $task)

                    <li class="list-group-item">

                        {{$task->body}}

                    </li>

                @endforeach


            </ul>


        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src="/js/main.js"></script>

    </body>
</html>
