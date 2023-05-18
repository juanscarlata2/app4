# Utiliza una imagen de PHP como base
FROM php:7.4-cli

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /app

# Copia los archivos de la aplicación al directorio de trabajo del contenedor
COPY . /app

# Expone el puerto 8000 para acceder a la aplicación (opcional, si es necesario)
EXPOSE 8000

# Ejecuta el servidor web de desarrollo incorporado de PHP
CMD ["php", "-S", "0.0.0.0:8000"]
