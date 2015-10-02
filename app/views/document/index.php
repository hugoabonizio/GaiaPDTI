<?php if ($documents->count() == 0): ?>
  <h3>Não há documentos cadastrados ainda, <a href="/documents/new">clique aqui</a> para criar.</h3>
<?php else: ?>
tem
<?php endif; ?>