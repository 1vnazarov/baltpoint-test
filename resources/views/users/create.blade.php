<!DOCTYPE html>
<html>
<head>
    <title>Создать пользователя</title>
</head>
<body>
    <div>
        <h1>Создать нового пользователя</h1>
        
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            
            <div>
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit">Создать</button>
        </form>
    </div>
</body>
</html>