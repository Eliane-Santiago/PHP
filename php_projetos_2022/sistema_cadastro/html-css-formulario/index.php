<!DOCTYPE html>

<html lang="pt-br">

<Head>
    <meta charset="UTF-8"/>
    <title>Cadastro</title>
    <link href="./estilo.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/4d2d157a30.js" crossorigin="anonymous"></script>
    
</Head>

<body class="body">
   
    <main class="principal"> <!--Corpo Principal-->
        <section class="secao-formulario"> <!--Tag Formulário-->

            <header class="cabecalho-form"> <!--Topo da Formulario-->
            <h1 class="cabecalho-titulo">Cadastro</h1>
            <i class="fa-solid fa-table-list icone-form "></i>
            </header>

            <form class="container-formulario" action="pdo.php" method="post"> 
                
                    <label class="label-nome" for="campo-nome">Nome</label>
                    <input class="input-nome input" type="text" name="campo-nome" maxlength="50" size="50" placeholder="Nome Completo">

                    <label class="label-rg" for="campo-rg">RG/CNH</label>
                    <input class="input-rg input" type="number" name="campo-rg" maxlength="20" size="20" placeholder="Insira o números do seu documento">
        
                    <label class="label-cpf" for="campo-cpf">CPF</label>
                    <input class="input-cpf input" type="number" name="campo-cpf" maxlength="20" size="20" placeholder="Insira seu CPF">

                    <label class="label-telefone" for="campo-telefone">Telefone</label>
                    <input class="input-telefone input" type="number" name="campo-telefone" maxlength="20" size="20" placeholder="Insira seu telefone">

                    <label class="label-email" for="campo-email">E-mail</label>
                    <input class="input-email input" type="email" name="campo-email" maxlength="50" size="50" placeholder="Endereço Eletrônico">
                
                    <input class="botao-salvar" type="submit" value="Salvar">
                   
            </form>
           
        </section>
    </main>

    <footer class="rodape"> <!--Tag Rodape da Página-->
        <h3>... Fim ...</h3>
    </footer>
</body>











</html>

<!--
    PLUGIN LIVE SERVER: Serve para salvar e abrir a página do VScode que estiver sendo editada no navegador automaticamente
        

 -->