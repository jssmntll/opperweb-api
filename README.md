# Opperweb API Demo

### Steps to follow

-   Clone the repository
-   Go to the folder where the repository was cloned
-   Install the dependencies with composer install
-   You must copy the .env.example file to .env
-   You must run the following command php artisan key:generate to generate the APP_KEY
-   You must create the database.sqlite in the database directory of the project
-   Then you must run the migrations with php artisan migrate
-   Next, you must run php artisan db:seed command to generate test data
-   After all the steps are complete you need to run the app with php artisan serve and test it.

### STACK

| TECHNOLOGY        | VERSION  |
| ----------------- | -------- |
| PHP               | 8.3      |
| Laravel/framework | 11.31    |
| sqlite            | 3.40     |

### API Endpoints

| URI                                 | METHOD | DESCRIPTION                                         |
| ----------------------------------- | ------ | --------------------------------------------------- |
| api/competitions/athletes           | GET    | Get all athletes stored in db                        |
| api/competitions/athlete/$id/start  | POST   | An athlete is marked as starting swimming           |
| api/competitions/athlete/$id/finish | PUT    | An athlete is marked as finished swimming           |
| api/competitions/leaderboard        | GET    | Get all athletes that have finished the competition |

#### REPOSITORY ↗️

https://github.com/jssmntll/opperweb-api.git
