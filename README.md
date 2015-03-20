branches:
- master
- newbranch1
- newbranch2

$ curl -LsS http://symfony.com/installer > symfony.phar
$ sudo mv symfony.phar /usr/local/bin/symfony
$ chmod a+x /usr/local/bin/symfony

$ composer create-project symfony/framework-standard-edition Adaptation_Symfony

$ git init
$ git addd .
$ git commit -m "Initial commit"

$ HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
$ sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
$ sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs

$ php app/console cache:clear

$ php app/console generate:bundle --namespace=JK/CommonBundle --format=yml

$ php app/console doctrine:schema:update --force

