# web_monitor (dev)
---
## Dependency
 - composer (https://getcomposer.org/)
 - lumen (https://lumen.laravel.com/docs/5.4)
 - bootstrap (http://getbootstrap.com/docs/4.0/getting-started/introduction/)
 - charjs (http://www.chartjs.org/)
---
fix composer autoload dependency
```
composer update --no-scripts  
```
start up / reset container
```
docker-compose -f docker/docker-compose.yml up --build --force-recreate
```
