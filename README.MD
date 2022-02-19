<div align="center">
  <img src="https://badgen.net/github/open-prs/hmiranda99/test">
  <img src="https://badgen.net/github/closed-prs/hmiranda99/test">
  <img src="https://badgen.net/github/merged-prs/hmiranda99/test">
  <img src="https://img.shields.io/github/languages/count/hmiranda99/test">
  <img src="https://img.shields.io/github/repo-size/hmiranda99/test">
  <img src="https://img.shields.io/tokei/lines/github/hmiranda99/test">
</div>

<br/>

<div align="center">
  
  # Seja bem vindo repô do Here!
  
</div>
  
<br/>

<h3>
<details>

   <summary>
     <b> 📘 Sumário </b> 
   </summary>

   <br>

  [Skills necessárias](#-skills-necessárias) <br>
  [Criando pull request](-criando-pull-request) <br>
  [Aprovando uma PR](-aprovando-uma-pr) <br>
  [Merge](#%EF%B8%8F-merge) <br>
  [Mantenha o seu repositório local sempre atualizado](#-mantenha-o-seu-repositório-local-sempre-atualizado) 

</details>
</h3>

<br/>

##

<div>
  
### 🚀 Skills necessárias
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white">
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
<img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E">
  
</div>

##


  
### <div><img src="https://user-images.githubusercontent.com/79329906/154810593-7a01d842-efc2-4e3a-868c-05fdd8283386.svg" align="center">  Sobre o Here</div>

Here é uma plataforma intitucional com o foco de criar um canal que facilite a comunicação entre professores e seus alunos, assim, melhorando a autonomia do professor em compartilhar conteúdo e enviar tarefas, contando com o auxílio da comunidade que influencia os alunos ajudarem uns aos outros com dúvidas nas matérias.
  


##

### 👨🏻‍💻 Primeiros passos
> 🚨 Atenção: Não esqueça estar com o `token` do github **criado**. <br/>
> 
> <a href="https://www.youtube.com/watch?v=QzICMYo9WEs&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=2" target="_blank"><img src="https://img.shields.io/badge/Configuração token-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>
<br/>

Para iniciar a sua jornada, você deverá ter o repositório salvo **localmente** para isso siga os passos:
1. Entre na página do repositório e procure pelo botão `code`;
2. Copie o código `HTTP` disponibilizado;
3. No seu terminal, digite `cd /`;
4. Em seguida, digite `cd xampp/htdocs`; 
5. E dê o comando `git clone <url>`;
6. Ainda no terminal, entre na pasta do repositório `cd <nomePasta>`;
7. Com o repositório na sua máquina passe da main, para a branch QA `git checkout qa`.
<br/>

> 📌 Nota: Certifique-se de estar em `QA` quando inciar qualquer tipo de alteração no repositório.
<br/>

😎 Pronto! Agora você terá o repositório salvo na sua máquina e pronto para iniciar as suas tasks. 🎯

<a href="https://www.youtube.com/watch?v=5-3V6G7ZnYU&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=4" target="_blank"><img src="https://img.shields.io/badge/Primeiros passos-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>

##

### 🔄 Criando Pull Request (PR)
**Não** poderá ser feito nenhum commit do repositório local diretamente para a `main` localizada no repositório remoto.

Para você fazer o seu deploy, deverá abrir uma `branch` referente a sua task e fazer uma `PR` direcionada para `QA`, assim os integrantes do grupo poderão revisar o seu código, assim tendo códigos de maior qualidade e mantendo todo o time atualizado. Segue abaixo os passos para subir a sua `PR`:

<br/>

> ⚠️ Supondo que você está na branch de `QA`, você poderá seguir esses passos.

<br/>

1. Crie a sua branch `git checkout -B <número-task/nome-task>`;
2. `git add --all && git commit -m "descricao-do-que-vc-fez"`;
3. Suba as alterações feitas para a sua branch `git push origin <número-task/nome-task>`;
4. Crie sua pull request, apertando no botão `Compare & pull request`;
5. Coloque a descrição do que você fez na sua task;
6. Adicione o seu perfil como autor da PR,
7. Cloque a label `code review`;
8. Coloque o link da sua PR no seu cartão do Trello e envie no grupo do WhatsApp.

<br/>

✅ Agora é só aguardar o approve da squad!  🎉

<a href="https://www.youtube.com/watch?v=pImysNHjSoQ&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=5" target="_blank"><img src="https://img.shields.io/badge/Criando uma PR-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>

##

###  🔍 Aprovando uma PR
1. Entre no link do Trello;
2. Ao entrar no link da pr, procure pela aba `Files changed`;
3. Aparecerá todo o código, em vermelho foram as linhas deletedas e em verde, são as linhas adicionadas;
4. **Analise com atenção;**

<br/>

### ❌ Caso encontre algo de errado, 
5. Passe o mouse na linha do erro encontrado e irá aparecer um botão azul com sinal de `+`;
6. Ao clicar irá aparecer o espaço para o comentário;
7. Depois que fizer o comentário, coloque um artigo sobre a sua observação. Além de dar credibilidade ao seu ponto, também dará a possibilidade da pessoa entender o que houve e conseguir arrumar;
8. Após colocar os comentários, procure pelo botão `Finish your review`;
9. Envie comentario apertando em `submit review`;
10. Comente na task do trello **"revisado/solicitação de alteração"**.

<br/>

### ✅ Caso não encontre nenhum erro
5. Na aba `Files changed`, procure pelo botão `Finish your review`;
7. Aparecerá um campo, comente **"revisado/aprovado"**; 
8. Envie comentario apertando em `submit review`;
9. Comenta na task do trello também **"revisado/aprovado"**.

<a href="https://www.youtube.com/watch?v=TUurYyjgJCg&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=6" target="_blank"><img src="https://img.shields.io/badge/Corrigindo uma PR-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>

##

### ↕️ Merge

> ⚠️⚠️ Essa é uma estapa de extrema atenção!

<br/>

Regra para o merge das tasks:
* Só serão as tasks que estão **revisadas** e **sem bugs**;
* E só poderá ser feita de Segunda à Sexta.

<br/>

> 🚨 Será feito o merge de `QA` para `main` aos domingos.

<a href="https://www.youtube.com/watch?v=JdlBI57mbR8&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=7" target="_blank"><img src="https://img.shields.io/badge/Merge-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>

##

### 📆 Testes e prazos
As tasks terão o prazo de uma semana para serem entregues, ou seja, toda semana deverá ter entregas. <br/>
Aos sábados os QA's realizarão os testes na branch de `QA`. <br/>
Durante a semana, todos farão testes em `QA`. <br/>

<br/>

> ⚠️ Para o teste será levado em conta o tipo de task e o resultado esperado.

##

### 🤩 Mantenha o seu repositório local sempre atualizado

1. Faça a atualização aos domingo (neste dia está proibido fazer merge);
2. Certifique-se de que **todos** os merges do dia foram feitos;
3. E de que `QA` **não** esteja quebrada ou com bugs;
4. Para atualizar digite `git checkout main`; *para ter certeza de que você está na branch correta*
5. `git pull`;

<br/>

😍 Repositório lindo, sem bugs e atualizadinho! 😌

<a href="https://www.youtube.com/watch?v=plB4aj1bKlY&list=PL4e74ugWhB0p-_wA4dbHORz7fODHuD8nZ&index=8" target="_blank"><img src="https://img.shields.io/badge/Mantendo o repositório local sempre atualizado-FF0000?style=for-the-badge&logo=youtube&logoColor=white"></a>
