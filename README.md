# Database extractor logger
Simple PHP class for logging

## Usage
Require with composer:

```yml

    composer require keboola/db-extractor-logger

```

## Development

Clone this repository and init the workspace with following command:
```
    git clone git@github.com:keboola/db-extractor-logger.git
    cd db-extractor-logger
    docker-compose build
    docker-compose run --rm dev composer install --no-scripts
```

Run the test suite using this command:
```
    docker-compose run --rm dev composer tests
```

## License

MIT licensed, see [LICENSE](./LICENSE) file.
