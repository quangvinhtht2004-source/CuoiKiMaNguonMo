<?php
// Thiết lập header để trả về JSON
header('Content-Type: application/json');

// Mảng chứa các điểm cao mô phỏng
$high_scores = array(
    array('name' => 'VINH', 'score' => rand(80000, 99999)),
    array('name' => 'ALX', 'score' => rand(50000, 79999)),
    array('name' => 'DEV', 'score' => rand(30000, 49999)),
    array('name' => 'USER', 'score' => rand(10000, 29999)),
);

// Sắp xếp lại (từ cao xuống thấp)
usort($high_scores, function($a, $b) {
    return $b['score'] <=> $a['score'];
});

$system_data = array(
    'server_status' => 'ONLINE',
    'timestamp' => date('Y-m-d H:i:s'),
    'game' => 'Cyber Pong',
    'scores' => $high_scores
);

// Chuyển mảng PHP thành chuỗi JSON
echo json_encode($system_data);
?>