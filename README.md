
# Is It On Netflix (IION)
[![MPL2.0 License](https://img.shields.io/badge/license-MPL%202.0-blue.svg)](https://github.com/rico-vz/isitonnetflix/blob/main/LICENSE)

A  Laravel Project using uNoGS API to find if something is on available Netflix. This project has been made for me to practice & learn more about Laravel and PHP in general. 

This project is currently still a work-in-progress. More features & improvements will be pushed over time.
Updates might take a little time as this is just a side-project which I work on from time to time. I don't use Netflix so I purely work on this because I enjoy using & learning the Laravel Framework.


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DISCORD_WEBHOOK_URL` Used for reporting if a backup fails.

`APILAYER_KEY` uNoGS APILayer key to actually gather to data of the searched query. 

There is a .env.example provided.
## Features

- Home, Search, Result & About page
- Search by using the uNoGS API
- Sorting results using Levenshtein string metric


## Run Locally

Clone the project

```bash
  git clone git@github.com:rico-vz/isitonnetflix.git
```

Go to the project directory

```bash
  cd isitonnetflix 
```

Install dependencies

```bash
  npm install
  composer update
  php artisan key:generate
```

Start the server

```bash
  php artisan serve
```


## Roadmap

- Infopage per movie displaying things such as available regions, description of the movie, imdb rating, etc

- Search by specific region

- Code refactor/cleanup

- Cache results

- Actually host isitonnetflix
