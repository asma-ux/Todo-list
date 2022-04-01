<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #9266ff;
        }

        .TodoList {

            width: 400px;
            min-height: 500px;
            margin: 40px auto;
            background-color: #3f3160;
            color: white;
        }

        h1 {
            text-align: center;
        }

        .todo-form-input input {
            background-color: rgb(27, 112, 137);
            border: 0;
            margin: 15px;
            padding: 0 20px;
            width: 200px;
            height: 35px;
            font-size: 18px;
            border-radius: 10px;
            color: white;
        }

        .todo-form-input input:focus {
            outline: none;
        }

        .todo-form-input input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }


        .list {

            font-size: 20px;
            display: block;

        }

        .todo-form-input button {
            height: 35px;
            width: 60px;
            border: 0;
            font-weight: bolder;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            background-color: rgb(202, 156, 24);
            margin-right: 50px;
        }

        p {
            margin:20px ;
            background-color: #bf07ac;
            color: black;
            padding: 8px;
            width: 70%;
             height: 20px;
            border-radius: 5px;
            color: white;
            position: relative;
        }
        p span {
            position: absolute;
            right: 10px;
        }

        p span a{
            color: white;
        }
    </style>
</head>

<body>

    <div class="TodoList">
        <div class="form">
            
            <form action="store" class="todo-form-input">
                <input type="text" name="name" placeholder="enter new task" />
                <button type="submit" class="btn">Save</button>
            </form>
        </div>
        <div>
            <div class="list">
                @foreach($todo_arr as $todo)
                <p>
                    {{$todo->name}}
                   <span> <a href="delete/{{$todo->id}}"><i class="fa fa-trash"></i></a></span> <br>
                </p>
                @endforeach



            </div>


        </div>
    </div>
</body>

</html>