FROM container-registry.oracle.com/mysql/community-server:8.4

USER root

ARG PHPMYADMIN_VERSION=5.2.2

RUN microdnf install -y \
        php-cli \
        php-gd \
        php-intl \
        php-mbstring \
        php-mysqlnd \
        php-xml \
        php-zip \
        gzip \
    && microdnf clean all \
    && mkdir -p /var/www/html \
    && curl -fsSL "https://files.phpmyadmin.net/phpMyAdmin/${PHPMYADMIN_VERSION}/phpMyAdmin-${PHPMYADMIN_VERSION}-all-languages.tar.gz" -o /tmp/phpmyadmin.tar.gz \
    && tar -xzf /tmp/phpmyadmin.tar.gz --strip-components=1 -C /var/www/html \
    && rm /tmp/phpmyadmin.tar.gz \
    && mkdir -p /tmp/phpmyadmin \
    && chown -R mysql:mysql /var/www/html /tmp/phpmyadmin

COPY config.inc.php /var/www/html/config.inc.php
COPY entrypoint.sh /usr/local/bin/phpmyadmin-entrypoint

RUN chmod +x /usr/local/bin/phpmyadmin-entrypoint \
    && chown mysql:mysql /var/www/html/config.inc.php /usr/local/bin/phpmyadmin-entrypoint

USER mysql

EXPOSE 8080

ENTRYPOINT ["phpmyadmin-entrypoint"]
