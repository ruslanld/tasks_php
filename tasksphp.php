<?php

// Основы PHP
	
	// 1.Привет, Мир!
	print_r('Hello, World!');

	// 2.Теги
	print_r('King in the North!');

	// 3.Комментарии
	// You know nothing, Jon Snow!.

	// 4.Инструкции (Statements)
	print_r('Robert');
	print_r('Stannis');
	print_r('Renly');

	// 5.Как мы проверяем ваши решения
	print_r('9780262531962');

	// 6.Синтаксические ошибки
	print_r('What Is Dead May Never Die');

//Арифметика

	// 7.Арифметические операции
	print_r(81/9);

	// 8.Операторы
	print_r(6 - -81);

	// 9.Коммутативная операция
	print_r(3**5);
	print_r(-8/-4);

	// 10.Композиция операций
	print_r(8 / 2 + 5 - -3 / 2);

	// 11.Приоритет операций
	print_r(70 * (3 + 4) / (8 + 2));

	// 12.Линтер
	print_r(3 ** (4 - 2));

// Строки

	// 13.Кавычки
	print_r('"Khal Drogo\'s favorite word is "athjahakar""');

	// 14.Экранирующие последовательности
	print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");

	// 15.Конкатенация
	print_r('Winter ' . 'came ' . 'for ' . 'the ' . 'House' . 'of ' . 'Frey.');

	// 16.Кодировка
	print_r(chr(126));
	print_r(chr(94));
	print_r(chr(37));

// Типы данных PHP
	
	// 17.Типы данных
	print_r(-0.304);

	// 18.Слабая типизация
	print_r('7' - (-8 - -2));

	// 19.Явное преобразование типов
	print_r(((string) 2) . ' times');

// Переменные в языке PHP

	// 20.Что такое переменная
	$motto = 'What Is Dead May Never Die!';
	print_r($motto);

	// 21.Изменение переменной
	$name = 'anneirB';
	print_r($name);

	// 22.Выбор имени переменной
	$brother = '2';
	print_r($brother);

	// 23.Ошибки при работе с переменными
	$family = 'Targaryen';print_r($family);
	print_r(' and ');
	$pet = 'Dragon';
	print_r($pet);

	// 24.Выражения в определениях
	$eurosCount = 100;
	$dollarsCount = 100 * 1.25;
	$rublesCount = $dollarsCount * 60;
	print_r($dollarsCount);
	print_r("\n");
	print_r($rublesCount);
	
	// 25.Переменные и конкатенация
	$info = "\nWe couldn't verify you mother's maiden name.";
	$intro = "\nHere is important information about your account security.";
	$firstName = 'Joffrey';
	$greeting = 'Hello';
	$gfa = $greeting . ', ' . $firstName . '!' . $intro;
	print_r($gfa);
	print_r($info);

	// 26.Именование переменных
	$firstNumber = 1.10;
	$secondNumber = -100;
	print_r($firstNumber * $secondNumber);

	// 27.Магические числа
	$king = 'King Balon the 6th';
	$kingOne = 6;
	$kingTwu = 17;
	print_r($king . ' has ' . ($kingOne * $kingTwu) . ' rooms.');

	// 28.Константы
	const DRAGONS_BORN_COUNT = 3;
	$bar = 'HELLO WORLD!';
	$bar = ucfirst($bar);         
	$bar = ucfirst(strtolower($bar));

	// 29.Магические константы
	print_r(__DIR__);

	// 30.Интерполяция
	$stark = 'Arya';
	print_r("Do you want to eat, {$stark}?");

	// 31.Извлечение символов из строки
	$one = 'Naharis';
	$two = 'Mormont';
	$three = 'Sand';
	print_r($one[2]);
	print_r($two[1]);
	print_r($three[3]);
	print_r($two[4]);
	print_r($two[2]);

	// 32.Heredoc
	$str = <<<EOT
	Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
	This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
	EOT;
	print_r($str);

// Вызов функций
	
	// 33.Функции и их вызов
	use function HexletBasics\Functions\calculateDistance;
	$distance = calculateDistance('Qarth', 'Vaes Dothrak');
	print_r($distance);

	// 34.Сигнатура функции
	$text = 'mount';
	$text = ucfirst($text); 
	print_r($text);

	// 35.Стандартная библиотека
	$motto = 'Family, Duty, Honor';
	echo gettype($motto);

	// 36.Аргументы по умолчанию
	$number = round(10.1234, 2);
	print_r($number);

	// 37.Функции с переменным числом параметров
	print_r(min(3, 10, 22, -3, 0));

	// 38.Вызов функции — выражение
	use function HexletBasics\Functions\calculateDistance;
	$dis = calculateDistance('Winterfell', 'The Twins') + calculateDistance('The Twins', 'The Eyrie');
	print_r($dis);

	// 39.Аргументы как выражения
	use function HexletBasics\Functions\calculateDistanceBetweenTowns;
	$from = 'The Twins';
	$to = 'The Eyrie';
	print_r(calculateDistanceBetweenTowns($from . '-' . $to));

	// 40.Вызов функций в аргументах функций
	use function HexletBasics\Functions\getParentFor;
	print_r(getParentFor(getParentFor('Joffrey Baratheon'), 'father'));

	// 41.Детерминированность
	$text = 'knock!';
	print_r(strtoupper($text));

	// 42.Побочные эффекты
	use function HexletBasics\Functions\getParentFor;
	print_r(getParentFor('Daenerys Targaryen'));

// Определение функций
	
	// 43.Создание (определение) функции
	namespace HexletBasics\DefineFunctions\Define;
	function printMotto(){
	    print_r('Winter is coming');
	}

	// 44.Передача одного аргумента
	namespace HexletBasics\DefineFunctions\Argument;
	function printJaimesLine($lala){
    print_r("JAIME: {$lala}");
	}

	// 45.Передача нескольких аргументов
	namespace HexletBasics\DefineFunctions\Arguments;
	function printSeq($one, $two)
	{
    print_r(str_repeat($one, $two));
	}

	// 46.Возврат значений
	namespace HexletBasics\DefineFunctions\ReturnInstruction;
	use function HexletBasics\Functions\getParentFor;
	function getParentNamesTotalLength($child){
    return strlen(getParentFor($child, 'mother')) + strlen(getParentFor($child, 'father'));
	}

	// 47.Возврат по умолчанию
	namespace HexletBasics\DefineFunctions\DefaultReturn;
	function getNull(){
	    return null;
	}

	// 48.Параметры по умолчанию
	namespace HexletBasics\DefineFunctions\DefaultArguments;
	use function HexletBasics\Functions\getParentFor;
	function getCustomParentFor($a, $b = 'father') {
	return getParentFor($a, $b);
	}

	// 49.Именование
	namespace HexletBasics\DefineFunctions\Naming;
	function getFormattedBirthday($day, $mounth, $year){
    $abc = "%02d-%02d-%04d";
    return sprintf($abc, $day, $mounth, $year);
	}

	// 50.Окружение
	namespace HexletBasics\DefineFunctions\Environment;
	function getAgeDifference($oneYear, $twoYear) {
    $string = "The age difference is ";
    $sub = abs($twoYear) - abs($oneYear);
    return $string . $sub;
	}

	// 51.Чтение документации
	namespace HexletBasics\DefineFunctions\ReadingDocumentation;
	function getAge($age) {
	return round($age, 0, PHP_ROUND_HALF_DOWN);
	}

// Логика

	//  52.Логический тип
	namespace HexletBasics\Logic\BoolType;
	function isPensioner($age)
	{
    return $age >= 60;
	}
	isPensioner(75);

	// 53.Предикаты
	namespace HexletBasics\Logic\Predicates;
	function isMister($type)
	{
	return $type === 'Mister';
	}
	var_dump(isMister('Mister'));

	// 54.Комбинирование операций и функций
	namespace HexletBasics\Logic\CombineExpressions;
	function hasTargaryenReference($name)
	{
	$ab = substr($name, 0, 9);
	return $ab === 'Targaryen';
	}

	// 55.Логические операторы
	namespace HexletBasics\Logic\LogicalOperators;
	function isLannisterSoldier($a, $b)
	{
	return $a === 'red' && $b === null || $b === 'lion';
	}

	// 56.Отрицание
	namespace HexletBasics\Logic\LogicalNegation;
	use function HexletBasics\Functions\isLannisterSoldier;
	function isNotLannisterSoldier($a, $b)
	{
	return !($a === 'red' && $b === null || $b === 'lion');
	}

	// 57.Логические операторы 2
	namespace HexletBasics\Logic\LogicalOperators2;
	function isNeutralSoldier($a, $b)
	{
	return !($a === 'red') && ($b === 'black');
	}

	// 58.Слабая типизация - 2
	namespace HexletBasics\Logic\WeakTyping;
	function isFalsy($a)
	{

	return ($a == false);
	}

	// 59.Условные конструкции
	namespace HexletBasics\Conditionals\IfStatement;
	function getSentenceTone($str)
	{
    if (strtoupper($str) === $str){
    return 'scream';
    }
    return 'general';
	}

	// 60.else
	namespace HexletBasics\Conditionals\IfElse;
	function normalizeUrl($url)
	{
    if (strpos($url, 'http://') === 0) {
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
	}

	// 61.Конструкция else if
	namespace HexletBasics\Conditionals\ElseIfStatement;
	function whoIsThisHouseToStarks($a)
	{
    if ($a === 'Karstark' || $a === 'Tully'){
        return 'friend';
    }
    elseif ($a === 'Lannister' || $a === 'Frey'){
        return 'enemy';
    }
    else {
        return 'neutral';
    	}
	}

	// 62.Тернарный оператор
	namespace HexletBasics\Logic\TernaryOperator;
	function convertText($ab){
	if ($ab === ucfirst($ab)){
    return $ab;}
    return strrev($ab);
	}

	// 63.Конструкция Switch
	namespace HexletBasics\Conditionals\SwitchStatement;
	function getNumberExplanation($nomber){
		switch($nomber) {
        case 666:
             return 'devil number';
        case 42: 
             return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return null;
    	}
	}

	// 64.Оператор Элвис
	namespace HexletBasics\Conditionals\Elvis;
	function generateAmount($a, $b)
	{
   	return $a ?: $b*3; 
	}

// Циклы
	
	// 65.Цикл While
	namespace HexletBasics\Loops\WhileLoop;
	function printNumbers($firstNumber)
	{
    while ($firstNumber >= 1) 
    {
        print_r($firstNumber);
        print_r("\n");
         $firstNumber = $firstNumber - 1;
    }
    print_r('finished!');
	}

	// 66.Агрегация данных (Числа)
	namespace HexletBasics\Loops\AgregationNumber;
	function multiplyNumberFromRange($start, $finish){
	$i = $start;
    $multi = 1;
    while($i <= $finish){
        $multi = $multi * $i;
        $i = $i + 1;
    }
    return $multi;
	}

	// 67.Агрегация данных (Строки)
	namespace HexletBasics\Loops\AgregationString;
	function joinNumbersFromRange($a, $b){
	$result = '';
	while($a <= $b){
	    $result = "{$result}{$a}";
		$a = $a +1;
	    }
	return $result;
	}

	// 68.Обход строк
	namespace HexletBasics\Loops\IterationOverString;
	function printReversedNameBySymbol($name) {
    $nameReverse = strrev($name);
    $i = 0;
    while ($i < strlen($nameReverse)) {
        print_r("$nameReverse[$i]\n");
        $i = $i + 1;
    }
	}

	// 69.Условия внутри тела цикла
	namespace HexletBasics\Loops\ConditionsInsideLoops;
	function countChars($str, $char) {
	$i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if (strtoupper($str[$i]) === strtoupper($char)) {
          $count = $count + 1;
        }
        $i = $i + 1;
    }
    return $count;
	}

	// 70.Формирование строк в циклах
	namespace HexletBasics\Loops\ReverseString;
	function mysubstr($a, $b){
	$i = 0;
    $result = '';
	while ($i < $b){ 
	$currentChar = $a[$i];
        $result = "{$result}{$currentChar}";
        $i = $i + 1;
    }
	return $result;
	}

	// 71.Пограничные случаи
	namespace HexletBasics\Loops\EdgeCases;
	function isArgumentsForSubstrCorrect($str,$a,$b) {

    if( $b < 0){
        return false;
    }elseif($a < 0){
        return false;
    }elseif($a > (strlen($str) - 1)){
        return false;
    }elseif(($a + $b) > (strlen($str))){
        return false;
    }
	return true;
	}

	// 72.Синтаксический сахар
	namespace HexletBasics\Loops\SyntaxSugar;
	function countChars($str, $a) {
	$lenght = strlen($str);
    $iterator = 0;
    $charCount = 0;
    while ($lenght > 0) {
        if($str[$iterator] === $a) {
            $charCount += 1;
        }
        $iterator += 1;
        $lenght -= 1;
    }
    return $charCount;
	}

	// 73.Инкремент и декремент
	namespace HexletBasics\Loops\Mutators;
	function filterString($str, $char) {
    $a = strlen($str);
    $b = 0;
    $c = '';
    while ($a > 0) {
        if ($str[$b] != $char) {
            $c = $c . $str[$b];
        }
        $a -= 1;
        $b += 1;
    }
    return $c;
	}

	// 74.Возврат из циклов
	namespace HexletBasics\Loops\ReturnFromLoop;
	function hasChar($str, $char)
	{
    $length = strlen($str);
    $index = 0;
    while ($index < $length) {
        $currentChar = $str[$index];
        if ($currentChar === $char) {
            return true;
        }
		 $index++;
    }
	return false;
	}

	// 75.Цикл For
	namespace HexletBasics\Loops\ForLoop;
	function sumOfSeries($a , $b){
    $sum = 0;
    for($i = $a ; $i <= $b ; $i += 1)
    {$sum = $sum + $i;
    }
	return $sum;
	}

// Погружаясь в строки

	// 76.Юникод
	namespace HexletBasics\DeepIntoStrings\Unicode;
	function invertCase($text) {
    $result = "";
    for ($i = 0; $i < mb_strlen($text); $i +=1) {
        if (mb_substr($text, $i, 1) === mb_strtoupper(mb_substr($text, $i, 1))) {
            $result .= mb_strtolower(mb_substr($text, $i, 1));
	} else { $result .= mb_strtoupper(mb_substr($text, $i, 1));}
    }   
        return $result;
    }

    // 77.Локализация
    print_r(setlocale(LC_CTYPE, 0));

    // 78.Поиск стартовой позиции
	namespace HexletBasics\DeepIntoStrings\StartWith;
	function startsWith($text, $str){
    $length = mb_strlen($str);
	if (mb_substr($text, 0, $length) === $str)
    return true;
	return false; 
    // END
	}

// Дата и Время

	// 79.Время
	namespace HexletBasics\Dates\Timestamp;
	const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
	function getYear($timestamp)
	{
    // BEGIN (write your solution here)
    return (int)date('Y',$timestamp);
    // END
	}

	// 80.Date
	namespace HexletBasics\Dates\DateFunction;
	function getCustomDate($timestamp)
	{
    return date('d/m/Y',$timestamp );
    // END
	}

	// 81.mktime()
	namespace HexletBasics\Dates\Mkdtime;
	function getHexletBirthday() {
    return mktime(0, 0, 0, 1, 1, 2012);
	}

	// 82.Часовые пояса (тайм зоны)
	print_r(date_default_timezone_get());