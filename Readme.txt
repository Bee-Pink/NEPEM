Explicação de todo código.

config.php
O arquivo config.php é como um manual de instruções para o nosso computador poder falar com o banco de dados, que é onde as informações ficam guardadas. 
É como se fosse um "telefone" que conecta nosso site com o banco de dados.

PDO é uma ferramenta que o PHP usa para conectar e falar com vários tipos de bancos de dados (não só o MySQL, mas outros tipos também).
O comando new PDO() é o que realmente cria a conexão com o banco de dados usando o nome do banco, o nome de usuário e a senha que passamos antes.

Verificando o Erro: O código também usa setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) para configurar o comportamento do computador se algo der errado. 
Caso a conexão falhe, ele vai "avisar" com uma mensagem de erro.

private $conn; é como uma "caixinha" onde o PHP vai guardar a conexão com o banco de dados.



educacao_feminina.php
É onde realizamos as operações CRUD (Criar, Ler, Atualizar, Excluir) no banco de dados, mas de forma organizada, usando PHP orientado a objetos.
Serve para manipular os dados da tabela educacao_feminina.

