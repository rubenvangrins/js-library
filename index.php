<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js-library.js"></script>
</head>
<body>
    <div id="groter" style="border: 1px solid black; width: 50px; height: 50px;">
        test-blok
    </div>
    <button onclick="Library.Groter('#groter', 400, 600)">
        Groter
    </button>
    <button onclick="Library.Groter('#groter', 50, 50)">
        Kleiner
    </button>  
    <button onclick="Library.Kleur('#groter', 'red')">
        verander kleur
    </button>
</body>
</html>