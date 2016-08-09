
DIRECTORY STRUCTURE
-------------------
common
    config/                     contains shared configurations
        bootstrap.php           set aliases for config files
        main.php                store global settings of application
        main-local.php          store common settings of application only on current machine
                                exclude from the repo
        main-local-sample.php   sample settings for the machine which runs the application
                                this file for generating main-local.php
        params.php              store global params of application
        params-local.php        store global params of application only on current machine
                                exclude from the repo
        params-local-sample.php sample params for the machine which runs the application
                                this file for generating params-local.php

    mail/               contains view files for e-mails (templates for send email to users)
    models/             contains model classes used in both backend and frontend
                            model classes here extended from base model
        base/               contains basic model classes for all ActiveRecords
                            do not manually update these files, generated using Code generator
    widgets/            widgets used for both frontend, backend

console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
        main.php                store global settings of backend
        main-local.php          store common settings of backend only on current machine
                                exclude from the repo
        main-local-sample.php   sample settings for the machine which runs the backend
                                this file for generating main-local.php
        params.php              store global params of backend
        params-local.php        store global params of backend only on current machine
                                exclude from the repo
        params-local-sample.php sample params for the machine which runs the backend
                                this file for generating params-local.php

    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```

