#Setting up the development environment

 - The simplest way to setup the development environment is to download and configure [Homestead](http://laravel.com/docs/4.2/homestead)
 
 Below is how a sample yaml file looks in my local dev env.
 
 ~~~
 ---
 ip: "192.168.10.10"
 memory: 2048
 cpus: 1
 
 authorize: ~/.ssh/id_rsa.pub
 
 keys:
     - ~/.ssh/id_rsa
 
 folders:
     - map: /path/to/project/DigitalLagos
       to: /home/vagrant/Code
 
 sites:
     - map: homestead.app
       to: /home/vagrant/Code/public
 
 databases:
     - homestead
 
 variables:
     - key: APP_ENV
       value: local
~~~

- Ensure you update your /etc/host file to point the ip to homestead.app or what ever fits.
- Make sure to copy the app/config/database.php to app/config/local/database.php and add the local database 
connection information.

### Notes / TODO

- Prev developer haven't maintained migrations for the database which is a headache. 
- Code doesn't follow SOLID principles 
- No abstraction of interfaces present. 
