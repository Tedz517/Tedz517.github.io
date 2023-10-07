<?php
$nilai_tm = 85;
$nilai_uts = 85;
$nilai_uas = 90;

$bb_tm = 0.2;
$bb_uts = 0.3;
$bb_uas = 0.5;

$nilai_akhir = ($nilai_tm * $bb_tm) + ($nilai_uts * $bb_uts) + ($nilai_uas * $bb_uas);

echo "Nilai Akhir Mahasiswa: $nilai_akhir";
