
# Armonic Standalone

You have all information in [Armonic Docs](https://armonic.softspring.es/latest/install-armonic-standalone)



composer update
docker compose up -d
bin/console doctrine:migrations:migrate -n
symfony server:ca:install
symfony server:start 

bin/console sfs:user:create username your@email.com password
bin/console sfs:user:promote your@email.com

Open https://localhost:8000/admin/es/
