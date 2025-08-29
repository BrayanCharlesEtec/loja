<?php include 'cabecalho.php'; ?>

<h2>Cadastro de Produto</h2>
<form action="inserir.php" method="POST" class="mt-3" autocomplete="off">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço</label>
    <input type="number" step="0.01" name="preco" class="form-control" placeholder="Digite o preço" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" placeholder="Digite a quantidade" required>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>