# Running a Web Application in AWS EC2 instance
## Requirements
- Docker
- Git
- MySQL 5.7
- PHP 7
- PHP PDO Module
### Create an EC2 instance with Ubuntu AMI
### SSH to the EC2 instance
### Get the superuser access
`sudo su`
### Update the system
`apt-get update -y`
### Install Docker
`apt install docker.io -y`
### Install Git
`apt-get install git`
### Clone the Repository
`git clone https://github.com/biancadenise12/sample-php-master.git`
### Install MySQL 5.7
`docker run -d -p 6033:3306 -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=dxc -e MYSQL_USER=user -e MYSQL_PASSWORD=pass --name mysql --restart always mysql:5.7`
### Modify db.php
### Go inside mysql container and execute db.sql
`docker exec -i mysql mysql -uuser -ppass < db.sql`
### Install PHP from a docker image and link to mysql container
`docker run -d -p 80:80 --name php --restart always -v /home/ubuntu/sample-php-master:/var/www/html --link mysql:dxc geronimomark/dxcweb:1.0`
### Other notes:
- When you create an Image of this instance and you want to run another instance using the created AMI, add the following to user data if you want to auto start docker
```
#!/bin/bash
sudo service docker start
```
