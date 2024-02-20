<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website galeri foto</title>
    <link rel="stylesheet" href="styless.css">
    <style>
        body {
            font-family : arial,sans-serif;
            background-color : #f8f8f8;
            margin : 0;
        }
        .image{
            overflow : hidden;
            border : radius 10px;
            box-shadow : 0 0 10px rgba(0,0,0,.2);
            display : flex;
            flex-direction : column;
            justify-content : center;
            flex-wrap : nowrap;
            margin-top : 30px;
        }
        .image-satu{
            width : 200px;
            height : 200px;
            margin : 10px;
        }

    </style>
</head>
<body>
    <div class="datafoto">
    <div class="image">
        <img src="foto/sekolah.jpg" alt="foto 1" width="450px">
        <h2>SEKOLAH SMA NEGERI 1 KOTABUMI</h2>
    </div>
    <div class="image">
        <img src="foto/lapangan.jpg" alt="foto 2" width="450px">
        <h2>LAPANGAN BASKET</h2>
        </div>
    <div class="image">
        <img src="foto/tempat wisata.jpg" alt="foto 3" width="450px">
        <h2>TEMPAT WISATA CANDI BOROBUDUR</h2>
    </div>
    </div>
</body>
</html>