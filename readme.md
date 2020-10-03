# E-Banking Log System

The E-Banking Log system that’s make it easy to deal with your account in Bank form of banking in which funds are
transferred electronically between financial institutions instead of cash, checks, or other negotiable instruments
being physically exchanged.
In our bank, the admin can add any user to system by adding its information and can also delete any user , the admin
also can view the user details that provided when the user added to the system like his first name, username, ... see
their full information and see their feedback about the bank.
### All diagrams exist in screenshots/diagram folder, diagrams like ( ERD - Class Diagram) for both sprints 1 and 2.
### Trello board screens also exist in the same folder.
## Disclaimer

Please run the following code before running the system.

```bash
composer update
copy .env.example .env
php artisan cache-clear
php artisan key:generate
php artisan migrate
```


## Usage
to login as ADMIN:
 
* Email: admin@gmail.com.
* password:123456.

to login as USER:
 
* Email: user@gmail.com.
* password:123456.
