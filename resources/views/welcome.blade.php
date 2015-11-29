<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>

    <body>

        <div class="container">

            <tasks list="{{ $tasks  }}"></tasks>

        </div>

        <template id="tasks-template">

            <h1>My Tasks</h1>

            <ul class="list-group">

                    <li class="list-group-item" v-for="task in list">

                        @{{ task.body }}

                    </li>

            </ul>


        </template>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src="/js/main.js"></script>

    </body>
</html>
