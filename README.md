## Kanino Project

Projeto do Grupo Rok do Centro Universitário Senac, esse sistema ser tratar de um gerenciador de conteúdo da loja Kanino e dos seus aplicativos(nesse caso um Back office).

Página do projeto: http://sistemasparainter.net/kanino/


## Dependências

- `git`
- `php`


## Instalação

```
git clone https://github.com/GuilhermeDominguesAlves/Kanino-Project.git
cd Kanino-Project
```


## Observações

Toda funcionalidade que vier a ser desenvolvida deverá criar um novo branch com o nome da funcionalidade(não pode conter caracteres especiais), exemplo:

Funcionalidade: CRUD Categoria

```
git checkout -b CRUD-Categoria
```

Sempre criar um novo commit verifique ser acionando só os arquivos relevantes para aquele commit e crie mensagens auto-explicativo.


## Enviando as mudanças

Quando terminar de desenvolver uma funcionalidade e deseja enviar para o repositório não envie pelo branch da funcionalidade atual e sim pelo branch develop, onde que terá que fazer ``git merge nome-da-funcionalidade`` no branch develop, exemplo:

Funcionalidade: CRUD Categoria

```
git checkout develop
git merge CRUD-Categoria
```

Agora que as mudanças foram preparadas poderá realizar o ``git push`` para o repositório.
