Pasos finales para que funcione
Crea los archivos: Usa nano o tu editor favorito para crear estos 7 archivos dentro de /var/www/RubenVega.

Prepara la base de datos:

Entra a tu terminal.

Escribe mysql -u root -p e ingresa tu contraseña.

Copia y pega el contenido de database.sql (paso 1) allí mismo o impórtalo desde PHPMyAdmin si ya lo tienes instalado.

Configura el correo (Importante):

Para que la función mail() de PHP funcione mínimamente, necesitas tener instalado sendmail o postfix en tu servidor.

Instálalo rápido con: sudo apt-get install sendmail.

Prueba: Entra a ruben.rubenvega.online.