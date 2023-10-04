<?php
session_start();
session_destroy();
session_reset();
echo  "<script>alert('Enviado com Sucesso!);</script>";
header("Location: index.html");
