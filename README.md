# takenotes

## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:
* Você tem um servidor local, ou online, que rode `PHP`.
* Você tem como rodar um servidor local, ou online, que utilize `<MySQL>`.

## 🚀 Instalando takenotes

Para instalar o takenotes, siga estas etapas:

```
1. Importe o projeto (a pasta Preeckle) para o seu servidor (geralmente é a pasta www ou htdocs).
2. Importe o SQL, que está na pasta SQL (notes.sql), para uma base de dados chamada "takenotes".
3. Configure o arquivo de conexão MySQL (connectMySQL.php) de acordo com suas informações.
--- EXEMPLO E TUTORIAL
        $hostname = "localhost"; // Endereço do host do banco de dados
        $username = "root"; // Usuário do banco de dados
        $password = ""; // Senha do banco de dados, deixe em branco caso não haja uma
        $dbname   = "takenotes"; // Nome da tabela do banco de dados
```

## ☕ Usando takenotes

Para usar o takenotes, siga estas etapas:

```
1. Clique em "Nova nota", e adicione as informações, para adicionar uma nota.
2. Clique em alguma nota já criada para ver as informações da mesma.
3. Clique no icone de lixeira, dentro de alguma nota, para excluir a mesma.
```

## 📝 Licença

Esse projeto está sob licença. Veja o arquivo [LICENÇA](LICENSE.md) para mais detalhes.

[⬆ Voltar ao topo](#takenotes)<br>
