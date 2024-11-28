<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
    <div>
        <p>{{ $errors->first() }}</p>
    </div>
    @endif
    <form action="{{route('students.save')}}" method="POST">
        @csrf
        
        <label>Name</label>
        <input type="text" name="name"><br>

        <label>Email</label>
        <input type="text" name="email"><br>

        <label>Course</label>
        <input type="text" name="course"><br>

        <label>Year Level</label>
        <input type="text" name="year_level"><br>

        <input type="submit" value="save">
    </form>
</body>
</html>