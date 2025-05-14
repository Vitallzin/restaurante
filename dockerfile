FROM php:8.1-cli

# Instala extensões necessárias
RUN docker-php-ext-install mysqli

# Copia os arquivos do projeto
COPY . /var/www/html
WORKDIR /var/www/html

# Expõe a porta que será usada
EXPOSE 8000

# Comando para iniciar o servidor embutido do PHP
CMD ["php", "-S", "0.0.0.0:8000"]
