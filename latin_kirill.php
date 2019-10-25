<?php

function my_mb_substr_lk($string, $offset, $length)
{
  $arr = preg_split("//u", $string);
  $slice = array_slice($arr, $offset + 1, $length);
  return implode("", $slice);
}

function my_mb_strlen_lk($word) {
    return strlen(utf8_decode($word));
}

function add_to_arr_lk($array_of_ans, $symbols) {
    $copy_of_ans = array();
    $K = 0;

    for ($i = 0; $i < count($symbols); $i++) {
        for ($j = 0; $j < count($array_of_ans); $j++) {
            array_push($copy_of_ans, $array_of_ans[$j]);
            $copy_of_ans[$K] .= $symbols[$i];
            $K++;
        }
    }

    return $copy_of_ans;
}

function L_To_K($latin) {

    if (strpos($latin, "sh") !== false) {
        $latin = str_replace("sh", "ş", $latin);
    }

    $N = my_mb_strlen_lk($latin);
    $K = 0;
    $ans = "";
    $array_of_ans = array("");
    for ($i = 0; $i < $N; $i++) {
        
        // $char = mb_substr($latin, $i, 1, "UTF-8");
        $char = my_mb_substr_lk($latin, $i, 1);

        if($char == " ") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array(" "));
        }

        // A a
        else if($char == "A") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("А"));
        } else if($char == "a") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("а"));
        }

        
        // B b
        else if($char == "B") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Б"));
        } else if($char == "b") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("б"));
        }
        

        // C c
        else if($char == "C") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ҹ"));
        } else if($char == "c") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ҹ"));
        }
        

        // Ç ç
        else if($char == "Ç") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ч"));
        } else if($char == "ç") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ч"));
        }
        

        // D d
        else if($char == "D") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Д"));
        } else if($char == "d") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("д"));
        }

        
        // E e
        else if($char == "E") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Е"));
        } else if($char == "e") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("е"));
        }

        
        // Ə ə
        else if($char == "Ə") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ә", "Е"));
        } else if($char == "ə") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ә", "е"));
        }

        // F f
        else if($char == "F") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ф"));
        } else if($char == "f") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ф"));
        }
        

        // G g
        else if($char == "G") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ҝ", "Г"));
        } else if($char == "g") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ҝ", "г"));
        }
        

        // Ğ ğ
        else if($char == "Ğ") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ғ"));
        } else if($char == "ğ") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ғ"));
        }
        

        // H h
        else if($char == "H") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Һ", "Х"));
        } else if($char == "h") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("һ", "х"));
        }
        

        // X x
        else if($char == "X") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Х"));
        } else if($char == "x") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("х"));
        }
        

        // I ı
        else if($char == "I") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ы"));
        } else if($char == "ı") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ы"));
        }
        

        // İ i
        else if($char == "İ") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("И"));
        } else if($char == "i") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("и"));
        }
        

        // J j
        else if($char == "J") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ж"));
        } else if($char == "j") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ж"));
        }
        

        // K k
        else if($char == "K") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("К"));
        } else if($char == "k") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("к"));
        }
        

        // Q q
        else if($char == "Q") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Г"));
        } else if($char == "q") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("г"));
        }
        

        // L l
        else if($char == "L") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Л"));
        } else if($char == "l") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("л"));
        }
        

        // M m
        else if($char == "M") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("М"));
        } else if($char == "m") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("м"));
        }
        

        // N n
        else if($char == "N") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Н"));
        } else if($char == "n") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("н"));
        }
        

        // O o
        else if($char == "O") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("О"));
        } else if($char == "o") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("о"));
        }
        

        // Ö ö
        else if($char == "Ö") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ө"));
        } else if($char == "ö") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ө"));
        }
        

        // P p
        else if($char == "P") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("П"));
        } else if($char == "p") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("п"));
        }
        

        // R r
        else if($char == "R") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Р"));
        } else if($char == "r") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("р"));
        }
        

        // S s
        else if($char == "S") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("С"));
        } else if($char == "s") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("с"));
        }
        

        // Ş ş
        else if($char == "Ş") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ш"));
        } else if($char == "ş") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ш"));
        }
        

        // T t
        else if($char == "T") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Т"));
        } else if($char == "t") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("т"));
        }
        

        // U u
        else if($char == "U") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("У"));
        } else if($char == "u") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("у"));
        }
        

        // Ü ü
        else if($char == "Ü") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ү"));
        } else if($char == "ü") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ү"));
        }
        

        // V v
        else if($char == "V") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("В"));
        } else if($char == "v") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("в"));
        }
        

        // Y y
        else if($char == "Y") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("Ј"));
        } else if($char == "y") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("ј"));
        }
        
        
        // Z z
        else if($char == "Z") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("З"));
        } else if($char == "z") {
            $array_of_ans = add_to_arr_lk($array_of_ans, array("з"));
        }

        // Other symbols (, . : ; * & )
        else {
            $array_of_ans = add_to_arr_lk($array_of_ans, array($char));
        }
    }

    $Kirill_Repeated = array("АА", "аа", "ББ", "бб", "ҸҸ", "ҹҹ", "ЧЧ", "чч", "ДД", "дд", "ЕЕ", "ее", "ӘӘ", "әә", "ФФ", "фф", "ҜҜ", "ҝҝ", "ҒҒ", "ғғ", "ҺҺ", "һһ", "ХХ", "хх", "ЫЫ", "ыы", "ИИ", "ии", "ЖЖ", "жж", "КК", "кк", "ГГ", "гг", "ЛЛ", "лл", "ММ", "мм", "НН", "нн", "ОО", "оо", "ӨӨ", "өө", "ПП", "пп", "РР", "рр", "СС", "сс", "ШШ", "шш", "ТТ", "тт", "УУ", "уу", "ҮҮ", "үү", "ВВ", "вв", "ЈЈ", "јј", "ЗЗ", "зз");

    for ($i = 0; $i < count($array_of_ans); $i++) {
        for ($j = 0; $j < count($Kirill_Repeated); $j++) {
            if (strpos($array_of_ans[$i], $Kirill_Repeated[$j]) !== false) {
                $copiedword = $array_of_ans[$i];
                // $copiedword = str_replace($Kirill_Repeated[$j], mb_substr($Kirill_Repeated[$j], 0, 1, "UTF-8"), $copiedword);
                $copiedword = str_replace($Kirill_Repeated[$j], my_mb_substr_lk($Kirill_Repeated[$j], 0, 1), $copiedword);
                array_push($array_of_ans, $copiedword);
            }
        }
    }

    array_push($array_of_ans, $latin);

    return $array_of_ans;
}

?>