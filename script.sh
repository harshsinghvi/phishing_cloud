# sudo docker stop phishing-tg 
# sudo docker rm phishing-tg 
# docker run --name phishing-tg -d -p 80:80 -p 443:443 -v $PWD/src:/var/www/html/ insomniaccoder/phishing:instagram
echo "Hello World !!"