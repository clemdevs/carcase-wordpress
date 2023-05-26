# Custom Theme with Wordpress

# Setup
- Clone the repo using the command ``git clone --recurse-submodules https://github.com/clemdevs/carcase-wordpress.git``
- See `.env-example` for database configuration and login credentials.
- Setup virtualhost 

`hosts.txt`
```hosts.txt
127.0.0.1 localhost
127.0.0.1 carcase.localhost
```

`xampp/etc/conf/extra/httpd-vhosts`
```xampp/etc/conf/extra/httpd-vhosts
<VirtualHost *:80>
	DocumentRoot C:\xampp\htdocs\CarCase\www
	ServerName carcase.localhost
</VirtualHost>
```

- In the theme's folder `wp-content/themes/carcase`, run the following commands:
  - `npm install` 
  - `npm audit fix`
  - `npm run watch`
- Run the same commands for `wp-content/themes/carcase-child`


### In Wordpress admin panel
- Go to `Settings -> Permalinks` and hit `Update` to update the permalinks
- Make sure that the child theme is selected as the active theme (by default it should be active)
