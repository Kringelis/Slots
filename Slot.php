<?php
$money = 500;

$board = [
    [' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' ']
];
$symbols = [
    'A', 'A',
    'K', 'K',
    'Q', 'Q', 'Q', 'Q',
    'J', 'J', 'J', 'J', 'J',
    '10', '10', '10', '10', '10'
];

echo "$money credits left.";
echo PHP_EOL;


function boardVisual(array $board): void
{
    echo $board[0][0] . '/' . $board[0][1] . '/' . $board[0][2] . '/' . $board[0][3] . '/' . $board[0][4] . PHP_EOL;
    echo $board[0][1] . '/' . $board[1][1] . '/' . $board[1][2] . '/' . $board[1][3] . '/' . $board[1][4] . PHP_EOL;
    echo $board[0][2] . '/' . $board[2][1] . '/' . $board[2][2] . '/' . $board[2][3] . '/' . $board[2][4] . PHP_EOL;
}


$input = (int)readline('Input your bet: ');

if ($input < 0) {
    echo 'positive numbers only';
    exit;
}

$symbolsCount = count($symbols);
$randomSymbolsCount = array_rand($symbols, $symbolsCount);


//fill the array with symbols

$board[0][0] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[0][1] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[0][2] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[0][3] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[0][4] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[1][0] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[1][1] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[1][2] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[1][3] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[1][4] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[2][1] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[2][2] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[2][3] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
$board[2][4] = $symbols[$randomSymbolsCount[rand(0, $symbolsCount - 1)]];
print_r(boardVisual($board));




