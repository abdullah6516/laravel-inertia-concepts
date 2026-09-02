#!/usr/bin/env sh
set -eu

upload_limit="${UPLOAD_LIMIT:-64M}"

exec php \
    -d "upload_max_filesize=${upload_limit}" \
    -d "post_max_size=${upload_limit}" \
    -d max_execution_time=300 \
    -S 0.0.0.0:8080 \
    -t /var/www/html
