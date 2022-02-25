 /// Pair of index that mak sum of given number
    $value = 15;
    $array = [1,14,29,21,12,3,30,-15,30];
    for ($i = 0 ; $i<sizeof($array);$i++)
    {

        for ($j =$i+1;$j<sizeof($array);$j++)
        {
            if ($array[$i] + $array[$j] == $value)
            {
                echo  'Pair Will be'.'Array["'.$i.'"]'.'Array["'.$j.'"]';
                echo '<br>';
            }

        }

    }




    // Fibonacci series

    $num = 6;
    $i =0;
    $n1 =0;
    $n2=1;
    $series = '';
    $series.=$n1.',';
    $series.=$n2.',';
    while ($i<=$num)
    {
        $n3 = $n1+$n2;
        $n1 = $n2;
        $n2 = $n3;
        $series.=$n3.',';
        $i++;

    }

    // Second Maximum Number

    $dummyArray = [1,14,29,21,12,3,30,30,-15];
    $array = [];
    $newArray = [];
    foreach ($dummyArray as $key=>$value)
    {
        if (!isset($newArray[$value]))
        {
            array_push($array,$value);
            $newArray[$value] = $value;
        }else{
            $newArray[$value] = $value;

        }
    }
    for ($i=0; $i<sizeof($array) ; $i++)
    {
        for ($j=$i+1; $j<sizeof($array);$j++)
        {
            $tmp = $array[$i];
            if ($array[$i] < $array[$j])
            {
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }

    dd($array[1]);


//     Brackets Sequence

    $array =['{','{','{','{','}','{','}','{','1','+','3','}','}','}','}','{','}'];
    $dummyArray = [];
    foreach ($array as $value)
    {
        echo  $value;
        if ($value == '{')
        {
            $dummyArray[] = $value;
        }
        if ($value=='}')
        {
            if (count($dummyArray) > 0)
            {
                array_pop($dummyArray);
            }else{
                return 'false';
            }
        }
    }
    if ($dummyArray)
    {
        return 'false';
    }else{
        return 'true';
    }

    // Elements Number of occurrence

    $array = [1,14,29,21,12,3,30,30,-15,-15];

    $dummyArray=[];
    foreach ($array as $value)
    {
        $dummyArray[$value] =isset($dummyArray[$value])  ? $dummyArray[$value] + 1 : 1;
    }

    dd($dummyArray);
     
     
     
     
//  Show Number Against Last Index Number 
$array = [1,3,6,7,8,9];


$count = sizeof($array)-1;
foreach ($array as $key=>$value)
{
    if ($key < $count)
    {
        echo  $array[$key].'=>'.$array[$count].'<br>';
        $count = $count -1;
    }
    elseif ($key == $count)
    {
        echo  $array[$key].'=>'.$array[$key].'<br>';

    }
}

