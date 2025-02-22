<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .container {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input, button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f4f4f4;
            padding: 10px;
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>To-Do List</h2>
        <input type="text" id="task" placeholder="Tambahkan tugas baru">
        <button onclick="addTask()">Tambah</button>
        <ul id="taskList"></ul>
    </div>
    
    <script>
        function addTask() {
            let taskInput = document.getElementById('task');
            let taskText = taskInput.value.trim();
            if (taskText === '') {
                alert("Masukkan tugas terlebih dahulu!");
                return;
            }
            
            let taskList = document.getElementById('taskList');
            let li = document.createElement('li');
            li.innerHTML = `${taskText} <button onclick="removeTask(this)">Hapus</button>`;
            taskList.appendChild(li);
            
            taskInput.value = '';
        }
        
        function removeTask(button) {
            let li = button.parentElement;
            li.remove();
        }
    </script>
</body>
</html>
