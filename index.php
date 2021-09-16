<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Банкомат</title>

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>

</head>
<body>
    <div class = "container">
        <div> Банкомат </div>
        <form method="post" id="ajax_form" action="">
            <p>Номинал в наличии.</p>
            <input id = "nom" type = "number" name = "nom" value = "5, 10, 20, 50, 100" placeholder = "5, 10, 20, 50, 100" readonly>
            <p> Ваша сумма.</p>
            <input id="summa" type="number" name = "nominal" required> <br>
            <input id="button" type="submit" name="Отправить" onClick = "get_data(); return false;" >

        </form>
        <div class="obl">
            <div class = "answer">
                <p>Ответ:</p>
                <table align = "center" id="result">

                </table>
            </div>
        </div>
    </div>
</body>
</html>