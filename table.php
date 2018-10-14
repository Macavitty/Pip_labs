<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PIP LAB#1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./res/duck.png" type="image/png">
</head>
<body>
<?php
session_start();
$start_time = microtime(true);

function isPointOnGraph($x, $y, $r)
{
    if (// I quadrant
        ($x >= 0 and $y >= 0 and $x * $x + $y * $y <= $r * $r / 4) || //x^2 + y^2 = (r/2)^2
        // II quadrant
        ($x <= 0 and abs($x) >= $r and $y <= $r / 2 and $y >= 0) ||
        // III quadrant
        ($x <= 0 and $y <= 0 and $y >= (-2) * $x - $r) // y = kx + b; y = -2x - r
    ) {
        return true;
    }
    return false;
}

function getValidX()
{
    $xV = $_POST['x_input'];
    if (is_numeric($xV) && $xV > -6 && $xV < 4)
        return $xV;
    return "";
}

function getValidY()
{
    $yV = $_POST['y_input'];
    if (is_numeric($yV) && $yV > -5 && $yV < 5)
        return $yV;
    return "";
}

function getValidR()
{
    $rV = $_POST['r_input'];
    if (is_numeric($rV) && ($rV == 1 || $rV == 1.5 || $rV == 2 || $rV == 2.5 || $rV == 3))
        return $rV;
    return "";
}

?>
<div id="table_container">
    <div id="header" class="block">
		<span id="name">
            <h4>Лабораторная работа № 1<br/>
                Вариант 18102</h4><br/>
		Выполнили: Баталов Евгений Витальевич и Прилуцкая Татьяна Ивановна <br/>
		Группа: P3201 <br/>
		</span>
    </div>
    <div id="image" class="block">
        <img src="./res/graph.png" alt="здесь должен быть график :-{">
        <p>Координатная плоскость</p>
    </div>
    <div id="table" class="block">
        <table id="hit">
            <?php
            $x = $_POST['x_input'];
            $y = $_POST['y_input'];
            $r = $_POST['r_input'];
            if ($r == "" || $y == "" || $x == "") {
                ?>
            <tr class="line">
                <th class="ox">Введите нормальные параметры!</th>
            </tr>
                <?php
                return;
            }
            ?>
            <tr class="line">
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="bool_result">Попадание</th>
                <th class="curr_time">Время</th>
                <th class="work_time">Время работы скрипта</th>
            </tr>
            <?php
            $hit = isPointOnGraph($x, $y, $r) ? "да" : "нет";
            $curr_time = date("G:i:s");
            $stop_time = microtime(true);
            $work_time = round($stop_time - $start_time, 4) . ' сек';
            $row = array($_POST['x_input'], $_POST['y_input'], $_POST['r_input'], $hit, $curr_time, $work_time);
            if (!isset($_SESSION['rows'])) {
                $_SESSION['rows'] = array();
            }

            array_push($_SESSION['rows'], $row);

            foreach ($_SESSION['rows'] as $r) { ?>

                <tr class="line">
                    <th class="ox"><?php echo $r[0] ?></th>
                    <th class="oy"><?php echo $r[1] ?></th>
                    <th class="rr"><?php echo $r[2] ?></th>
                    <th class="bool_result"><?php echo $r[3] ?></th>
                    <th class="curr_time"><?php echo $r[4] ?></th>
                    <th class="work_time"><?php echo $r[5] ?></th>
                </tr>

            <?php } ?>

        </table>
    </div>
    <div id="footer" class="block">
        <p><a href="http://en.ifmo.ru/en/" target="_blank"><br/>&copy; 2018 Университет ИТМО<br/></a>
        </p></div>
</div>
</div>
</body>
</html>
