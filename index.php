<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <?php
            $arrayColors = ['red', 'green', 'blue', 'yellow', 'orange', 'brown', 'aqua', 'coral', 'orchid', 'gray', 'goldenrod'];
            $rnd = rand(0, 11);

            echo "<h1 style='color:  $arrayColors[$rnd]'>4 прямоугольника рандомных цФетоф</h1>";

            include 'functions.php';
            $i = 0;
            $i_color = $rnd;
            while ($i<4) {
                if ($i_color <= count($arrayColors)-2) {
                    $i_color++;
                }
                else {
                    $i_color = 0;
                }
                addSomeDiv(100, $i*100+$i*10,  '100px','100px', $arrayColors[$i_color]);
                $i++;
            }
            ?>
        </div>
        <div class="row">
            <div style="margin-top: 200px;">
                <h1>Календарь на выбранный месяц</h1>
                <form method="get" action="#">
                    <div class="form-inline">
                        <label for="month">Number of month: </label>
                        <input class="form-control" type="text" name="month">
                        <input class="btn btn-success" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>

        <div class="row text-center">
            <?php
            $arrayMonth = ["нет такого месяца", "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "тотчтопосле Июнь", "Август", "Каникулы закончились! В школу двавай вали уже!", "Октябрь", "Ноябрь", "Свято наближаЕться!!!"];
            $month = $_GET["month"];
            $days = [" ", " ", " ", " ", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28];

            $template = "";

            $template.= "
    <table class='table table-striped'>
        <caption style='font-size: large; font-weight: bold;'>$arrayMonth[$month]</caption>
        <tr style='text-align: center'>
            <th style='text-align: center'>ПН</th>
            <th style='text-align: center'>ВТ</th>
            <th style='text-align: center'>СР</th>
            <th style='text-align: center'>ЧТ</th>
            <th style='text-align: center'>ПТ</th>
            <th style='color: red; text-align: center'>СБ</th>
            <th style='color: red; text-align: center'>ВС</th>
        </tr>
        
        <tbody style='text-align: center'>
        ";
            $template.=getTableDaysOfMonth($month);
            $template.= "
        </tbody>
    </table>
";
            echo $template;
            ?>
        </div>

    </div>
    </body>
    </html>



