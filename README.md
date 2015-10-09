## Kanino Project

Projeto do Grupo Rok do Centro Universitário Senac, esse sistema ser tratar de um gerenciador de conteúdo da loja Kanino e dos seus aplicativos(nesse caso um Back office).

Página do projeto: http://sistemasparainter.net/kanino/

Mockups do projeto: [clique aqui](https://www.dropbox.com/s/jdrraiwexglo6ou/Mockups%20do%20Projeto%20Kanino%20-%20Senac.pdf?dl=0)


## Dependências

- `git`
- `php`

---

## Instalação

Antes de mais nada entre no seu Github e depois entre no [Project-Kanino](https://github.com/GuilhermeDominguesAlves/Kanino-Project), após entra na página do projeto clique no botão "Fork", você estára fazendo uma cópia do projeto para o sua conta do Github.

Depois que fizer os passos acima você vai fazer os seguintes comandos:

```
git clone https://github.com/[NOME-DO-SEU-USUÁRIO]/Kanino-Project.git
cd Kanino-Project
```
Dica: Sempre que quiser entra em alguma pasta digite "cd NOME-DA-PASTA" ou quando quiser listar os arquivos da pasta digite "ls".

Para visualizar ser existe arquivos novos, alterados ou deletados execute o seguinte comando:
```
git status
```

---

## Começando a atividade
Sempre que for iniciar alguma atividade de desenvolvimento certifique-se que está no branch master para descobrir digite:
```
git branch
```
##### Dica: [saiba mais sobre os branches](http://blog.caelum.com.br/desmitificando-branches-remotas-com-git/)

Logo vai aparecer o nome do branch em destaque, caso não esteja no branch master execute a seguinte linha de comando:
```
git checkout master
```
Nesse comando você está mudando o seu branch do atual para o master onde que os arquivos foram testados e válidados, logo ser você iniciar em outro branch você correr o risco de ter uma versão que ainda não foi testada e talvez esteja com bugs.

##### Dica: o branch master ele é um espelhamento do ambiente de produção, ou seja, os arquivos que estão no master é o mesmos arquivos que estão no servidor do cliente(ou também chamado de "ambiente de produção").

Agora ser você executar a mesma linha ``` git branch ```, verá que o nome do branch mudou e possívelmente a estutura de arquivos ou de dados mudaram na pasta do projeto.

Toda nova funcionalidade que vier a ser desenvolvida o ideal é ter os mesmos arquivos do ambiente de produção, pois depois que concluir o seu desenvolvimento será implementada no servidor do cliente(ou ambiente de produção), deverá criar um novo branch apartir do mesmo código fonte do branch "master", o nome da funcionalidade que vier a ser criada não pode conter caracteres especiais e espaços, exemplo:

Nome da funcionalidade: CRUD Categoria

```
git checkout -b CRUD-Categoria
```
Pronto, agora temos um novo branch para a funcionalidade, umas das vantagens do "branch" é a possibilidade de trabalhar em várias funcionalidades diferentes mais com uma organização melhor para o desenvolvedor, exemplos: CRUD-Categoria, Login, Bugs-Sistema e etc...

---

## Segurança no trabalho
Para garantir uma segurança no desenvolvimento da funcionaldiade você pode utilizar os "commits" onde que você salvar partes do seu trabalho para que quando ocorra algum tipo de error ou problema você consigar voltar com os arquivos antigos de um determinado "commit".

No comando "git add" você pode indicar nomes de arquivos especificos para serem adiciondados ou indicar todos os arquivos utilizando os símbolos ( . ) ou ( * ).
```
git add .
git commit -m "Mensagem auto-explicativo"
```

##### Dica:
Pronto, agora as mudanças que você especificou foram salvas no branch atual. Caso deseje ver todos os "commits" feitos, digite o seguinte comando:
```
git log
```
Irá aparecer um histórico de todos os nomes dos commits e suas alterções, para sair do histórico aperter "Q".

---
## Enviando as mudanças para validação

Quando terminar de desenvolver uma funcionalidade(branch) e deseja enviar para o repositório para ser validado não envie pelo branch da funcionalidade atual e sim pelo branch "develop", sempre certifique-se de que está mandando as mudanças corretas ou certifique-se que você já fez todos os commits necessários e que não tenha esquecido de nenhum detalhe da funcionalidade, exemplo:

Nome da funcionalidade: CRUD Categoria
```
git checkout develop
git merge CRUD-Categoria
```
##### Atenção:
Para fazer o `git merge CRUD-Categoria` certifique-se que esteja no "branch develop", o branch develop server para testar as funcionalides desenvolvidas em um servidor de teste(ou também chamado de ambiente de homologação) para validar ser estão funcionando corretamente para adiciona-las no servidor do cliente.

Agora que as mudanças já foram preparadas e a sua funcionalidade já está ok, você terá que executar o seguinte comando:
```
git push origin develop
```

---
## Observações no Github
Quando o comando `git push origin develop` terminar de subir toda as mudanças para o branch "develop" que está no Github, caso queira validar a atividade com PO ou Scrum Master, no seu painel do Github terá um botão "pull request" clique nele, adicione um titulo que descreve as novas implementações e certifique-se que está enviando pelo "branch develop" depois é só enviar, Pronto!

Após isso será validado pelo PO ou Scrum Master.
