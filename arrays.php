<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //array_flip
    function arrayFlip($a)
    {
        $result = [];

        foreach ($a as $key => $value) {
            $result[$value] = $key;
        }

        print_r($result);
    }

    $a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    arrayFlip($a);


    //array_filter
    function arrayFilter($arr, $callback, $returnKey)
    {
        $result = [];
    
        foreach ($arr as $key => $value) {
            if ($callback($value)) {
                if ($returnKey) {
                    $result[] = $key;
                } else {
                    $result[$key] = $value;
                }
            }
        }
    
        return $result;
    }
    
    function oddNumber($number)
    {
        return($number % 2 != 0);
    }
    
    $a1 = ["A" => 1,"B" => 3, "C" => 2, "D" => 3, "E" => 4];
    // print_r(arrayFilter($a1, "oddNumber", true)); 
    print_r(arrayFilter($a1, "oddNumber", false));


    //array_unique
    function arrayUnique($a)
    {
        $result = [];
        $uniqueValues = [];

        foreach ($a as $value) {
            $isUnique = true;
            foreach ($uniqueValues as $uniqueValue) {
                if ($value == $uniqueValue) {
                    $isUnique = false;
                    break;
                }
            }

            if ($isUnique) {
                $result[] = $value;
                $uniqueValues[] = $value;
            }
        }

        print_r($result);
    }

    arrayUnique($a);


    //array_merge
    function arrayMerge(...$arrays)
    {
        $result = [];
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    $a1 = array("a" => "red", "b" => "green");
    $a2 = array("c" => "blue", "b" => "yellow");
    $result = arrayMerge($a1, $a2);
    print_r($result);

    ?>
</body>

</html>