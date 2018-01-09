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
    <button onclick="Library.Add('#groter', 400, 600)">
        test klik
    </button>
    <script>
        Library.Alert();
    </script>
</body>
</html>