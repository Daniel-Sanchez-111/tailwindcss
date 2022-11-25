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
    <div class="container py-12">
        {{-- <div class="grid grid-cols-4  grid-rows-5  gap-y-4 gap-x-2 text-white">
            <div class="bg-yellow-200">1</div>
            <div class="bg-red-900">2</div>
            <div class="bg-blue-900 col-span-2 row-span-2">3</div>
            <div class="bg-purple-900">4</div>
            <div class="bg-blue-900">5</div>
        </div> --}}
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2">
                <iframe class=" w-full aspect-video" src="https://www.youtube.com/embed/r1ySsbIA7EU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-span-1 bg-blue-600"></div>
        </div>
    </div>
</body>
</html>