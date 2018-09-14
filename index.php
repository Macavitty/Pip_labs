<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PIP LAB#1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="./res/terrikons.png" type="image/png">
    <script type="text/javascript" src="validation.js"></script>
</head>
<body>
<div id="container">
    <div id="header" class="block">
		<span id="name">
            <h4>Лабораторная работа № 1<br/>
                Вариант 18102</h4><br/>
		Выполнили: Баталов Евгений Витальевич и Прилуцкая Татьяна Ивановна <br/>
		Группа: P3201 <br/>
		</span>
    </div>
    <div id="margins" class="block">
        <form method="post" action="#" name="main_form">
            <fieldset class="param_field">
                <legend>Значение Х</legend>
                <span>Выберите значение X:</span>
                <div class="styled-select">
                    <select name="x[]">
                        <option value="-5">-5</option>
                        <option value="-4">-4</option>
                        <option value="-3">-3</option>
                        <option value="-2">-2</option>
                        <option value="-1">-1</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="param_field">
                <legend>Значение Y</legend>
                <label for="y">Введите значение Y є (-5; 5):</label>
                <p><input type='text' name='y_input' id="y_input" autocomplete="disable" onkeypress="return disable_not_numbers()"
                          onfocus="removeError(this, this.parentNode)"
                    onpaste="return disable_not_numbers()"></p>
                <label for="y" id="y_note">*все числа округляются до 3 знаков после запятой*</label>
            </fieldset>
            <fieldset class="param_field">
                <legend>Значение R</legend>
                <span>Выберите значение R:</span>
                <div class="styled-select">
                    <select name="r[]">
                        <option value="1">1</option>
                        <option value="1,5">1.5</option>
                        <option value="2">2</option>
                        <option value="2,5">2.5</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </fieldset>
            <p><input type="submit" name="submit" value="Проверить" id="submit_params" onsubmit="submit(this)"></p>
        </form>

    </div>
    <div id="image" class="block">
        <p><img src="./res/graph.png"></p>
        <p>Попадание точки на координатной плоскости в заданную область</p>
    </div>
    <div id="table" class="block">
        <table id="hit">
            <caption>Результаты</caption>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <tr class="line">
                <th class="number">№</th>
                <th class="ox">X</th>
                <th class="oy">Y</th>
                <th class="rr">R</th>
                <th class="boolean">Факт</th>
            </tr>
            <!-- inserting results in table -->
            <?php
            $json = file_get_contents('results.json');
            $results = json_decode($json, FILE_USE_INCLUDE_PATH);
            foreach ($results as $result) {
                ?>
                <tr class="line">
                    <th class="number"> <?php echo $result->number; ?></th>
                    <th class="ox"> <?php echo $result->x; ?></th>
                    <th class="oy"> <?php echo $result->y; ?></th>
                    <th class="rr"> <?php echo $result->r; ?></th>
                    <th class="boolean"> <?php echo $result->answer; ?></th>
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