# SimpleMonitoring
***Its a simple server monitoring app with php and bash script***


***(run all of this commnds with root user)*** <br />
sudo su - <br />
apt update <br />
apt upgrade -y <br />
<br />
#To install webservice with php :  <br />
apt install tasksel -y <br />
tasksel install lamp-server <br />
apt install sysstat <br />
<br />
#To install monitoring boxes : <br />
apt install boxes <br />
rm -r /var/www/html/* <br />
chmod +x bash_script.sh <br />
mv bash_script.sh monitoring.php index.php /var/www/html/ <br />

<br />
![monitoring](https://user-images.githubusercontent.com/20085529/163727358-adae0daf-89c4-4bd2-ae69-d0be2520f04d.jpg)

<br />
<br />
***If you cant see the resault on http://localhost (you server ip)*** <br />
<br />
Firewall: <br />
In ubuntu you can use ufw <br />
ufw enable <br />
ufw status <br />
ufw allow http <br />
ufw status <br />

If you had any problem can contact me: pooyan.azadparvar@gmail.com
