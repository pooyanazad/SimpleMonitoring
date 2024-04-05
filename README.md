# SimpleMonitoring
***Its a simple server monitoring app with php and bash script***


***(run all of this commnds with root user)*** <br />
```bash
sudo su - 
apt update
apt upgrade -y
```
#To install webservice with php :  <br />
```bash
apt install tasksel -y
tasksel install lamp-server
apt install sysstat
```
#To install monitoring boxes : <br />
```bash
apt install boxes
rm -r /var/www/html/*
chmod +x bash_script.sh
mv bash_script.sh monitoring.php index.php /var/www/html/
```
![Monitoring](https://user-images.githubusercontent.com/20085529/163727358-adae0daf-89c4-4bd2-ae69-d0be2520f04d.jpg)
<br />
If you cant see the resault on http://localhost (you server ip)
<br />
Edit firewall: <br />
In ubuntu you can use ufw <br />
```bash
ufw enable
ufw status
ufw allow http
ufw status
```
If you had any problem can contact me: pooyan.azadparvar@gmail.com
