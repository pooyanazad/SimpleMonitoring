# SimpleMonitoring
Its a simple web base server monitoring application :<br />
```bash
git clone https://github.com/pooyanazad/SimpleMonitoring.git
docker build -t my-monitoring-app .
docker run -p 8080:80 -d my-monitoring-app
```
***OR:*** <br />
Run container directly : <br />
```bash
docker run -p 8080:80 -d pooyanazad/my-php-monitoring-app:latest
```
You can reach the app on your IP:8080 like below<br />
<br />
![Monitoring](https://github.com/pooyanazad/SimpleMonitoring/blob/main/imageOfMonitoring.JPG)

