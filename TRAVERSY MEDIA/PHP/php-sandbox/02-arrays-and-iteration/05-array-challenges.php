<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$numbers = [1, 3, 5, 7, 9, 11, 23];
$num_sum = array_sum($numbers);
$num_count = count($numbers);
echo "<p>The sum of the $num_count numbers is: $num_sum</p>";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
// array_push($colors, ...['purple', 'orange']);
$colors = array_merge($colors, ['purple', 'orange']);
$colors[1] = 'pink';
array_pop($colors);
echo '<p><pre>';
print_r($colors);
echo '</pre></p>';

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$job_listings = [
  ['id' => 0, 'job_title' => 'Backend Developer', 'company' => 'Web Technologies LLC', 'contact_email' => 'webtechllc@gmail.com', 'contact_phone' => '245-55-89', 'skills' => ['PHP', 'Laravel', 'React.JS']],
  ['id' => 1, 'job_title' => 'Frontend Developer', 'company' => 'Web Technologies LLC', 'contact_email' => 'webtechllc@gmail.com', 'contact_phone' => '245-55-89', 'skills' => ['HTML', 'CSS', 'JavaScript']],
  ['id' => 2, 'job_title' => 'Web Designer', 'company' => 'Web Technologies LLC', 'contact_email' => 'webtechllc@gmail.com', 'contact_phone' => '245-55-89', 'skills' => ['Web Design', 'Photoshop', 'Figma']]
];
array_push($job_listings, ['id' => 3, 'job_title' => 'SEO', 'company' => 'Web Technologies LLC', 'contact_email' => 'webtechllc@gmail.com', 'contact_phone' => '245-55-89', 'skills' => ['Search Engine Optimization', 'Understanding Market Trends']]);
echo "<p>{$job_listings[1]['job_title']}</p>";
echo "<p>{$job_listings[2]['skills'][0]}</p>";
