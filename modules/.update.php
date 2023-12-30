<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m



   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mTrack IPLocation\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating Lacak-ip.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/github.com/Felyxh/lacak-ip");
  system("cd ~/ && sudo git clone https://github.com/Felyxh/lacak-ip");
  system("cd ~/lacak-ip && sh install");
  logo();
  echo "\n\033[01;32m              Lacak-ip updated !!!\033[01;37m\n";
  sleep(1);
}
upd();
?>
