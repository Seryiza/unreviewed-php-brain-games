<?php

namespace Seryiza\BrainGames\Games\EvenGame;

const RULES = 'Answer "yes" if number even otherwise answer "no".';

function isEven(int $number)
{
    return $number % 2 === 0;
}

function getEvenGame(): array
{
    $game = function () {
        $number = rand(1, 100);
        $answer = isEven($number) ? 'yes' : 'no';
        return [$number, $answer];
    };

    return [RULES, $game];
}
