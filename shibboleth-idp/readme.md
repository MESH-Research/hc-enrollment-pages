## Shibboleth README ##

All files and folders in this directory belong in `/opt/shibboleth-idp`, the files to be modified are inside of `/opt/shibboleth-idp/edit-webapp/` after files are edited, user must run:

> `JAVA_HOME=/opt/java ./bin/build.sh` <br />
> `sudo /etc/init.d/jetty restart`
