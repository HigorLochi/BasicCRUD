<ul class="pagination">
    <?php if($page > 1): ?>
        <li><a href="<?= "index.php?" . http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>" class='button'>Prev</a></li>
    <?php endif; ?> 

    <?php for($backwardIndex = 1; $backwardIndex < $page; $backwardIndex++): ?> 
        <li><a href="<?= "index.php?" . http_build_query(array_merge($_GET, ['page' => $backwardIndex])) ?>" class="page"><?= $backwardIndex ?></a></li>
    <?php endfor; ?> 

    <li><a class="page active"><?= $page ?></a></li>

    <?php for($fowardIndex = $page + 1; $fowardIndex <= $pagesCount; $fowardIndex++): ?> 
        <li><a href="<?= "index.php?" . http_build_query(array_merge($_GET, ['page' => $fowardIndex])) ?>" class="page"><?= $fowardIndex ?></a></li>
    <?php endfor; ?> 

    <?php if($page < $pagesCount): ?>
        <li><a href="<?= "index.php?" . http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>" class="button">Next</a></li>
    <?php endif; ?>
</ul>