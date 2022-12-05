# yourls-sqlite-docker
An easy to use and full customizable dockerfile for yourls+sleeky+sqlite

# credits
- YOURLS: https://github.com/YOURLS/YOURLS
- yourls-sqlite: https://github.com/Flameborn/yourls-sqlite

# usage
1. apply write priviledge to `/yourls/user` folder with `chmod 777 yourls/user/ -R` so that the new sqlite database can be created.
2. add your domain name to `conf/yourls.conf` file
3. customize your yourls in `yourls/user/config.php` file with yourls official instructions https://docs.yourls.org/
4. change the port you wish to expose in `docker-compose.yml`
5. run `docker compose up -d` to bring up the container

# What's new
* Sleeky front and backend is integrated
* 302 Found is used over the default 301 so that every click can be tracked and you have the freedom to change the destination at any time.
* The login page bug in sleeky backend is fixed.
* Everything in sqlite. No more mysql. 
* Searching functionality is fully working.
* Indexes are created for sqlite dbs, so that it is performant.
