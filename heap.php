<?php
/**
 * this script describes the HEAP data structure
 * 
 *PHP heap api documentation can be found at
 *https://www.php.net/manual/en/class.splmaxheap.php
 * 
 * 
 * why use heaps ?
 * In summary , it can be a container of a sorted list of items. While items are inserted into
 * a heap, it automatically adds the item in a sorted location.
 * 
 * in the end of an insert process, the max (or min) value is always at the top and is ready to be fetched
 * 
 * 
 * this is MORE EFFICIENT than using an array to dump all the data and then trying to sort 
 * to determine which is the largest (or smallest value).
 * 
 * 
 * why use SplHeap ?
 * PHP has a built-in HEAP data structure that is ready to use. It is already compiled 
 * and is naturally faster than coding a heap manually 
 * 
 * 
 */


class SampleMaxHeap extends SplHeap
{

    /**
     * this is a required implementation
     * should return an interger value
     * positive or negative , 0 if equal
     *
     *
     * {@inheritdoc}
     * @see SplHeap::compare()
     */
    public function compare($value1, $value2)
    {

        // do comparison here
        if ($value1 > $value2) {
            return 1;
        } elseif ($value1 < $value2) {
            return - 1;
        } else {
            // must be equal
            return 0;
        }
    }
}

/**
 * I am using two heaps here AS EXAMPLE ONLY (you just need one heap for one purpose)
 * the idea is to REVERSE the comparison in the inherited function 
 */


class SampleMinHeap extends SplHeap
{

    public function compare($value1, $value2)
    {

        // do comparison here
        if ($value1 > $value2) {
            return - 1;
        } elseif ($value1 < $value2) {
            return 1;
        } else {
            // must be equal
            return 0;
        }
    }
}




$theHeap = new SampleMaxHeap();

$minheap = new  SampleMinHeap();

// sample data
$data = [5,4,7,3,8,23,6,23,2,4,3];

foreach( $data as $d ){
    print "inserting {$d} \n";
    $theHeap->insert($d);
    $minheap->insert($d);
}
print "===================\n";
print "top value is " . $theHeap->top() ."\n" ;


print "lowest value is ". $minheap->top() ."\n";
// 