<?php include 'cabecalho.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-dark-custom">
                <h3 class="card-title mb-0"><i class="fas fa-plus-circle me-2"></i>Cadastro de Produto</h3>
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET['erro'])) {
                    $erro = $_GET['erro'];
                    if ($erro == 1) {
                        echo '<div class="alert alert-danger">Preencha todos os campos corretamente.</div>';
                    } else if ($erro == 2) {
                        echo '<div class="alert alert-danger">Erro ao cadastrar produto. Tente novamente.</div>';
                    }
                }
                ?>
                
                <form action="inserir.php" method="POST" class="mt-3" autocomplete="off">
                    <div class="mb-3">
                        <label class="form-label">Nome do Profuto</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Preço (R$)</label>
                        <input type="number" step="0.01" name="preco" class="form-control" placeholder="Digite o preço" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantidade em Estoque</label>
                        <input type="number" name="quantidade" class="form-control" placeholder="Digite a quantidade" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Cadastrar Produto
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                <a href="listar.php" class="btn btn-outline-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Vooltar para a lista
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'rodape.php'; ?>