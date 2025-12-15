<?php
// Trả về JSON
header('Content-Type: application/json');

// Danh sách bài tập giả lập
$tasks = [
    ['name' => 'Báo cáo Git & GitHub', 'status' => 'Xong'],
    ['name' => 'Cấu hình CI/CD Hosting', 'status' => 'Xong'],
    ['name' => 'Thuyết trình nhóm', 'status' => 'Chưa'],
    ['name' => 'Nộp bài cuối kỳ', 'status' => 'Chưa']
];

// Dữ liệu trả về
$response = [
    'server_status' => 'Hoạt động tốt (Online)',
    'tasks' => $tasks
];

echo json_encode($response);
?>