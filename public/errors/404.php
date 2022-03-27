<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <style>
        .main_container {
            width: 400px;
            height: 600px;
            margin: auto;
            padding-top: 10%;
            display: flex;
            justify-content: center;
            justify-items: center;
        }

        .main_container_bacground_img {
            width: 100%;
            /* height: 100%; */
            /* padding-bottom: 30px; */
            background-image: url("errors/static/bg_image.png");
            background-size: 250px;
            background-repeat: no-repeat;
        }

        .main_container_bacground_img_text {
            height: 100%;
            display: inline-block;
            margin-top: 90px;
            font-size: 20px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="main_container">
        <div class="main_container_bacground_img">
            <!-- <img src="errors/static/bg_image.png" alt=""> -->
            <span class="main_container_bacground_img_text">
                Ошибка 404! Страница не найдена.
            </span>
        </div>
    </div>
</body>

</html>