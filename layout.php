<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>
    <?=$title;?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./css/styles.css" />
  <style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {-webkit-appearance:none;margin:0}

    .input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
    .border{border:1px solid #ccc}
    .gray{color:#000;background-color:#9e9e9e}
    .red{color:#fff;background-color:#f44336}
    .blue,.hover-blue:hover{color:#fff;background-color:#2196F3}
    .text-blue{color:#2196f3}
    .large{font-size:18px}
    .panel{padding:0.01em 16px}.panel{margin-top:16px;margin-bottom:16px}
    .display-container{position:relative}
  </style>
</head>

<body class="content" style="background-color: #eeeeee">
  <div class="container round-large white shadow px-15" style="margin:100px;">
    <form action="index.php" method="POST">
      <h1>Калькулятор больших чисел</h2>
        <hr>
        <?php if (count($errors)): ?>
          <div class="panel red display-container">
            <span onclick="this.parentElement.style.display='none'"
            class="button large display-topright">&times;</span>
            <p>Исправьте пожалуйста ошибки.</p>
          </div>
        <?php endif; ?>
        <p>
          <label class="text-blue" for="firstNumber">Первое число:</label><br>
          <input class="input border" id="firstNumber" name="a" type="number" value="<?=esc($numbers['a']); ?>" placeholder="Введите целое положительное число" required>
          <?php if (isset($errors['a'])): ?>
            <span style="color: red"><?=$errors['a']; ?></span>
          <?php endif; ?>
        </p>
        <div class="center">
          <button class="button gray round-large" disabled class="round" style="width: 4rem; height: 4rem; font-size: 2rem; cursor: default;">+</button>
        </div>
        <p>
          <label class="text-blue" for="secondNumber">Второе число:</label><br>
          <input class="input border" id="secondNumber" name="b" type="number" value="<?=esc($numbers['b']); ?>" placeholder="Введите целое положительное число" required>
          <?php if (isset($errors['b'])): ?>
            <span style="color: red"><?=$errors['b']; ?></span>
          <?php endif; ?>
        </p>
        <div class="center">
          <button class="button blue round-large" style="width: 4rem; height: 4rem; font-size: 2rem;" type="submit">=</button>
        </div>
        <p>
          <label class="text-blue" for="resultNumber">Результат:</label><br>
          <textarea class="input border" id="result" name="result"><?=$numbers['result']; ?></textarea>
    </form>
  </div>
</body>

</html>
