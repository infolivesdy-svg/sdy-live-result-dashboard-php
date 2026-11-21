<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
// Data sintetis khusus demo; jangan tampilkan sebagai hasil resmi.
$data = [
  ['date' => '2026-01-03', 'period' => 'DEMO-003', 'number' => '482731'],
  ['date' => '2026-01-02', 'period' => 'DEMO-002', 'number' => '016294'],
  ['date' => '2026-01-01', 'period' => 'DEMO-001', 'number' => '750183'],
];
echo json_encode(['kind' => 'demo', 'updated_at' => gmdate('c'), 'results' => $data], JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
