<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="{{ asset("style.css")}}">
  </head>
  <body>
    <h1>Laravel Features</h1>
    @if($features->count())
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Feature Name</th>
                <th>Description</th>
            </tr>
            @foreach ($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->name }}</td>
                    <td>{{ $feature->description }}</td>
                </tr>
            @endforeach
        </table>
    @endif
    <br>
    &copy Web Development Technologies - Midterm Exam
    <script src="index.js"></script>
  </body>
</html>
