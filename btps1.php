<?php
// BÀI TRẮC NGHIỆM

// Câu 1 Đáp án Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// Câu 2 Đáp án: A. TRUE
// Câu 3 Đáp án A. array()
// Câu 4 Đáp án a) readfile()
// Câu 5 b) Chuyển đổi một đối tượng thành một chuỗi

// BÀI TỰ LUẬN
// Câu 1

function generateFibonacci($n) {
    $fibonacci = [];

    if ($n < 0) {
        return $fibonacci;
    }

    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $fibonacci[] = $i;
        } else {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }

    return $fibonacci;
}

// 10 phần tử
$numberOfFibonacci = 10;

// Tạo và hiển thị dãy số Fibonacci
$fibonacciResult= generateFibonacci($numberOfFibonacci);

echo "Dãy số Fibonacci đầu tiên có $numberOfFibonacci phần tử là: ";
echo implode(", ",$fibonacciResult);
echo "<br>";

// Câu 2:

// Tạo mảng chứa thông tin học sinh
$students = [
    'student1' => ['id' => 01, 'name' => 'Đặng Linh', 'age' => 21, 'grade' => 8],
    'student2' => ['id' => 02, 'name' => 'Thùy Dương', 'age' => 19, 'grade' => 9],
    'student3' => ['id' => 03, 'name' => 'Minh Giang', 'age' => 20, 'grade' => 7],
    'student4' => ['id' => 04, 'name' => 'Quỳnh Anh', 'age' => 20, 'grade' => 6],
    'student5' => ['id' => 05, 'name' => 'Diệu Linh', 'age' => 20, 'grade' => 10],
];

// Hiển thị thông tin của tất cả học sinh
echo "Thông tin của tất cả học sinh:\n";

foreach ($students as $student) {
    echo "ID: {$student['id']}, Name: {$student['name']}, Age: {$student['age']}, Grade: {$student['grade']}\n";
}

$index = array_search(max(array_column($students, 'grade')), array_column($students, 'grade'));
$highestGradeStudent = $students[array_keys($students)[$index]];

// Hiển thị thông tin học sinh có điểm cao nhất
echo "\nHọc sinh có điểm cao nhất:\n";
echo "ID: {$highestGradeStudent['id']}, Name: {$highestGradeStudent['name']}, Age: {$highestGradeStudent['age']}, Grade: {$highestGradeStudent['grade']}\n";
?>