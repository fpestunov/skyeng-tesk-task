<?php
/**
 * Создает подготовленное выражение на основе готового SQL запроса и переданных данных
 *
 * @param string $name Имя файла-шаблона
 * @param array $data Данные для вставки на место плейсхолдеров
 *
 * @return string Шаблон
 */
function include_template($name, $data) 
{
    $name = $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * Делает числа (строки) одинаковой длины, 
 * длину меньшей строки дополняет нулями
 * до длины большей строки
 * 
 * @param string $a Первая строка
 * @param string $b Вторая строка
 *
 * @return array Массив строк одинаковой длины
 */
function normalizeNumbers(string $a, string $b): array
{
    $lenA = strlen($a);
    $lenB = strlen($b);

    if ($lenA > $lenB) {
        $pad_length = $lenA - $lenB;
        $b = str_pad($b, $lenA, "0", STR_PAD_LEFT);
    }
    elseif ($lenB > $lenA) {
        $pad_length = $lenB - $lenA;
        $a = str_pad($a, $lenB, "0", STR_PAD_LEFT);
    }

    return [$a, $b];
}

/**
 * Суммирует числа (строки)
 * 
 * @param string $a Первая строка
 * @param string $b Вторая строка
 *
 * @return string Результат - сумма двух больших чисел
 */
function bigsum(string $a, string $b): string
{
    if (empty($a)) {
        return $b;
    }

    if (empty($b)) {
        return $a;
    }

    list($a, $b) = normalizeNumbers($a, $b);

    $sum = '';
    $memory = 0;
    $len = strlen($a) - 1;

    for ($i=$len; $i >= 0; $i--) {

        $temp = $memory + $a[$i] + $b[$i];

        if ($temp > 9) {
            $memory = 1;
            $temp = $temp - 10;
        } else {
            $memory = 0;
        }

        $sum = $temp . $sum;
    }

    if ($memory > 0) {
        $sum = $memory . $sum;
    }

    return $sum;
}
