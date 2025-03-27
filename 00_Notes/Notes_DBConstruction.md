# DB Construction Notes

## Steps
- Postgres are running with the Postgresql service GUI (not the homebrew CLI as that conflicts... These are two different services)
- I am using PGAdmin to test activity within the DB.  PHP Storm can do the same, so this is redundant and I will probably remove it from my workflow.
- Created a PG Server called "Wizarding_Servers" and put the details in the PWM.
- Using the following to create the Main DB (with pgadmin).  See PWM for access details.

```psql

CREATE DATABASE wizards_db
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;
    
```

- Create a dev SUser

```psql
CREATE ROLE smash WITH
	NOLOGIN
	SUPERUSER
	CREATEDB
	CREATEROLE
	INHERIT
	NOREPLICATION
	CONNECTION LIMIT -1
	PASSWORD 'xxxxxx';
COMMENT ON ROLE smash IS 'dev';
```

### Inside PHPStorm

- Update the .env file

```text
DB_CONNECTION=pgsql
 DB_HOST=127.0.0.1
 DB_PORT=5432
 DB_DATABASE=db_name
 DB_USERNAME=user_name
 DB_PASSWORD=db_password
```

- You will get an error, but it is good as long as its not a "db connection error."  The error we want is one that says that a table cannon be found.  This is because we haven't run the migration yet.
- You can use `php artisan tinker` to see if you can access the table
- Run the migrate command with `php artisan migrate`
