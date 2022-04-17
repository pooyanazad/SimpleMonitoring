# SimpleMonitoring
Its a simple server monitoring app with php and bash script



run all of this commnds with root privilege
sudo su -
apt update
apt upgrade -y
sudo apt install tasksel -y
sudo tasksel install lamp-server
rm var/www/html/*
mv bash_script.sh monitoring.php index.php /var/www/html/



If you cant see the resault on http://localhost (you server ip)
Firewall:
In ubuntu you can use ufw
ufw enable
ufw status
ufw allow http
ufw status
