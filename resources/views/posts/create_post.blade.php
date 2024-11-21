<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="/create_post_backend" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}"><br>
        <input type="file" name="image" id="image" required><br>
        <input type="text" name="caption" id="caption" placeholder="caption" required><br>
        <input type="text" name="location" id="location" placeholder="location"  required><br>
        
        <button>Create</button>
    </form>
</body>
</html>
