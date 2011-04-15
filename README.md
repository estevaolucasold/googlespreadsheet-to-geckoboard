GoogleDocs-to-Geckoboard
========================

Implementação da API do Geckoboard para usar os dados de planilhas do Gooogle Docs para usar em Custom Widgets

### API do Geckboard ###

* http://support.geckoboard.com/entries/274940-custom-chart-widget-type-definitions
* http://support.geckoboard.com/entries/231507-custom-widget-type-definitions

Métodos aceitos pelo GoogleDocs-to-Geckoboard:
______________________________________________

* Line Chart;
* Pie Chart;

Como funciona:
______________

1. Formate sua planilha de acordo com um dos formatos da API suportados, como descrito acima;
2. Publique a planilha do Google Docs para WEB no formato RSS e copie sua URL;
3. Codifique a URL do RSS da planilha para ser usado como parâmetro (http://meyerweb.com/eric/tools/dencoder/);
4. Adicione um Custom Widget no seu Geckboard. Como URL data feed passar;

Formatos suportados para a planilha:
____________________________________

- Line Chart: https://spreadsheets0.google.com/ccc?hl=pt_BR&key=tjY2nGUYqRevxRC0MouYoWQ&hl=pt_BR#gid=0
- Pie Chart:  https://spreadsheets.google.com/ccc?key=0AjawP-EhTnNodHdHWnB2TWQxcGtHNGZyY3JVZGhyVUE&hl=pt_BR#gid=0