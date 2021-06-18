<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<head>Single Products Details</head>

<body>
    <div class="container">
        <article style="background: grey; margin:auto">
            <img alt="{{$product -> name}}" src="{{$product -> image}}" />
            <h1>{{ $product['name']}}</h1>
            <p>{{ $product['desc']}}</p>
        </article>

    </div>
</body>

</html>