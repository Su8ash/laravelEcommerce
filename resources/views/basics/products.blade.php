<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<head>Products Details</head>

<body>
    <div class="container">

        @foreach ($productList as $product)

        <a href="/product/{{$product -> id}}">
            <article style="background: grey; margin:auto">
                <img alt="{{$product -> name}}" src="{{$product -> image}}" />
                <h1>{{ $product['name']}}</h1>
                <p>{!! $product['desc'] !!}</p>
            </article>
        </a>
        @endforeach

    </div>
</body>

</html>