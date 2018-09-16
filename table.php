<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PIP LAB#1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./res/duck.png" type="image/png">
</head>
<body>
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
        <p><img src="./res/graph.png"></p>
        <p>Попадание точки на координатной плоскости в заданную область</p>
    </div>
    <div id="table" class="block">
        <table id="hit">
            <tr class="line">
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="bool_result">Попадание</th>
                <th class="curr_time">Время</th>
                <th class="work_time">Время работы скрипта</th>
            </tr>
            <?php
            $time_start = microtime(true);
            session_start();
            function isPointOnGraph()
            {
                $x = $_POST['x_input'];
                $y = $_POST['y_input'];
                $r = $_POST['z_input'];
                if (// I quadrant
                    ($x >= 0 && $y >= 0 && $x * $x + $y * $y <= $r * $r / 4) || //x^2 + y^2 = (r/2)^2
                    // II quadrant
                    ($x <= 0 && $x >= $r && $y <= r / 2 && $y >= 0) ||
                    // III quadrant
                    ($x <= 0 && $y <= 0 && $y >= (-2) * x - $r) // y = kx + b; y = -2x - r
                ) {
                    return true;
                }
                return false;
            }

            $res = isPointOnGraph() ? "да" : "нет";
            $currtime = date("G:i:s");
            $time_end = microtime(true);
            $time = ($time_end - $time_start)*1000000;
            $result = array($_POST['x_input'], $_POST['y_input'], $_POST['r_input'], $res, $currtime, $time);
            if (!isset($_SESSION['history'])) {
                $_SESSION['history'] = array();
            }

            array_push($_SESSION['history'], $result);

            foreach ($_SESSION['history'] as $value) { ?>

                <tr class="line">
                    <th class="ox"><?php echo $value[0] ?></th>
                    <th class="oy"><?php echo $value[1] ?></th>
                    <th class="rr"><?php echo $value[2] ?></th>
                    <th class="bool_result"><?php echo $value[3] ?></th>
                    <th class="curr_time"><?php echo $value[4]?></th>
                    <th class="work_time"><?php echo $value[5] ?></th>
                </tr>

            <?php } ?>

        </table>
    </div>
    <div id="footer" class="block">
        <p><br/>&copy; Университет ИТМО<br/> 2018</p>
    </div>
</div>
</body>
</html>