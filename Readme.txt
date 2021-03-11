#########################
# Doctrine ORM commands #
#########################

- create schema:
    $ vendor/bin/doctrine orm:schema-tool:create

- update schema:
    $ vendor/bin/doctrine orm:schema-tool:drop --force
    $ vendor/bin/doctrine orm:schema-tool:create

    or

    $ vendor/bin/doctrine orm:schema-tool:update --force
    