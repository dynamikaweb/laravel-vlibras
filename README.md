dynamikasolucoesweb/laravel-vlibras
=========================
![php version](https://img.shields.io/packagist/php-v/dynamikasolucoesweb/laravel-vlibras)
![pkg version](https://img.shields.io/packagist/v/dynamikasolucoesweb/laravel-vlibras)
![license](https://img.shields.io/packagist/l/dynamikasolucoesweb/laravel-vlibras)
![quality](https://img.shields.io/scrutinizer/quality/g/dynamikaweb/laravel-vlibras)
![build](https://img.shields.io/scrutinizer/build/g/dynamikaweb/laravel-vlibras)

O Laravel VLibras é a maneira mais rápida e eficiente de integrar o widget oficial de acessibilidade do Governo Federal em aplicações Laravel. 100% Plug & Play, sem necessidade de configuração manual de scripts ou publicação de assets obrigatória.

Instalação
------------
A maneira preferida de instalar esta extensão é através do [composer] [composer](http://getcomposer.org/download/).

Ou corre

```SHELL
$ composer require dynamikasolucoesweb/laravel-vlibras "*"
```

ou adicione

```JSON
"dynamikasolucoesweb/laravel-vlibras": "*"
```

à seção `require` do seu arquivo `composer.json`.

Uso
------------
Basta adicionar o componente Blade no seu arquivo de layout principal

```HTML
<x-vlibras />
```

Features
------------
Diferente de inserções manuais, este componente foi otimizado para:

Carregamento Inteligente: O script oficial do VLibras é carregado de forma assíncrona, não bloqueando a renderização da sua página.

Encapsulamento: Todo o HTML necessário e a lógica de inicialização estão contidos no componente.

Zero Assets: Você não precisa copiar arquivos para a pasta public para o widget funcionar.

Authors
------------
Giordani da Silveira dos Santos - giordani@dynamika.com.br

--------------------------------------------------------------------------------------------------------------
[![dynamika soluções web](https://avatars.githubusercontent.com/dynamikaweb?size=12)](https://dynamika.com.br)
This project is under [BSD-3-Clause](https://opensource.org/licenses/BSD-3-Clause) license.