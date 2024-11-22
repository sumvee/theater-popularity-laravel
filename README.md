<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Installation
- Install [Docker](https://docs.docker.com/engine/install/)
- Install DDEV
    - See link [DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) for step by step instructions
- Run commands
```sh
		# clone repo
		git clone https://github.com/sumvee/theater-popularity-laravel.git
		
		cd theater-popularity-laravel
		
		# start ddev, this can take some time on first run
		ddev start
		
		# ssh to container
		ddev ssh
		
		# run composer install from inside container
		composer install
		
		# Run migrations and seed database from inside container
		php artisan migrate --seed
		
		# exit container
		exit
		
		# run npm install
		npm install
		
		# npm dev
		npm run dev
		
		# confirm installation details
		ddev describe
		# Click on web url in output
		# e.g. https://theater-popularity-laravel.ddev.site:33000

		# to stop
		ddev stop

		# to restart
		ddev restart

		
```
- In Browser
    - Register
    - Browse to Tab
        - Popular Theater
            - Select Date in drop down
            - Search
                - It will display popular theater for that date (only one theater will be displayed)
                - If no theater is available, it will display a list of available dates

## Schema
 - Point browser to /schema/

## License

The is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
