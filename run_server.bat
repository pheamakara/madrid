@echo off
echo Starting PHP server on port 8000...
start "" "http://localhost:8000"
php -S localhost:8000 -t public
