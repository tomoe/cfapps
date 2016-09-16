#!/bin/bash -x

mkdir -p .bp-config/httpd/extra && curl https://raw.githubusercontent.com/cloudfoundry/php-buildpack/master/defaults/config/httpd/extra/httpd-logging.conf > .bp-config/httpd/extra/httpd-logging.conf && sed -ie "s/LogLevel \([[:alpha:]]*\)/LogLevel \1 rewrite:trace6/" .bp-config/httpd/extra/httpd-logging.conf
