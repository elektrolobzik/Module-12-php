<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 // СКЛЕИТЬ ЭЛЕМЕНТЫ МАССИВА В ОДНУ СТРОКУ
    $example_persons_array1 = 
    [
        'fullname' =>  [ 'name' => 'Иванов', 'surname' => 'Иван', 'patronomyc' => 'Иванович',],
    ];
    var_dump(implode(" ", $example_persons_array['fullname']));



// ВОЗВРАЩАЕТ МАССИВ ИЗ СТРОКИ
    $example_persons_array3 = "Иванов Иван Иванович";
    print_r (explode(' ', $example_persons_array3));



// СОКРАЩЁННОЕ ФИО
    function full_name_to_short ($full_name, $format="A b. c.") {
        $short_name = $format;
        $words = explode(" ", $full_name);
        $format_keys = array("B", "A",  "C");
        foreach ($format_keys as $index => $word) {
            $short_name = str_replace($word, $words[$index], $short_name);
            $short_name = str_replace(mb_strtolower($word), mb_substr($words[$index], 0, 1), $short_name);
        }
        
        return $short_name;
    }
    
    echo full_name_to_short("Иванов Иван Иванович"); 
    // немного запутался с тем, как убрать сокращённую фамилию




// ОПРЕДЕЛЕНИЕ ПОЛА ПО ИМЕНИ
        function gender($name)
        {
            mb_strtolower($example_persons_array3);
            
            $nameEnds = (mb_substr($name, -1));
         
            if ($name == 'саша' || $name == 'женя' || $nameЬ== 'слава') {
                return null;
            } elseif ($nameEnds == 'а' || $nameEnds == 'я') {
                return ($name) . ' – женщина.';
            } else {
                return ($name) . ' – мужчина.';
            };
        };
         
        echo gender('name');
        

// ОПРЕДЕЛЕНИЕ ПОЛА ПО ОТЧЕСТВУ
            function gender2($patronomyc)
        {
            mb_strtolower($patronomyc);
            
            $patronomycEnds = (mb_substr($patronomyc, -3));
         
          if ($patronomycEnds == 'вна') {
                return ($patronomyc) . ' – женщина.';
            } else {
                return ($patronomyc) . ' – мужчина.';
            };
        };
        echo gender2('Олеговна');



        $numbers = [0, 7, 21, 54, 11, 1234, 4, 126];
        var_dump(count($numbers));
    ?>
</body>
</html>
<?php