<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypernatives | Home</title>
</head>

<body>
    <h1>Currently avaialable Hypernatives</h1>
    <p>{{ $greeting }}</p>
    <ul>

        <li>
            <a href="">{{ $hypernatives[0]['name'] }}</a>
        </li>
        <li>
            <a href="">{{ $hypernatives[1]['name'] }}</a>
        </li>
    </ul>
</body>

</html>
