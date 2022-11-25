<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="grid grid-cols-4   gap-y-4 gap-x-2">
            <div class="bg-yellow-200">1</div>
            <div class="bg-red-900 col-start-4">2</div>
            <div class="bg-blue-900 col-span-2">3</div>
            <div class="bg-purple-900">4</div>
            <div class="bg-blue-900">5</div>
            <div class="bg-purple-900">6</div>
        </div>
    </div>
</body>
</html>