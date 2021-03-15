<?php

// Aici v-a aparea mesajul daca s-a logat cu succes

session_start();

echo $_SESSION['user'] . ",te-ai logat cu succes!";
