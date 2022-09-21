#!/bin/bash
echo "Apache2 provisioning - begin"

#install apache
sudo apt-get install apache2 php libapache2-mod-php php-mysql -y 

#enable mod_rewrite
sudo a2enmod rewrite 

#start apache
sudo service apache2 restart 

echo "Apache2 provisioning - end"