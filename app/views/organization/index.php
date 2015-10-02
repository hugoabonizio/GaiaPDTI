Escolha:
<ul>
  <?php foreach ($organizations as $organization): ?>
    <li>
      <a href="/organizations/select?organization_id=<?= $organization->id; ?>">
        <?= $organization->name; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>