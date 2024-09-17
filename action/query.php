<?php
include_once('conn.php');

$paciente = mysqli_query($conn, "SELECT id, nome_comp, data_nasc, cpf, diag, presc, cuidados FROM medcare.paciente
WHERE excluido = 0 ORDER BY id DESC");
