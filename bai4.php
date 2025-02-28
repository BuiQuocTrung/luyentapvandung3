<?php

$students = [
    ["Họ tên" => "Nguyễn Văn A", "Ngày sinh" => "2002-01-15", "Giới tính" => "Nam", "Toán" => 8.5, "Ngữ văn" => 7.0, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Trần Thị B", "Ngày sinh" => "2001-04-22", "Giới tính" => "Nữ", "Toán" => 9.0, "Ngữ văn" => 8.5, "Tiếng Anh" => 8.0],
    ["Họ tên" => "Lê Văn C", "Ngày sinh" => "2000-07-12", "Giới tính" => "Nam", "Toán" => 7.0, "Ngữ văn" => 6.5, "Tiếng Anh" => 7.5],
    ["Họ tên" => "Phạm Thị D", "Ngày sinh" => "2002-09-30", "Giới tính" => "Nữ", "Toán" => 8.0, "Ngữ văn" => 9.0, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Hoàng Văn E", "Ngày sinh" => "2003-02-20", "Giới tính" => "Nam", "Toán" => 7.5, "Ngữ văn" => 7.0, "Tiếng Anh" => 6.5],
    ["Họ tên" => "Đặng Thị F", "Ngày sinh" => "2001-06-18", "Giới tính" => "Nữ", "Toán" => 9.5, "Ngữ văn" => 8.0, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Vũ Văn G", "Ngày sinh" => "2000-12-11", "Giới tính" => "Nam", "Toán" => 6.5, "Ngữ văn" => 7.5, "Tiếng Anh" => 7.0],
    ["Họ tên" => "Bùi Đặng H", "Ngày sinh" => "2002-05-05", "Giới tính" => "Nữ", "Toán" => 8.0, "Ngữ văn" => 7.5, "Tiếng Anh" => 8.5],
    ["Họ tên" => "Nguyễn Văn I", "Ngày sinh" => "2003-08-21", "Giới tính" => "Nam", "Toán" => 7.0, "Ngữ văn" => 6.5, "Tiếng Anh" => 7.0],
    ["Họ tên" => "Trần Thị J", "Ngày sinh" => "2001-11-09", "Giới tính" => "Nữ", "Toán" => 8.5, "Ngữ văn" => 9.0, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Nguyễn Văn K", "Ngày sinh" => "2000-10-10", "Giới tính" => "Nam", "Toán" => 7.5, "Ngữ văn" => 7.0, "Tiếng Anh" => 7.5],
    ["Họ tên" => "Lê Thị L", "Ngày sinh" => "2001-09-01", "Giới tính" => "Nữ", "Toán" => 8.0, "Ngữ văn" => 8.5, "Tiếng Anh" => 8.0],
    ["Họ tên" => "Hoàng Văn M", "Ngày sinh" => "2002-03-12", "Giới tính" => "Nam", "Toán" => 6.5, "Ngữ văn" => 7.5, "Tiếng Anh" => 7.0],
    ["Họ tên" => "Phạm Thị N", "Ngày sinh" => "2003-07-25", "Giới tính" => "Nữ", "Toán" => 9.0, "Ngữ văn" => 8.0, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Trần Văn O", "Ngày sinh" => "2000-11-30", "Giới tính" => "Nam", "Toán" => 7.0, "Ngữ văn" => 7.0, "Tiếng Anh" => 7.5],
    ["Họ tên" => "Bùi Đặng P", "Ngày sinh" => "2001-02-14", "Giới tính" => "Nữ", "Toán" => 8.5, "Ngữ văn" => 9.0, "Tiếng Anh" => 8.5],
    ["Họ tên" => "Nguyễn Văn Q", "Ngày sinh" => "2002-12-20", "Giới tính" => "Nam", "Toán" => 6.0, "Ngữ văn" => 6.5, "Tiếng Anh" => 7.0],
    ["Họ tên" => "Trần Thị R", "Ngày sinh" => "2003-06-08", "Giới tính" => "Nữ", "Toán" => 9.5, "Ngữ văn" => 8.5, "Tiếng Anh" => 9.0],
    ["Họ tên" => "Lê Văn S", "Ngày sinh" => "2000-08-22", "Giới tính" => "Nam", "Toán" => 7.0, "Ngữ văn" => 7.5, "Tiếng Anh" => 7.0],
    ["Họ tên" => "Đặng Thị T", "Ngày sinh" => "2001-05-19", "Giới tính" => "Nữ", "Toán" => 8.0, "Ngữ văn" => 9.0, "Tiếng Anh" => 8.5]
];


foreach ($students as &$student) {
    $student['Điểm TB'] = round(($student['Toán'] + $student['Ngữ văn'] + $student['Tiếng Anh']) / 3, 2);
}
unset($student);

unset($student);

usort($students, function ($a, $b) {
    return strcmp($a['Họ tên'], $b['Họ tên']);
});

$femaleStudents = array_filter($students, function ($student) {
    return $student['Giới tính'] === 'Nữ';
});

$excellentStudents = array_filter($students, function ($student) {
    return $student['Điểm TB'] >= 8.0;
});

$topFemaleStudent = null;
foreach ($femaleStudents as $student) {
    if ($topFemaleStudent === null || $student['Điểm TB'] > $topFemaleStudent['Điểm TB']) {
        $topFemaleStudent = $student;
    }
}

function printStudents($students) {
    echo "<table border='1'><tr><th>Họ tên</th><th>Ngày sinh</th><th>Giới tính</th><th>Toán</th><th>Ngữ văn</th><th>Tiếng Anh</th><th>Điểm TB</th></tr>";
    foreach ($students as $student) {
        echo "<tr><td>{$student['Họ tên']}</td><td>{$student['Ngày sinh']}</td><td>{$student['Giới tính']}</td><td>{$student['Toán']}</td><td>{$student['Ngữ văn']}</td><td>{$student['Tiếng Anh']}</td><td>{$student['Điểm TB']}</td></tr>";
    }
    echo "</table><br>";
}

echo "<h2>Danh sách sinh viên sắp xếp theo tên:</h2>";
printStudents($students);

echo "<h2>Danh sách sinh viên nữ:</h2>";
printStudents($femaleStudents);

echo "<h2>Danh sách sinh viên có điểm TB >= 8.0:</h2>";
printStudents($excellentStudents);

echo "<h2>Bạn nữ có Điểm TB cao nhất:</h2>";
if ($topFemaleStudent) {
    echo "<p>{$topFemaleStudent['Họ tên']} - Điểm TB: {$topFemaleStudent['Điểm TB']}</p>";
} else {
    echo "<p>Không có nữ sinh nào trong danh sách.</p>";
}

?>