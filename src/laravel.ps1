switch ($args[0]) {
    "init" { 
        ./scripts/installation/install.ps1
     }
     {$_ -in "c","compile"} {
         yarn run development
         break
     }
     {$_ -in "db", "database"} {
         php artisan migrate:fresh
         break
     }
     {$_ -in "t", "test"}{
        ./vendor/bin/phpunit --coverage-html tests/Coverage
        Write-Output "Opening code coverage report..."
        Start-Sleep -s 3
        Start-Process ".\tests\Coverage\index.html"
        break
     }
     "coverage" {
        Start-Process ".\tests\Coverage\index.html"
        break
     }
    Default {
        php artisan $args
    }
}