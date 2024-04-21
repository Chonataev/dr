<!-- resources/views/themes/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Theme</title>
</head>
<body>
<h1>Create Theme</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('themes.store') }}" method="post">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="themes_id">Themes ID:</label><br>
    <input type="number" id="themes_id" name="themes_id"><br>

    <label for="status">Status:</label><br>
    <input type="text" id="status" name="status"><br>

    <button type="submit">Create</button>
</form>
</body>
</html>
