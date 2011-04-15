GoogleDocs-to-Geckoboard
========================

Implementação da API para Custom Widgets do Geckoboard usando dados de planilhas do Gooogle Docs

### API do Geckboard ###

* [Custom Chart Widget Type Definitions](http://support.geckoboard.com/entries/274940-custom-chart-widget-type-definitions)
* [Custom Widget Type Definitions](http://support.geckoboard.com/entries/231507-custom-widget-type-definitions)

Métodos aceitos pelo GoogleDocs-to-Geckoboard (action):
________________________________________________________

* Line Chart (id: linechart);
* Pie Chart (id: piechart);

Como funciona:
______________

1. Formate sua planilha de acordo com um dos formatos da API suportados, como descrito acima;
2. Publique a planilha do Google Docs para WEB no formato RSS e copie sua URL;
3. Codifique a URL do RSS da planilha para ser usado como parâmetro (http://meyerweb.com/eric/tools/dencoder/);
4. Adicione um Custom Widget no seu Geckboard. Como URL data feed passar http://seu.dominio/pathtoproject/data.php?action=ID_DA_ACTION&url=LINK_DO_RSS_DA_PLANILHA;

Modelo de formatos suportados para a planilha:
______________________________________________

- Line Chart: [https://spreadsheets0.google.com/ccc?hl=pt_BR&key=tjY2nGUYqRevxRC0MouYoWQ&hl=pt_BR#gid=0](https://spreadsheets0.google.com/ccc?hl=pt_BR&key=tjY2nGUYqRevxRC0MouYoWQ&hl=pt_BR#gid=0)
- Pie Chart:  [https://spreadsheets.google.com/ccc?key=0AjawP-EhTnNodHdHWnB2TWQxcGtHNGZyY3JVZGhyVUE&hl=pt_BR#gid=0](https://spreadsheets.google.com/ccc?key=0AjawP-EhTnNodHdHWnB2TWQxcGtHNGZyY3JVZGhyVUE&hl=pt_BR#gid=0)