FROM golang:1.17.2

#RUN apt update && apt -y install net-tools, iputils-ping, vim

COPY --chown=www-data:www-data entrypoint.sh /etc/entrypoint.sh

RUN mkdir /app && chown -R www-data:www-data /app
RUN mkdir -p /var/www/.cache && chown -R www-data:www-data /var/www/.cache

WORKDIR /app

EXPOSE 8082

ENTRYPOINT ["/etc/entrypoint.sh"]
