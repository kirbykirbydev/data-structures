# heap sort
# generally good for searching the highest or lowest value
# by default the first element of a sorted heap is the smallest value
# heapify  ( heap sort ) has time complexity of O(n log n) ( at most )
# of n = 10 complexity = 10
# n =  100  complexity = 200
# n = 1000 complexity = 3000

# after tests comparisons have a O( n/1.8 log n) complexity which is nice
# n = 1000 complexity is 1635
# NOTE this is only based on comparisons done when pushing to the heap
# see demo_push_objects() below



# tip : instead of looping an array and using heappush to create a heap
# just use heapify


# complexity of pushing data to a heap is O( log n ) 
# example for n = 10, comlexity is 1, n = 100 complexity = 2 ; n = 1000 complexity  = 3 etc

# finding the smallest value ( no max here ) has O(1) so it is ready

# therefor heaps are useful for inserting items to the collection and readily fetching the smallest value


# references https://en.wikipedia.org/wiki/Heapsort
# online graph 
# https://www.desmos.com/calculator

from heapq import * 
import random

input_array = [7,5,8,2,6,3,3,3,7,9,6,3,68,1]
another_array = [101,103,5,10,201,202,257,100, 500, 999]
def get_largest( iterable ):

  heap = []

  for value in iterable:
    heappush(heap, value)

  return heappop(heap)



def demo_heapify(input_array):
  # convert an existing array to a heap
  # alters the array
  heapify(input_array)

  while input_array:
    print(heappop(input_array))



def demo_basic_push_pop():

  # basic push and pop
  # push values to heap and pop the smallest
  print ("basic push pop")

  heap = []

  for value in input_array:
    heappush(heap, value)

  while heap :
    print("smallest is")
    print( heappop(heap) )
    print(heap)



def demo_heappushpop():

  # heappushpop - push item to the heap and pop the smallest value
  # useful for heaps with existing data and when you want to process the
  # data with smallest value in the same time
  #
  # not useful as stand alone since pushing and poping  on empty heap makes no sense
  # for example

  print ("pushpop to empty array")
  print ("input")
  print (input_array)
  heap = []
  for value in input_array:
    print(heappushpop(heap, value))

  print ("="*20)

  print ("using 2 batches of data, existing heap, and new set of values")
  heap = []
  for value in input_array:
    heappush(heap, value)

  for value in another_array:
    print(heappushpop(heap, value))

'''
this demo shows that it is faster to convert an existing array via heapify versus heappush
it is not evident in small arrays, such as 50 items, but complexity increases exponentially
approximate count is 30% less comparisons
'''
def demo_push_objects():




# sample output with 1000 items

# demo heap push objects
# test push items to heap
# compare count 2283  <=================================== compare count is larger
# get item with smallset value
# compare count 9
# 1 smallest value 0.006428835673488731
# compare count 11
# 2 smallest value 0.3364849451346519
# compare count 10
# 3 smallest value 0.5298895182183516
# test heapify 
# compare count 1635 <==================================== compare count is larger
# ---
# compare count 9
# 1 smallest value (from converted) 0.006428835673488731
# compare count 10
# 2 smallest value (from converted) 0.3364849451346519


# sample output with 100000 items

# demo heap push objects
# test push items to heap
# compare count 227614
# get item with smallset value
# compare count 16
# 1 smallest value 0.0005670200001417491
# compare count 19
# 2 smallest value 0.0012508047450676685
# compare count 16
# 3 smallest value 0.00163143423795864
# test heapify 
# compare count 164918
# ---
# compare count 16
# 1 smallest value (from converted) 0.0005670200001417491
# compare count 19
# 2 smallest value (from converted) 0.0012508047450676685






  print ( "demo heap push objects")

  global count 
  count = 0
  class item :

    value = None

    def __init__(self, value):

      self.value = value

    def __lt__(self, other):
      global count
      
      count+=1
      return self.value < other.value 


  #items = [ item(10), item(1), item(5), item(12), item(7), item(22), item(2), item(1), item(4), item(13) ]
  items = [  item( (random.random()*100) ) for x in range(100000)   ]

  print ("test push items to heap")
  heap = []
  for i in items:
    # print ("==> push %s" % i.value)
    heappush(heap, i)

  print  ("compare count %d" % count )
  count = 0

  print ("get item with smallset value")
  smallest = heappop(heap)
  print  ("compare count %d" % count )
  count = 0
  print ("1 smallest value %s" % smallest.value )


  smallest = heappop(heap)
  print  ("compare count %d" % count )
  count = 0
  print ("2 smallest value %s" % smallest.value )  

  smallest = heappop(heap)
  print  ("compare count %d" % count )
  count = 0
  print ("3 smallest value %s" % smallest.value )  

  print ( "test heapify ")
  heapify(items)
  print  ("compare count %d" % count )
  count = 0
  print("---")
  smallest = heappop(items)
  print  ("compare count %d" % count )
  count = 0
  print ("1 smallest value (from converted) %s" % smallest.value )
  smallest = heappop(items)
  print  ("compare count %d" % count )
  count = 0
  print ("2 smallest value (from converted) %s" % smallest.value )


demo_push_objects()
