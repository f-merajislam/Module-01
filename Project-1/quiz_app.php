<?php

// Quiz application
$score = 0;

echo "Welcome to the Quiz Application!\n";

// Question 1
echo "1. What is the capital of France?\n";
echo "a) Berlin\nb) Madrid\nc) Paris\n";

echo "Give your answer (a/b/c): \n";
$answer1 = trim(fgets(STDIN));

if ($answer1 == "c"){
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is c) Paris.\n";
}

// Question 2
echo "\n2. What is 2 + 2 = ?\n";
echo "a) 5\nb) 4\nc) 9\n";

echo "Give your answer (a/b/c): \n";
$answer1 = trim(fgets(STDIN));

if ($answer1 == "b"){
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is b) 4.\n";
}

// Question 3
echo "\n3. What is the color of the sky?\n";
echo "a) Blue\nb) Green\nc) Red\n";

echo "Give your answer (a/b/c): \n";
$answer1 = trim(fgets(STDIN));

if ($answer1 == "a"){
    echo "Correct!\n";
    $score++;
} else {
    echo "Wrong! The correct answer is a) Blue.\n";
}

echo "Your total score is: $score/3\n";
echo "Thank you for playing the Quiz Application!\n";
?>