<div class="formAddWrapper">
        <h1>Adicionar Produtos</h1>
        <form method="post" action="includes/add-products.php" class="form-group" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nome do Produto"><br>
            <input type="text" name="forne" placeholder="Fornecedor"><br>
            <input type="number" name="preco" placeholder="Preço do Produto"><br>
            <input type="text" name="status" placeholder="Status"><br>
            <input type="text" name="criado" placeholder="Criado em"><br>
            <input type="text" name="categoria" placeholder="Categoria do Produto"><br>
            <input type="number" name="quantidade" placeholder="Quantidade"><br>
            <input type="file" name="images">
            <button type="submit" name="salvar">Salvar</button>
        </form>
    </div>