<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Demo Dashboard Data Historis SDY</title>
<style>body{font-family:system-ui,sans-serif;max-width:820px;margin:2rem auto;padding:0 1rem;color:#222}table{border-collapse:collapse;width:100%}th,td{border:1px solid #ddd;padding:.7rem;text-align:left}th{background:#f7e4d4}.notice{background:#fff5e9;padding:1rem;border-radius:8px}#status{color:#555}</style>
</head><body><h1>Dashboard Data Historis — Demo</h1>
<p class="notice">Angka di bawah adalah <strong>data simulasi</strong> untuk demonstrasi teknis, bukan hasil resmi.</p>
<p id="status" role="status" aria-live="polite">Memuat data...</p>
<table><thead><tr><th>Tanggal</th><th>Periode</th><th>Angka simulasi</th></tr></thead><tbody id="results"></tbody></table>
<script src="/assets/app.js" defer></script></body></html>
