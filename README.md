## Kanino Project

Projeto do Grupo Rok do Centro Universitário Senac, esse sistema ser tratar de um gerenciador de conteúdo da loja Kanino e dos seus aplicativos(nesse caso um Back office).

Página do projeto: http://sistemasparainter.net/kanino/


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
Dica: Sempre que quiser entra em alguma pasta digite "cd NOME-DA-PASTA".

Para visualizar ser existe arquivos novos, alterados ou deletados execute o seguinte comando:
```
git status
```

---

## Começando a atividade
Sempre que for iniciar alguma atividade de desenvolvimento certifique-se que está no branch develop para descobrir digite:
```
git branch
```
##### Dica: [saiba mais sobre os branches](http://blog.caelum.com.br/desmitificando-branches-remotas-com-git/)

Logo vai aparecer o nome do branch em destaque, caso não esteja no branch develop execute a seguinte linha de comando:
```
git checkout develop
```
Nesse comando você está mudando o seu branch do master para o develop, os arquivos mais recentes do projeto ser encontra no develop, logo ser você iniciar no master você terá as versões mais antigas do projeto.

Agora ser você executar a mesma linha verá que o nome do branch mudou e possívelmente a estutura de arquivos ou os dados mudaram na pasta do projeto.
```
git branch
```

Toda funcionalidade que vier a ser desenvolvida deverá criar um novo branch apartir do mesmo código fonte do branch "develop", o nome da funcionalidade que vier a ser criada não pode conter caracteres especiais e espaços, exemplo:

Nome da funcionalidade: CRUD Categoria

```
git checkout -b CRUD-Categoria
```
Pronto, agora temos um novo branch, umas das vantagens do "branch" é a possibilidade de trabalhar em várias atividades diferentes mais com uma organização melhor para o desenvolvedor, exemplos: CRUD-Categoria, Login, Bugs-Sistema e etc...

---

## Segurança no trabalho
Como você vai garantir uma segurança maior no desenvolvimento do projeto onde que não ocorra o risco de perder todo o seu trabalho já feito na funcionalidade atual, logo você terá que salva as partes já desenvolvidas.

No comando "git add" você pode indicar os nomes do arquivos especificos para serem adiciondados ou capturar todas as mudanças feitas utilizando os símbolos ( . ) ou ( * ).
```
git add .
git commit -m "Mensagem auto-explicativo"
```

##### Dica: 
Pronto agora as mudanças que você especificou foram salvas no branch atual. Caso deseje ver todos os "commits" feitos, digite o seguinte comando:
```
git log
```
Irá aparecer um histórico de todos os nomes dos commits e suas alterções, para sair do histórico aperter "Q".

---
## Enviando as mudanças para validação

Quando terminar de desenvolver uma funcionalidade(branch) e deseja enviar para o repositório para ser validado não envie pelo branch da funcionalidade atual e sim pelo branch "develop", sempre certifique-se de que está mandando as mudanças corretas ou certifique-se que você já fez todos os commits necessário e que não tenha esquecido de nenhum, exemplo:

Nome da funcionalidade: CRUD Categoria
```
git checkout develop
git merge CRUD-Categoria
```
##### Atenção: 
Para fazer o `git merge CRUD-Categoria` certifique-se que esteja no "branch develop".

Agora que as mudanças já foram preparadas e a sua funcionalidade já está ok, você terá que executar o seguinte comando: 
```
git push
```

---
## Observações no Github
Quando o comando `git push` terminar de subir toda as mudanças para o branch "develop" que está no Github, caso queira validar a atividade com PO ou Scrum Master, no seu painel do Github terá um botão "pull request" clique nele, adicione um titulo que descreve as novas implementações e certifique-se que está enviando pelo "branch develop" depois é só enviar, Pronto!

Após isso será validado pelo PO ou Scrum Master
