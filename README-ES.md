[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/softspring/symfonic-standalone/blob/5.4/README.md)
[![es](https://img.shields.io/badge/lang-es-yellow.svg)](https://github.com/softspring/symfonic-standalone/blob/5.4/README-ES.md)

# Symfonic Standalone

## Descripción
Symfonic Standalone es una excelente manera de sumergirte en el mundo de [Symfonic](https://github.com/softspring/symfonic). Con una configuración rápida y sencilla, podrás tener un entorno de desarrollo local
completamente funcional en minutos.

## Instalación
1. Clona este repositorio:
```bash
    git clone https://github.com/softspring/symfonic-standalone
```
2. Instala las dependencias: 
   1. [Symfony CLI](https://symfony.com/download):
    ```bash
    curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
    sudo apt install symfony-cli
    ```
   2. [Docker](https://docs.docker.com/get-docker/):
    ```bash
    sudo apt install docker.io
    ```
   3. PHP
    ```bash
    sudo apt install php-cli 
    sudo apt install php-cgi
    sudo apt install php-mysql
    ```
   4. Composer
    ```bash
    sudo apt install composer
    ```
   5. NPM
    ```bash
    sudo apt install npm
    ```
3. Levanta los contenedores
```bash
  docker compose up -d --force-recreate
```
4. Inicia el servidor de Symfony
```bash
  symfony server:ca:install
  symfony server:start -d
```
5. Ejecuta las migraciones
```bash
  bin/console doctrine:migrations:migrate -n
```
6. Instala las dependencias de front-end
```bash
  npm install
  npm run dev
```
7. Crea un usuario de prueba. En este caso, el usuario es "admin", el email es "email@example.com" y la contraseña es "admin".
```bash
  bin/console sfs:user:create admin email@example.com admin
  bin/console sfs:user:promote email@example.com 
```

## Uso
1. Abre tu navegador y ve a https://127.0.0.1:8000/app/es/login
Logueate con el email y la contraseña que creaste en el paso anterior.
2. ¡Listo! Ya puedes empezar a trabajar con Symfonic Standalone en https://127.0.0.1:8000/admin/es/


## Contribuciones
¡Las contribuciones son bienvenidas! Por favor, abre un issue antes de enviar un pull request.


