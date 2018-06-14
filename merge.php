<?php


$defaults = array('0' => array('name' => 'abc', 'age' => 25 ),'1' => array('name' => 'def', 'age' => 20 ));

$custom = array('0' => array('name' => 'abc', 'age' => 35 ),'1' => array('name' => 'xyz', 'age' => 20 ));



function array_merge_defaults (array &$array1, array &$array2, $keyField)
{
    $merged = $array1;

    foreach ($array2 as $key => &$value)
    {
        $valueMerged = false;

        foreach ($merged as $mergedKey => &$item)
        {
            if (is_array($item) && array_key_exists($keyField, $item) && $item[$keyField] == $value[$keyField])
            {
                $item = array_merge($item, $value);
                $valueMerged = true;

                break;
            }
            else if ($mergedKey == $key)
            {
                if (is_numeric($mergedKey))
                {
                    $merged[] = $value;
                }
                else
                {
                    $item = $value;
                }

                $valueMerged = true;

                break;
            }
        }

        if (!$valueMerged)
        {
            $merged[$key] = $value;
        }
    }

    return $merged;
}
$merged = array_merge_defaults($defaults, $custom, 'name');

print_r($merged);