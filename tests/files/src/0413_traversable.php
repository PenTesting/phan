<?php

function to_array(iterable $input): array {
    if (is_array($input)) {
        echo strlen($input);  // wrong
        return $input;
    } else {
        if (rand() % 2 > 0) {
            return $input;  // wrong
        } else {
            return iterator_to_array($input, true);
        }
    }
}

function check_iterable(iterable $input) : array {
    if (is_object($input)) {
        var_export($input->nnnext());  // does not exist
        return $input;  // wrong
    } else {
        echo strlen($input);  // wrong
        return $input;
    }
}
