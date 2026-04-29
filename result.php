<?php
// Created by gohilmitrajsinh
include 'questions.php';

$score = 0;

echo "<h2>Quiz Result</h2>";
echo "<p>Developed by gohilmitrajsinh</p>";

foreach ($questions as $index => $q) {
    $userAnswer = $_POST["answer" . $index];

    if ($userAnswer == $q["answer"]) {
        $score++;
        echo "<p>Question " . ($index + 1) . ": ✅ Correct</p>";
    } else {
        echo "<p>Question " . ($index + 1) . ": ❌ Wrong (Correct: " . $q["answer"] . ")</p>";
    }
}

echo "<h3>Your Score: $score / " . count($questions) . "</h3>";

// Feedback
if ($score == count($questions)) {
    echo "<p>🎉 Excellent work!</p>";
} elseif ($score >= 2) {
    echo "<p>👍 Good job!</p>";
} else {
    echo "<p>😅 Try again!</p>";
}
?>
