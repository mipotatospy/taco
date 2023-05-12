<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title h1>Products</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div style="margin-left:45px; width:auto;">
        <h1>Products</h1>
        @foreach ($products as $product)
            <div style="margin-top: 10px; width:auto;">
                <h3>{{ $product->name }}</h3>
            </div>
            <div>
                {{ $product->transportation }}
            </div>
            <div>
                @if ($product->seasonality == True)
                    In season
                @else
                    NOT in season
                @endif
            </div>
            <div>
                {{ $product->packaging }}
            </div>
            <div>
                {{ $product->procedure }}
            </div>
            <div>
                {{ $product->ingredients }}
            </div>
            <div>
                {{ $product->picture }}
            </div>
            <div>
                {{ $product->expiration }}
            </div>
        @endforeach
    </div>
</body>