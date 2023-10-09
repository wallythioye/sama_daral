<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>
    <!-- Inclure les fichiers CSS Bootstrap ici -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Contact Messages</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Inclure les fichiers JS Bootstrap ici -->
</body>
</html>
