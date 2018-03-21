# Steem-Power-calculator-and-delegator-on-PHP-STEEM - Ubuntu 16.04

This is a PHP/HTML code fo STEEM Blockchain used for:

- Create your Site to Rent Steem Power for your Bid Bot
- Permit users to delegate Steem Power on your Bot
- Permit eveyone to check who is delegating Vest and how Much

If you have a Bid Bot and need more delgation you can use a PHP site to permit user for doig it. You can also give users the possibility to see who is delegating SP


REQUIREMENT:

- Install Apache2 mpodules
- Install php modules
- Install Python 3

APACHE2:

sudo apt-get update
sudo apt-get install apache2
sudo ufw allow 'Apache Full'
sudo systemctl status apache2
sudo systemctl enable apache2

PHP:

sudo apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip
sudo systemctl restart apache2.service

PYTHON3:

sudo add-apt-repository ppa:jonathonf/python-3.6
sudo apt update
sudo apt install python3.6

USAGE:

Copy files into folder /var/www/html/index.php and edit index.PHP as you need
