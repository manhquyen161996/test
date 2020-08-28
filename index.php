<?php

function mutateTheArray($length, $array)
{
    if ($length < 2) {
        return $array;
    }
    $arrayOutput = array();
    $arrayOutput[0] = $array[0] + $array[1];
    for($index = 1; $index < $length - 1; $index++) {
        $arrayOutput[$index] = $array[$index - 1] + $array[$index] + $array[$index + 1];
    }
    $arrayOutput[$length - 1] = $array[$length - 2] + $array[$length - 1];
    return $arrayOutput;
}

print_r(mutateTheArray(3, [1, 2, 4]));
