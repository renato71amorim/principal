# Principal
Sistema Padrão para Aplicativos Scriptcase


# Instalar dependências
yum -y update
yum install git
yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
yum install yum-utils
yum-config-manager --enable remi-php73
yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo
yum install php-mbstring

php -v
service httpd restart

# Criar diretório de documentos
cd /var/www/
mkdir doc


# Clonar projeto
cd /var/www/html/
git clone https://github.com/renato71amorim/principal.git

# Permissões
find /var/www/html -type d -exec chmod -v 755 {} \; && find /var/www/html -type f -exec chmod -v 644 {} \; && find /var/www/html -name wkhtmltopdf* -exec chmod -v 755 {} \; && find /var/www/html -name phantomjs* -exec chmod -v 755 {} \; && find /var/www/html -name zend* -exec chmod -v 755 {} \; && find /var/www/html -name 7za* -exec chmod -v 755 {} \; && find /var/www/html -name qpdf-linux-amd64* -exec chmod -v 755 {} \;

chown apache:apache -Rv /var/www/html/

# Acessar modo de produção e configurar
http://seu-servidor/principal/

# Remover index

rm /var/www/html/principal/index.html



