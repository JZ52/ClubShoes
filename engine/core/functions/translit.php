<?php
/* © LeoCRAFT Digital, "Catana" https://catana.leocraft.digital */
function translit($str,$type) {
    $str = trim($str);
    $tr = array(
        "а"=>"a",
        "б"=>"b",
        "в"=>"v",
        "г"=>"g",
        "д"=>"d",
        "е"=>"e",
        "ё"=>"yo",
        "ж"=>"zh",
        "з"=>"z",
        "и"=>"i",
        "й"=>"yi",
        "к"=>"k",
        "л"=>"l",
        "м"=>"m",
        "н"=>"n",
        "о"=>"o",
        "п"=>"p",
        "р"=>"r",
        "с"=>"s",
        "т"=>"t",
        "у"=>"u",
        "ф"=>"f",
        "х"=>"h",
        "ц"=>"cs",
        "ч"=>"ch",
        "ш"=>"sw",
        "щ"=>"swh",
        "ъ"=>".",
        "ы"=>"y",
        "ь"=>"q",
        "э"=>"ae",
        "ю"=>"yu",
        "я"=>"ya",
        "ґ"=>"ghe",
        "і"=>"i",
        "ї"=>"iy",
        "є"=>"ue",

        "А"=>"a",
        "Б"=>"b",
        "В"=>"v",
        "Г"=>"g",
        "Д"=>"d",
        "Е"=>"e",
        "Ё"=>"yo",
        "Ж"=>"zh",
        "З"=>"z",
        "И"=>"i",
        "Й"=>"yi",
        "К"=>"k",
        "Л"=>"l",
        "М"=>"m",
        "Н"=>"n",
        "О"=>"o",
        "П"=>"p",
        "Р"=>"r",
        "С"=>"s",
        "Т"=>"t",
        "У"=>"u",
        "Ф"=>"f",
        "Х"=>"h",
        "Ц"=>"cs",
        "Ч"=>"ch",
        "Ш"=>"sw",
        "Щ"=>"swh",
        "Ъ"=>".",
        "Ы"=>"y",
        "Ь"=>"q",
        "Э"=>"ae",
        "Ю"=>"yu",
        "Я"=>"ya",
        "Ґ"=>"ghe",
        "І"=>"i",
        "Ї"=>"jy",
        "Є"=>"ue",

        "Ą"=>"a",
        "Ć"=>"c",
        "Ę"=>"e",
        "Ł"=>"l",
        "Ń"=>"n",
        "Ó"=>"o",
        "Ś"=>"s",
        "Ź"=>"z",
        "Ż"=>"z",
        "ą"=>"a",
        "ć"=>"c",
        "ę"=>"e",
        "ł"=>"l",
        "ń"=>"n",
        "ó"=>"o",
        "ś"=>"s",
        "ź"=>"z",
        "ż"=>"z",

        "Á"=>"a",
        "Č"=>"c",
        "Ď"=>"d",
        "É"=>"e",
        "Ě"=>"e",
        "Í"=>"i",
        "Ň"=>"n",
        "Ř"=>"r",
        "Š"=>"s",
        "Ť"=>"t",
        "Ú"=>"u",
        "Ů"=>"u",
        "Ý"=>"y",
        "Ž"=>"z",

        "á"=>"a",
        "č"=>"c",
        "ď"=>"d",
        "é"=>"e",
        "ě"=>"e",
        "í"=>"i",
        "ň"=>"n",
        "ř"=>"r",
        "š"=>"s",
        "ť"=>"t",
        "ú"=>"u",
        "ů"=>"u",
        "ý"=>"y",
        "ž"=>"z",

        " "=>"-",
        "/"=>"-",
        ","=>"-",
        " – "=>"-",
        " - "=>"-",
        "---"=>"-",
        "--"=>"-",
        "-"=>"-",
        " : "=>"-",
        "("=>"",
        ")"=>"",
        "["=>"",
        "]"=>"",
        "="=>"",
        "+"=>"",
        "*"=>"",
        "?"=>"",
        "\""=>"",
        "’"=>"",
        "'"=>"",
        "`"=>"",
        "«"=>"",
        "»"=>"",
        '“'=>'',
        '”'=>'',
        "&"=>"",
        "%"=>"",
        "#"=>"",
        "@"=>"",
        "!"=>"",
        ";"=>"",
        "№"=>"",
        "^"=>"",
        ":"=>"",
        "~"=>"",
        "\\"=>"",
        "²"=>"2",
    );
    $add = array('.'=>'');
    if($type != 'file') $tr = array_merge($tr,$add);

    $newstr = strtr($str,$tr);
    $newstr = mb_strtolower($newstr);
    return $newstr;
}