## DEMO BLOG with NodeJS
================

Start with the repo:
```bash
$ git clone https://github.com/fingerman/softwareTechnologies.git
```
##### NodeJS Demo Blog:
```
$ cd express/blog-nodejs/
$ npm install
```
Start your DB connection:
* open the file start-mongodb.bat via the Explorer
* I use Robo to connect to DB. So just made the connection.  
 
Note that in order to use command line you should have all 
environment variables set or if not, you should run the command line 
from the place where mongod.exe is (“C:\Program Files\MongoDB\Server\3.0\bin” 
- the version after server might be different – instead of 3.0 to 3.2, 
but the path is relatively the same). Also you should your MongoDB 
connection open (“mongod –dbpath D:\example\path” command).
   
The server runs on port 3000. Change it from the **www** folder  
To run the server just run **bin/www**. For this your IDE should be configured to 
run NodeJS. In WebStorm, Idea and PHPStorm just start new _Node.js Express App_  
