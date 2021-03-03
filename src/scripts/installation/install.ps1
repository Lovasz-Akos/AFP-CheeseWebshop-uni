$choices  = '&Yes', '&No'

if (Get-Command "choco" -errorAction SilentlyContinue) {
    Write-Output 'Chocolatey is already installed. Continue...'
    $choco = $true
}else {
    $decision = $Host.UI.PromptForChoice('Do you want to install Chocolatey?', '', $choices, 0)
    if ($decision -eq 0) {
        Set-ExecutionPolicy Bypass -Scope Process -Force
        [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072
        Invoke-Expression ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))
        $choco = $true
        Clear-Host
        Write-Host "Chocolatey installed" -ForegroundColor Green    
    }
}

if (Get-Command "php" -errorAction SilentlyContinue) {
    $phpVersion = php -r 'echo PHP_MAJOR_VERSION;'
    if($phpVersion -eq 8){
        Write-Output 'PHP version 8 is already installed. Continue...'
        $php8 = $true
    }else{
        Write-Host "ERROR: You are using php$phpVersion but some features require php8." -ForegroundColor Red
        Write-Host "- If you don't have xampp installed you should install it first" -ForegroundColor Yellow
        Write-Host "- If you have xampp installed check if your PATH contains the correct php folder (default: C:/xampp/php)" -ForegroundColor Yellow
        Write-Host "- If your PATH has the correct php folder then your XAMPP is outdated. Since update is not possible you should create a backup of the htdocs folder than uninstall xampp, and finally install the newest version." -ForegroundColor Yellow
        read-host “Press ENTER to exit...”
        exit
    }
}else {
    if(Test-Path -Path "C:\xampp"){
        Write-Host "Your path does not contains your php folder. Fixig it." -ForegroundColor Yellow
        [Environment]::SetEnvironmentVariable("Path", $env:Path + ";C:\xampp\php", "Machine")
        Write-Host "- Your PATH variable has been modified. Please reboot your computer and rerrun this script." -ForegroundColor Yellow
        read-host “Press ENTER to exit...”
        exit
    }else {
        Write-Host "WARNING: Could not find xampp installation at the default path. If you have it installed in a different folder please ensure you have the correct version of php (php8) and you add it to your PATH system variable." -ForegroundColor Yellow
        if($choco){
            $decision = $Host.UI.PromptForChoice('Do you want to install xampp with choco?', '', $choices, 1)
            if ($decision -eq 0) {
                choco install xampp-80 -y
                $php8 = $true
                Clear-Host
                Write-Host "XAMPP installed" -ForegroundColor Green    
                Write-Host "Your path does not contains your php folder. Fixig it." -ForegroundColor Yellow
                [Environment]::SetEnvironmentVariable("Path", $env:Path + ";C:\xampp\php", "Machine")
                Write-Host "- Your PATH variable has been modified. Please reboot your computer and rerrun this script." -ForegroundColor Yellow
                read-host “Press ENTER to exit...”
                exit
            }
        }else{
            Write-Output 'You need to manually install PHP8! Please ensure you have the correct version of php (php8) and you add it to your PATH system variable.'
        }
    }
}

if (Get-Command "node" -errorAction SilentlyContinue) {
    Write-Output 'Node.js is already installed. Continue...'
    $node = $true
}else {
    if($choco){
        $decision = $Host.UI.PromptForChoice('Do you want to install Node.js with choco?', '', $choices, 0)
        if ($decision -eq 0) {
            choco install node -y
            $node = $true
            Clear-Host
            Write-Host "Node installed" -ForegroundColor Green    
        }
    }else{
        Write-Output 'You need to manually install Node js!'
        Strat-Process "https://nodejs.org/en/"
    }
}

if (Get-Command "yarn" -errorAction SilentlyContinue) {
    Write-Output 'Yarn is already installed. Continue...'
    $yarn = $true
}else {
    if($choco){
        $decision = $Host.UI.PromptForChoice('Do you want to install Yarn with choco?', '', $choices, 0)
        if ($decision -eq 0) {
            choco install yarn -y
            $yarn = $true
            Clear-Host
            Write-Host "Yarn installed" -ForegroundColor Green  
        }
    }else{
        Write-Output 'You need to manually install Yarn!'
        Strat-Process "https://classic.yarnpkg.com/en/docs/install/#windows-stable"
    }
}

if (Get-Command "composer" -errorAction SilentlyContinue) {
    Write-Output 'Composer is already installed. Continue...'
    $composer = $true
}else {
    Write-Host 'Composer is not installed and can not be installed programatically.' -ForegroundColor Red
    Write-Host 'Please visit the getcomposer.com website and follow the installation instructions there. Then please rerun this script' -ForegroundColor Yellow
    read-host “Press ENTER to open getcomposer.com and exit”
    Start-Process "https://getcomposer.org/download/"
}

Write-Host "Please make sure your Apache and MySQL is running and you have a database for this project (found in .env or .env.example)" -ForegroundColor Yellow
read-host "Press ENTER to continue..."

if($composer){
    Write-Output "Composer install... [1/6]"
    composer install
    Write-Host "-------------------"
}

if($yarn){
    Write-Output "Yarn install... [2/6]"
    yarn
    Write-Host "-------------------"
    Write-Output "Compiling assets... [3/6]"
    yarn run development
    Write-Host "-------------------"
}

if(-not (Test-Path ".\.env")){
    Write-Output "Copy env file... [4/6]"
    Copy-Item ".\.env.example" ".\.env"
    Write-Host "-------------------"
}else{
    Write-Output "Env file present. No override needed"
}

if($php8){
    Write-Output "Key generation... [5/6]"
    php artisan key:generate
    Write-Host "-------------------"
    Write-Host "Migrate & seed... [6/6]"
    php artisan migrate:fresh --seed
    Write-Host "-------------------"
    Write-Host "Init project complete"
}