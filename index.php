<?php
@require_once 'Employee.php';

$user_1 = new User('Pippo','Rossi','cen7dcuc88');
var_dump($user_1);
try {
    echo $user_1->sconto_abbonamento;
} catch (Exception $e) {
    echo $e->getMessage();
}