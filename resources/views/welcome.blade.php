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
        <table class="w-full border">
            <thead>
                <tr class=" border border-gray-300 px-4 py-2 table-fixed">
                    <th class="w-1/4">Pais</th>
                    <th class="w-1/4">Ciudad</th>
                    <th class="w-1/2">Descripcion</th>               
                </tr>
            </thead>

            <tbody>
                <tr class="bg-blue-200 hover:bg-blue-400">
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">Mexico</td>
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">CDMX</td>
                    <td class="border border-gray-400 px-4 py-2 hover:font-bold">Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">Inglaterra</td>
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">Londres</td>
                    <td class="border border-gray-400 px-4 py-2 hover:font-bold">Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr class="bg-blue-200 hover:bg-blue-400">
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">Argentina</td>
                    <td class=" border border-gray-300 px-4 py-2 hover:font-bold">Buenos Aires</td>
                    <td class="border border-gray-400 px-4 py-2 hover:font-bold">Lorem ipsum dolor sit amet.</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>