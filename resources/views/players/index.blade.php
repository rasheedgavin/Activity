<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Year Level</th>
            <th>Student ID Number</th>
            <th>Section</th>
        </tr>
        @foreach ($players as $player)
            <tr>
                <td>{{$player->username}}</td>
                <td>{{$player->email}}</td>
                <td>{{$player->password}}</td>
                <td>{{$player->year_level}}</td>
                <td>{{$player->student_id_number}}</td>
                <td>{{$player->section->section_name}}</td>
            </tr>
        @endforeach
    </table>
    {{ $players->links() }}
</body>
</html>
