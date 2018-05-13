Introduction:
- This vagrant setup creates VirtualBox image with: Ubuntu 16.04 (Xenial64), Apache2, PHP7, Postgresql-9.5
- To verify the PHP setup, a simple HTML form and PHP logic are available at localhost:7105
- Also, a Postgres DB is created/loaded during the provision and set of simple queries is performed

Setup:
- Ubuntu 16.04 (Xenial64)
- Apache2
- php7
- Postgresql-9.5


Instructions:
1) In terminal: clone git <repositoryname>
2) cd <repositoryname>
3) vagrant up

to verify PHP:
4) In browser,go to: localhost:7105

to verify Postgresql:
5) in terminal: vagrant ssh
6) cd postgres_tests/queries
7) vi <result_filename>.csv             # view the query results
                                        # queries were performned at DB7105 (access by: psql DB7105)
