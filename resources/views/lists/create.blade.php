<!DOCTYPE html>
<html>
<head>
    <title>Taco</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <!--<div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">shark Alert</a>
    </div>-->
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('lists') }}">View All Lists</a></li>
        <li><a href="{{ URL::to('lists/create') }}">Create a list</a>
    </ul>
</nav>

<h1>Create a shopping list</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'lists')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('picture', 'Picture') }}
        {{ Form::text('picture', Input::old('picture'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the list!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
