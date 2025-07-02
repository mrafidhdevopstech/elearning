<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow mb-6">
        <div class="container mx-auto px-4 py-4">
            <a href="{{ route('mahasiswa.index') }}" class="text-lg font-bold text-gray-700">Mahasiswa CRUD</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html> 