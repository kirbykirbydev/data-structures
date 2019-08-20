<?php
/**
 * this script describes the HEAP data structure
 * 
 *PHP heap api documentation can be found at
 *https://www.php.net/manual/en/class.splmaxheap.php
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
 * I am using two heaps here FOR EXAMPLE ONLY
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