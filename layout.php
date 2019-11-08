<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>
    <?=$title;?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {-webkit-appearance:none;margin:0}
  </style>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body class="content" style="background-color: #eeeeee">
  <div class="container round-large white shadow px-15" style="margin:100px;">
    <form action="index.php" method="POST">
      <h1>Калькулятор больших чисел</h2>
        <hr>
        <p>
          <label class="w3-text-blue" for="firstNumber">Первое число:</label><br>
          <input class="w3-input w3-border" id="firstNumber" name="a" type="number" value="<?=$numbers['a']; ?>" placeholder="Введите целое положительное число" required>
        </p>
        <div class="center"><button class="w3-btn w3-gray round-large" disabled class="round" style="width: 4rem; height: 4rem; font-size: 2rem; cursor: default;">+</button>
        </div>
        <p>
          <label class="w3-text-blue" for="secondNumber">Второе число:</label><br>
          <input class="w3-input w3-border" id="secondNumber" name="b" type="number" value="<?=$numbers['b']; ?>" placeholder="Введите целое положительное число" required>
        </p>
        <div class="center">
          <button class="w3-btn w3-blue round-large" style="width: 4rem; height: 4rem; font-size: 2rem;" type="submit">=</button>
        </div>
        <p>
          <label class="w3-text-blue" for="resultNumber">Результат:</label><br>
          <textarea class="w3-input w3-border" id="result" name="result"><?=$numbers['result']; ?></textarea>
    </form>
  </div>
</body>

</html>
