# Test Work #

### Getting started
Install the following packages prior to standing up your development environment:

- [Git](https://git-scm.com/)
- [docker](https://docs.docker.com/engine/installation/)
- [docker-compose](https://docs.docker.com/compose/install/)

Set your .env vars and then type:
```
git clone <this_repo>
docker-compose up -d
docker-compose exec app composer install
```
## Usage

To start your containers you have only type next command:
```
make docker-up
```

After start Docker you must visit ``http://localhost:8080`` page to start.

## Testing project

To start test  you have only type next command:
```
make test

```

## Another answers in this link: 
- [Answer](https://github.com/vladkudinov89/MindConnectTestWork/blob/master/answers.md)