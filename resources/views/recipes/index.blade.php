<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title h1>Recipes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div style="margin-left:45px; width:auto;">
        <h1>Recipes</h1>
        @foreach ($recipe as $recipe)
            <div style="margin-top: 10px; width:auto;">
                <h3>{{ $recipe->name }}</h3>
            </div>
            <div>
                {{ $recipe->description }}
            </div>
            <div>
                {{ $recipe->category_id }}
            </div>
            <div>
                {{ $recipe->procedure }}
            </div>
            <div>
                {{ $recipe->picture }}
            </div>
        @endforeach
    </div>
</body>