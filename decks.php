<?php include 'includes/header.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Explorar Mazos</h1>
        <button style="padding: 0.5rem 1rem; background-color: var(--accent); color: white; border: none; border-radius: 0.5rem; font-weight: 500; cursor: pointer;">
            + Nuevo Mazo
        </button>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 2rem;">
        <!-- Placeholder Decks -->
        <?php for ($i = 1; $i <= 8; $i++): ?>
        <div style="aspect-ratio: 3/4; background: white; border-radius: 0.75rem; transition: transform 0.2s; cursor: pointer; opacity: 0.1; border: 2px dashed rgba(255,255,255,0.5);">
            <!-- Blank Placeholder -->
        </div>
        <?php endfor; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
