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
        <span>{{ $errors->first() }}</span>
    </div>
    @endif
    <form action="{{route('students.update', ['student' => $student])}}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{$student->name}}"><br>

        <label>Email</label>
        <input type="text" name="email" value="{{$student->email}}"><br>

        <label>Course</label>
        <input type="text" name="course" value="{{$student->course}}"><br>

        <label>Year Level</label>
        <input type="text" name="year_level" value = "{{$student->year_level}}"><br>

        <input type="submit" value="update">
    </form>
</body>
</html>