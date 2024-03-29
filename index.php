<?php

require_once('functions.php');

$errors = [];
$numbers = [
  'a' => '',
  'b' => '',
  'result' => '0'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $num = $_POST;

  // сделать валидацию данных
  $numbers['a'] = $num['a'];
  $numbers['b'] = $num['b'];

  $errors = validateNumbers($numbers);

  if (! count($errors)) {
    $numbers['result'] = bigsum($numbers['a'], $numbers['b']);
  }
}

$content = include_template('layout.php', [
  'errors' => $errors,
  'numbers' => $numbers,
  'title' => 'BigData - Калькулятор больших чисел'
]);

print($content);
