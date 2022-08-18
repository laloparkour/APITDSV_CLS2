<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas{
            background-color: rgba(0, 0, 200, 0.5);
        }
    </style>
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Tu navegador no soporta canvas
    </canvas>

    <img src="img.png" id="imagen" style="display: none">

    <script text="text/javascript">
        var cv = document.getElementById("mycanvas");

        var ctx = cv.getContext('2d');

        // gradiente linear

/*         let grd = ctx.createLinearGradient(0, 0, 200, 0);
        grd.addColorStop(0, "green");
        grd.addColorStop(0.5, "orange");
        grd.addColorStop(1, "purple");
        
        ctx.fillStyle = grd;
        ctx.fillRect(0, 200, 200, 80); */
        
        // Circulo grqdiente
/*         let grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
        grd.addColorStop(0, "green");
        grd.addColorStop(0.5, "orange");
        grd.addColorStop(1, "purple");
        
        ctx.fillStyle = grd;
        ctx.fillRect(0, 15, 200, 80); */

/*         var img = document.getElementById("imagen");
        ctx.drawImage(img, 50, 100); */

    </script>
</body>
</html>