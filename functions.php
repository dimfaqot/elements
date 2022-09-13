<?php


function singkatnama($nama)
{
    $exp = explode(' ', $nama);

    $res = $nama;

    if (count($exp) == 2) {
        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1];
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1];
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1];
        }
    }
    if (count($exp) == 3) {
        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2];
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2];
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2];
        } else {
            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '.';
        }
    }

    if (count($exp) == 4) {
        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '.';
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '.';
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '.';
        } else {
            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '. ' . substr($exp[3], 0, 1) . '.';
        }
    }

    if (count($exp) == 5) {
        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '.';
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '.';
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '.';
        } else {

            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '. ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '.';
        }
    }


    if (count($exp) == 6) {
        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '.';
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '.';
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '.';
        } else {

            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '. ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '.';
        }
    }
    if (count($exp) == 7) {

        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '.';
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '.';
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '.';
        } else {

            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '. ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '.';
        }
    }

    if (count($exp) == 8) {

        if ($exp[0] == "Muhammad" || $exp[0] == "Muhamad" || $exp[0] == "Muhamat" || $exp[0] == "Muhammat") {
            $res = "M. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '. ' . substr($exp[7], 0, 1) . '.';
        } else if ($exp[0] == "Ahmad" || $exp[0] == "Ahmat") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '. ' . substr($exp[7], 0, 1) . '.';
        } else if ($exp[0] == "Abdul") {
            $res = "A. " . $exp[1] . ' ' . $exp[2] . ' ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '. ' . substr($exp[7], 0, 1) . '.';
        } else {

            $res = $exp[0] . ' ' . $exp[1] . ' ' . substr($exp[2], 0, 1) . '. ' . substr($exp[3], 0, 1) . '. ' . substr($exp[4], 0, 1) . '. ' . substr($exp[5], 0, 1) . '. ' . substr($exp[6], 0, 1) . '. ' . substr($exp[7], 0, 1) . '.';
        }
    }
    return $res;
}



// TEXT

function firstWordUpCase($text)
{
    $newText = ucwords(strtolower($text));
    return $newText;
}

function firstUpCase($text)
{
    $newText = ucfirst(strtolower($text));
    return $newText;
}

function clear($string)
{
    return htmlspecialchars(trim($string));
}

function replace($text, $target, $to)
{
    return str_replace($target, $to, $text);
}
