# Estrutura MVC para estudos

Estrutura MVC baseada no curso da B7WEB, apenas para fins de estudo próprio. Esta versão usa psr-0 apenas para fins didáticos

## Instalação

Não é necessário uma instalação de fato. A estrutura já vem pré-pronta. Os unicos ajustes necessários são alterar o caminho no .htaccess
```bash
RewriteRule ^(.*)$ /mvc/index.php?url=$1 [QSA,L]
```
Ajustar algumas configurações como ambiente no environment.php
```bash
define('ENVIRONMENT', 'development');
//define('ENVIRONMENT', 'production');
```

E mais algumas informações no config.php, como a url base e as informações de conexão ao banco de dados.
```bash
define('BASE_URL', 'http://localhost/mvc/');
    $config['dbname'] = 'developmentDatabase';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'developmentUser';
    $config['dbpass'] = 'developmentPass';
```

## Uso


Basicamente essa estrutura pega as informações na url, e transforma nos caminhos no sistema. A primeira parte da url leva ao controller respectivo, a segunda parte leva à action daquele controller e da terceira em diante são os parâmetros se necessário. O controller padrão é o homeController e a action padrão de todos os controllers é a index.

## License
Todos os créditos vão à B7WEB e ao Bonieky Lacerda