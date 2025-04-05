# Processmaker Files
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/files.git
cd files
php rename-project.php files
composer install
npm install
npm run dev
```

## Installation
* Use `composer require BPMNmaker/files` to install the package.
* Use `php artisan files:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Files Package` from the administrative sidebar

## Uninstall
* Use `php artisan files:uninstall` to uninstall the package
* Use `composer remove BPMNmaker/files` to remove the package completely
