# PHP Foreach Loop Modification During Iteration
This example demonstrates a common issue in PHP where modifying an array while iterating over it using a foreach loop leads to unexpected results. The code iterates through an array, removes elements with the value 'a', but the indexing gets off due to the removal inside the loop.  The solution provides a safer method using array_filter. 