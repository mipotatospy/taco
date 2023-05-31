<!DOCTYPE html>
<html>
<head>
    <title>Taco</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">shark Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('sharks') }}">View All lists</a></li>
        <li><a href="{{ URL::to('sharks/create') }}">Create a list</a>
    </ul>
</nav>

<h1>Shopping Lists</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Picture</td>
        </tr>
    </thead>
    <tbody>
    @foreach($sharks as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->picture }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>