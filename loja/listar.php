<?php include 'cabecalho.php'; ?>

<h1>Bem-vindo ao Sistema com CRUD</h1>
<h2 class="mb-3">Listagem de produtos</h2>

<?php if (!empty($_GET['ok'])): ?>
  <div class="alert alert-success">Produto inserido com sucesso!</div>
<?php endif; ?>

<div class="table-responsive">
  <table class="table table-striped align-middle">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">PREÇO</th>
        <th scope="col">QUANTIDADE</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require 'conexao.php';
        $sql  = "SELECT * FROM produtos ORDER BY id DESC";
        $stmt = $pdo->query($sql);

        $temRegistros = false;
        while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $temRegistros = true;
            echo '<tr>';
            echo '<td>' . htmlspecialchars($produto['id']) . '</td>';
            echo '<td>' . htmlspecialchars($produto['nome']) . '</td>';
            echo '<td>R$ ' . htmlspecialchars($produto['preco']) . '</td>';
            echo '<td>' . htmlspecialchars($produto['quantidade']) . '</td>';
            echo '</tr>';
        }

        if (!$temRegistros) {
            echo '<tr><td colspan="4" class="text-center text-muted">Nenhum produto cadastrado.</td></tr>';
        }
      ?>
    </tbody>
  </table>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
