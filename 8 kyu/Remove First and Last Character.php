<?php
function remove_char(string $s): string {
    return substr($s, 1,-1);
}

echo remove_char("place");