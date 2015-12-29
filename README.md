Symfony Standard Edition
========================

Generate tables
bin/console doctrine:schema:update --force

Clean routes
php app/console cache:clear --env=prod --no-debug