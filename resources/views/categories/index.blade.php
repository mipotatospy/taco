<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
@foreach ($categories as $category)
<div style="margin-left:45px; width:auto;">
    <div style="margin-top: 10px; width:auto;">{{ $category->name }}</div>
</div>
@endforeach
</body>
