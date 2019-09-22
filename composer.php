{
    "name": "longman/telegram-bot",
    "type": "library",
    "description": "PHP Telegram bot",
    "keywords": ["telegram", "bot", "api"],
    "license": "MIT",
    "homepage": "https://github.com/php-telegram-bot/core",
    "support": {
        "issues": "https://github.com/php-telegram-bot/core/issues",
        "source": "https://github.com/php-telegram-bot/core"
    },
    "authors": [
        {
            "name": "Avtandil Kikabidze aka LONGMAN",
            "email": "akalongman@gmail.com",
            "homepage": "http://longman.me",
            "role": "Developer"
        },
        {
            "name": "PHP Telegram Bot Team",
            "homepage": "https://github.com/php-telegram-bot/core/graphs/contributors",
            "role": "Developer"
        }
    ],
    "require": {
        "php": "^5.5|^7.0",
        "ext-pdo": "*",
        "ext-curl": "*",
        "ext-json": "*",
        "ext-mbstring": "*",
        "psr/log": "^1.1",
        "monolog/monolog": "^1.24",
        "guzzlehttp/guzzle": "^6.3"
    },
    "require-dev": {
        "phpunit/phpunit": "^4.8|^5.7|^6.5|^7.5|^8.1",
        "squizlabs/php_codesniffer": "^3.4"
    },
    "autoload": {
        "psr-4": {
            "Longman\\TelegramBot\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Longman\\TelegramBot\\Tests\\Unit\\": "tests/unit"
        }
    },
    "scripts": {
        "check-code": [
            "\"vendor/bin/phpcs\" -snp src/ tests/"
        ],
        "test": [
            "\"vendor/bin/phpunit\""
        ],
        "test-cov": [
            "\"vendor/bin/phpunit\" --coverage-clover clover.xml"
        ],
        "test-cov-upload": [
            "wget https://scrutinizer-ci.com/ocular.phar && php ocular.phar code-coverage:upload --format=php-clover clover.xml"
        ]
    }
}
