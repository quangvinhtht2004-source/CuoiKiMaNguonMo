<?php
// Thiết lập header để trả về JSON
header('Content-Type: application/json');

// Mảng chứa các nhiệm vụ/bài tập của sinh viên
$student_tasks = array(
    array('name' => 'Complete Git/CI/CD Assignment', 'status' => 'Completed'),
    array('name' => 'Review Database Concepts', 'status' => 'Pending'),
    array('name' => 'Prepare Presentation Slides', 'status' => 'Pending'),
    array('name' => 'Submit Final Project Proposal', 'status' => 'Completed'),
);

// Dữ liệu trạng thái hệ thống
$system_data = array(
    'server_status' => 'ONLINE',
    'timestamp' => date('Y-m-d H:i:s'),
    'tasks' => $student_tasks
);

// Chuyển mảng PHP thành chuỗi JSON
echo json_encode($system_data);
?>