# SimpleMonitoring
Its a simple web base server monitoring app with php and bash script<br />
clone the session:<br />
```bash
git clone https://github.com/pooyanazad/SimpleMonitoring.git
```
Pull image:<br />
```bash
docker pull yourusername/my-php-monitoring-app:latest
```
Run container: <br />
```bash
docker run -p 8080:80 -d yourusername/my-php-monitoring-app:latest
```
You can reach the app on your IP:8080<br />
<br />
![Monitoring](https://github.com/pooyanazad/SimpleMonitoring/blob/main/imageOfMonitoring.JPG)
<br />
Edit firewall if needed: <br />
In ubuntu you can use ufw <br />
```bash
ufw enable
ufw status
ufw allow http
ufw status
```
