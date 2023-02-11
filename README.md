# Tune Easy Anne Once

## Installation

First of all, you need to install Docker. You can follow [https://docs.docker.com/engine/install/ubuntu/](this guide).

Then, you need to clone this project, put it somewhere and perform the setup. Example:

```
sudo mkdir -p /var/www/html
cd /var/www/html
sudo git clone https://github.com/mohamedaymenkarmous/tune-easy-anne-once
cd tune-easy-anne-once
sudo chmod +x setup.sh
sudo chmod +x entry.sh
sudo chmod +x start.sh
./setup.sh
sudo docker ps -a
```

When you find the docker container `teao` is running, you can access it from your web browser as follow: http://YOUR_IP_ADDRESS:54344

If you want to 
