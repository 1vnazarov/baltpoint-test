<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
</head>
<body>
    <div>
        <h1>Список пользователей</h1>
        
        <a href="{{ route('users.create') }}">Добавить пользователя</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Количество постов</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->posts->count() }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Просмотр</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>