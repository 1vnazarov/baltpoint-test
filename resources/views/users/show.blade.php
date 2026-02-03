<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}</title>
</head>
<body>
    <div>
        <h1>{{ $user->name }}</h1>
        
        <div>
            <div>
                <h5>Информация о пользователе</h5>
                <p><strong>ID:</strong> {{ $user->id }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Создан:</strong> {{ $user->created_at->format('d.m.Y H:i') }}</p>
            </div>
        </div>

        <h3>Посты пользователя ({{ $user->posts->count() }})</h3>
        
        @foreach($user->posts as $post)
        <div>
            <div>
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->content }}</p>
                <p>Создан: {{ $post->created_at->format('d.m.Y H:i') }}</p>
            </div>
        </div>
        @endforeach

        <a href="{{ route('users.index') }}">Назад</a>
    </div>
</body>
</html>