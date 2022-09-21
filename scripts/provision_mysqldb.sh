#!/bin/bash

DBNAME=vagrant
DBUSER=vagrant
DBPASSWD=vagrantpass

echo "Creating new db $DBNAME"
sudo mysql -u root -e "CREATE DATABASE $DBNAME"
sudo mysql -u root -e "CREATE TABLE PROVA(ID INT PRIMARY KEY);"
sudo mysql -u root -e "CREATE USER '$DBUSER'@'%' IDENTIFIED BY '$DBPASSWD';"
sudo mysql -u root -e "grant all privileges on $DBNAME.* to '$DBUSER'@'%'"