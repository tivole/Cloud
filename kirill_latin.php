<?php

function add_to_arr_kl($array_of_ans, $symbols) {
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


function K_To_L($latin) {
    $N = mb_strlen($latin);
    $K = 0;
    $ans = "";
    $array_of_ans = array("");
    for ($i = 0; $i < $N; $i++) {
        
        $char = mb_substr($latin, $i, 1, "UTF-8");

        if($char == " ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array(" "));
        }

        // А а
        else if($char == "А") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("A"));
        } else if($char == "а") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("a"));
        }

        
        // Б б
        else if($char == "Б") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("B"));
        } else if($char == "б") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("b"));
        }
        

        // Ҹ ҹ
        else if($char == "Ҹ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("C"));
        } else if($char == "ҹ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("c"));
        }
        

        // Ч ч
        else if($char == "Ч") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ç"));
        } else if($char == "ч") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ç"));
        }
        

        // Д д
        else if($char == "Д") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("D"));
        } else if($char == "д") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("d"));
        }

        
        // Е е
        else if($char == "Е") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("E", "Ә"));
        } else if($char == "е") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("e", "ә"));
        }

        
        // Ә ә
        else if($char == "Ә") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ə", "E"));
        } else if($char == "ә") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ə", "e"));
        }

        // Ф ф
        else if($char == "Ф") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("F"));
        } else if($char == "ф") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("f"));
        }
        

        // Ҝ ҝ
        else if($char == "Ҝ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("G"));
        } else if($char == "ҝ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("g"));
        }
        

        // Ғ ғ
        else if($char == "Ғ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ğ"));
        } else if($char == "ғ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ğ"));
        }
        

        // Һ һ
        else if($char == "Һ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("H"));
        } else if($char == "һ") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("h"));
        }
        

        // Х х
        else if($char == "Х") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("X", "H"));
        } else if($char == "х") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("x", "h"));
        }
        

        // Ы ы
        else if($char == "Ы") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("I"));
        } else if($char == "ы") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ı"));
        }
        

        // И и
        else if($char == "И") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("İ"));
        } else if($char == "и") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("i"));
        }
        

        // Ж ж
        else if($char == "Ж") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("J"));
        } else if($char == "ж") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("j"));
        }
        

        // К к
        else if($char == "К") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("K"));
        } else if($char == "к") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("k"));
        }
        

        // Г г
        else if($char == "Г") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Q", "G"));
        } else if($char == "г") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("q", "g"));
        }
        

        // Л л
        else if($char == "Л") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("L"));
        } else if($char == "л") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("l"));
        }
        

        // М м
        else if($char == "М") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("M"));
        } else if($char == "м") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("m"));
        }
        

        // Н н
        else if($char == "Н") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("N"));
        } else if($char == "н") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("n"));
        }
        

        // О о
        else if($char == "О") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("O"));
        } else if($char == "о") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("o"));
        }
        

        // Ө ө
        else if($char == "Ө") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ö"));
        } else if($char == "ө") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ö"));
        }
        

        // П п
        else if($char == "П") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("P"));
        } else if($char == "п") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("p"));
        }
        

        // Р р
        else if($char == "Р") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("R"));
        } else if($char == "р") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("r"));
        }
        

        // С с
        else if($char == "С") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("S"));
        } else if($char == "с") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("s"));
        }
        

        // Ш ш
        else if($char == "Ш") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ş"));
        } else if($char == "ш") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ş"));
        }
        

        // Т т
        else if($char == "Т") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("T"));
        } else if($char == "т") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("t"));
        }
        

        // У у
        else if($char == "У") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("U"));
        } else if($char == "у") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("u"));
        }
        

        // Ү ү
        else if($char == "Ү") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Ü"));
        } else if($char == "ү") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("ü"));
        }
        

        // В в
        else if($char == "В") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("V"));
        } else if($char == "в") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("v"));
        }
        

        // Ј ј
        else if($char == "Ј") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Y"));
        } else if($char == "ј") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("y"));
        }
        
        
        // З з
        else if($char == "З") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("Z"));
        } else if($char == "з") {
            $array_of_ans = add_to_arr_kl($array_of_ans, array("z"));
        }

        // Other symbols (, . : ; * & )
        else {
            $array_of_ans = add_to_arr_kl($array_of_ans, array($char));
        }
    }

    for ($i = 0; $i < count($array_of_ans); $i++) {
        if (strpos($array_of_ans[$i], "ş") !== false) {
            $copiedword = $array_of_ans[$i];
            $copiedword = str_replace("ş", "sh", $copiedword);
            array_push($array_of_ans, $copiedword);
        } else if(strpos($array_of_ans[$i], "Ş") !== false) {
            $copiedword = $array_of_ans[$i];
            $copiedword = str_replace("Ş", "Sh", $copiedword);
            array_push($array_of_ans, $copiedword);
        }
    }

    array_push($array_of_ans, $latin);

    return $array_of_ans;
}


?>