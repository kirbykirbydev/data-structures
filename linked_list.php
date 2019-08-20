<?php
/**
 * this is a simple implementation of doublylinked list
 * 
 *  
 *  why linked list?
 *  
 *  https://www.quora.com/When-would-you-use-a-linked-list
 *  
 *  Linked lists are preferable over arrays when:

    a) you need constant-time insertions/deletions from the list (such as in real-time computing where time predictability is absolutely critical)
    
    b) you don't know how many items will be in the list. With arrays, you may need to re-declare and copy memory if the array grows too big
    
    c) you don't need random access to any elements
    
    d) you want to be able to insert items in the middle of the list (such as a priority queue)


 *  also here: https://stackoverflow.com/questions/393556/when-to-use-a-linked-list-over-an-array-array-list
 * 
 *  
 *  Standard PHP Library (SPL)
 *  Doubly Linked List API reference
 *  
 *  https://www.php.net/manual/en/class.spldoublylinkedlist.php
 *  
 *  
 *  visually it looks like this
 *  +--------+     +--------+     +--------+     +--------+
 *  |        | --> |        | --> |        | --> |        |
 *  | node A |     | node B |     | node C |     | node D |
 *  |        | <-- |        | <-- |        | <-- |        |
 *  +--------+     +--------+     +--------+     +--------+
 *  
 *  the magic is when new nodes are inserted
 *  +--------+     +--------+     +--------+     +--------+     +--------+
 *  |        | --> |        | --> |        | --> |        | --> |        |
 *  | node A |     | node B |     | node X |     | node C |     | node C |
 *  |        | <-- |        | <-- |        | <-- |        | <-- |        |
 *  +--------+     +--------+     +--------+     +--------+     +--------+  
 *  
 *  which is more efficient than what a normal array would do
 *  
 *    
 *    
 *  code to follow
 */