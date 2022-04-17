# SimpleMonitoring
***Its a simple server monitoring app with php and bash script***



run all of this commnds with root privilege <br />
sudo su - <br />
apt update <br />
apt upgrade -y <br />
sudo apt install tasksel -y <br />
sudo tasksel install lamp-server <br />
rm var/www/html/* <br />
mv bash_script.sh monitoring.php index.php /var/www/html/ <br />



***If you cant see the resault on http://localhost (you server ip)*** <br />
Firewall: <br />
In ubuntu you can use ufw <br />
ufw enable <br />
ufw status <br />
ufw allow http <br />
ufw status <br />

