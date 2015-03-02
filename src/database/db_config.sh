export DEBIAN_FRONTEND=noninteractive
apt-get -q -y install mysql-server
mysql -u root -Bse "create database DATABASE_NAME;"
cd ../src/database
mysql -u root combustionandautomization mysql.sql
