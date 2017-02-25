<?php
include 'includes/config.php';
session_start();
session_destroy(); //destruimos a sessão
session_unset(); //limpamos as variaveis globais das sessões

echo "<script>alert('Voce saiu!');top.location.href='index.php';</script>"; 





?>