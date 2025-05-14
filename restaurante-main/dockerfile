FROM php:8.1-cli

# Instala extensões necessárias
RUN docker-php-ext-install mysqli

# Define o diretório de trabalho
WORKDIR /app

# Copia os arquivos do projeto para o container
COPY . .

# Expõe a porta
EXPOSE 8080

# Comando para rodar o servidor embutido do PHP
CMD ["php", "-S", "0.0.0.0:8080"]