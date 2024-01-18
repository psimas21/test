#!/bin/bash

cd /home/u148753274/domains/test && php artisan queue:work --tries=3 --timeout=90 > /dev/null 2>&1
