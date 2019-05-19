<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function askRiddles(riddles) {

            var correctAnswerCount = 0;

            for (var i = 0; i < riddles.length; i++) {
                var answer = prompt(riddles[i][0]).toLowerCase();
                if (riddles[i][1].indexOf(answer) >= 0) {
                    alert("Вы угадали!");
                    correctAnswerCount++;
                } else alert("Неверно (((");
            }

            return correctAnswerCount;
        }

        var correctAnswerCount = 0;

        alert("Предлагаем вам ответить на наши загадки. Отвечать можно как на русском, так и на английском языках");

        var riddles = [
            ["Сто одежек и все без застежек", ["капуста", "cabbage"]],
            ["Сидит дед во сто шуб одет. Кто его раздевает, тот слезы проливает", ["лук", "onion"]],
            ["Не мышь, не птица, в лесу резвится, на деревьях живёт и орешки все грызёт.", ["белка", "squirrel"]],
            ["Согнута в дугу, летом на лугу, зимой на крюку.", ["коса", "scythe"]]
        ];


        correctAnswerCount = askRiddles(riddles);
        alert("Вы ответили на " + correctAnswerCount + " вопрос(-а) из 4х.")
    </script>
</head>

<body>
<?php echo "Привет" ?>
</body>

</html>