<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Банкомат</title>

    <style>
        table{
            border-collapse: collapse;
            background-color: darkkhaki;
            border: 2px solid black;

        }
        tr, td {
            border: 1px solid black;
            padding: 3px;
        }

        #button{
            margin-top: 15px;
            width:  auto;
            height: auto;
            font-size: 1em;
        }
        input{
            width: 90%;
            height: 30px;
            padding: 3px;
            font-size: 1em
        }
        p{
            margin-bottom: 5px;
            text-align: left;
            margin-top: 10px;
            margin-left: 5%;
        }
        .container{
            margin-left: 30%;
            margin-right: 30%;
            margin-top: 5%;
            background-color: whitesmoke;
            font-size: 2em;
            border: 2px solid black;
            padding: 30px;
            text-align: center;
        }
        .obl{
            padding: 3%;
        }
        .ansver{
            padding: 20px;
            margin-top: 30px;
            border: 2px solid blue;
            background-color: lightskyblue;
        }
    </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>

</head>
<body>
    <div class = "container">
        <div> Банкомат </div>
        <form method="post" id="ajax_form" action="">
            <p>Номинал в наличии.</p>
            <input id = "nominal" type = "number" name = "nominal" value = "5, 10, 20, 50, 100" placeholder = "5, 10, 20, 50, 100" readonly>
            <p> Ваша сумма.</p>
            <input id="summa" type="number" name = "nominal" required> <br>
            <input id="button" type="submit" name="Отправить" onClick = "get_data(); return false;" >

        </form>
        <div class="obl">
            <div class = "ansver">
             <p>Ответ:</p>
                <table align = "center" id="result">
                    <tr>
                        <td>Номинал</td>
                        <td>Количество</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</body>
</html>