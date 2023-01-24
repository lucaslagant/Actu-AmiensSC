<?php
define("REGEX_NO_NUMBER", "/[A-Za-z-éèêëàâäôöûüç' ]+$/");
define("REGEX_EMAIL","/^[[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-.]?[[:alnum:]])*\.([a-z]{2,4})$/");
define("REGEX_PASSWORD","/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/");
// Mot de passe pour avoir : au moins un nombre , une lettre , caractéres spéciaux , et avoir mini 8 caratéres
?>