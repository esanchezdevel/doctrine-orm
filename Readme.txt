
Examples from https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/tutorials/getting-started.html

#########################
# Doctrine ORM commands #
#########################

Note!!! The database must exists, doctrine will not create it, only create the schema

- create schema:
    $ vendor/bin/doctrine orm:schema-tool:create

- update schema:
    $ vendor/bin/doctrine orm:schema-tool:drop --force
    $ vendor/bin/doctrine orm:schema-tool:create

    or

    $ vendor/bin/doctrine orm:schema-tool:update --force
