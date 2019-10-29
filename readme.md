
# Answer's Gang [![Open Source Love svg1](https://camo.githubusercontent.com/d41b9884bd102b525c8fb9a8c3c8d3bbed2b67f0/68747470733a2f2f6261646765732e66726170736f66742e636f6d2f6f732f76312f6f70656e2d736f757263652e7376673f763d313033)](https://github.com/ellerbrock/open-source-badges/) [![PyPI license](https://camo.githubusercontent.com/105401a5eb379c5331aa32033a4b4b37aeb10b81/68747470733a2f2f696d672e736869656c64732e696f2f707970692f6c2f616e7369636f6c6f72746167732e737667)](https://pypi.python.org/pypi/ansicolortags/)

Answer's Gang is an open source question and answer web app made with Laravel and MySQL.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To be able to run the project on your system you should have: *Git *PHP v7.3.5+ Mysql v14.14+ *Node v8.12.0+ *NPM v6.4.1+ *Composer v1.8.6+

Note: you might be able to run the project on older versions than versions mentioned above but to avoid any issues we recommend you to use the recommended versions

### Installation

A step by step series of examples that tell you how to get a development env running

```
1. Clone gitHub repo:
    git clone https://github.com/ahmed-osama-iv/Answers-Gang.git

2. For next steps you have to change your currend directory to the project directory by running:
    cd Answers-Gang

3. To install project dependencies:
    composer install
    npm instal

4. To be able to run the project:
     *Take a copy of .env.example file and name it .env or by running: cp .env.example .env
     *Edit .env file and fill your DB_ host credentials.
     *Migrate project's DB tables to your DB by running: php artisan migrate 
     *Set a key for Laravel's encrypter by running: php artisan key:generate
     *Create a link to Storage folder by running: php artisan storage:link

5. Finally to run the project:
    php artisan serve

```

## Built With

-   [Laravel](https://laravel.com/docs/5.8) - Web Framework For PHP
- MySQL[enter link description here](https://github.com/ihabTawffiq)
-   [Vue](https://vuejs.org/) - UI Framework

## Authors

-   **[Ahmed Osama](https://github.com/ahmed-osama-iv)** - Backend development
-   **[Mohamed Anwar](https://github.com/2019mohamed)** - Backend development
-    **[Omar Nasr](https://github.com/O-Nasr)** - Backend development
-    **[Ihab Tawffiq](https://github.com/ihabTawffiq)** - Frontend development

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/Abdullahalabd/Simple/blob/master/LICENSE) file for details
