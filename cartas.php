<?php include 'includes/header.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Colección de Cartas</h1>
        <button style="padding: 0.5rem 1rem; background-color: var(--accent); color: white; border: none; border-radius: 0.5rem; font-weight: 500; cursor: pointer;">
            + Nueva Carta
        </button>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem;">
        <!-- Card Item Placeholder -->
        <div style="background: rgba(255,255,255,0.03); border-radius: 0.75rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.05); transition: transform 0.2s;">
            <div style="height: 160px; background: linear-gradient(45deg, var(--primary-dark), var(--bg-dark)); display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 3rem;">🃏</span>
            </div>
            <div style="padding: 1rem;">
                <h3 style="margin-bottom: 0.5rem; color: var(--text-main);">Ejemplo Carta</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Descripción breve de la carta y sus habilidades.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="background: rgba(99, 102, 241, 0.1); color: var(--primary); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Rara</span>
                    <span style="color: var(--text-muted); font-size: 0.9rem;">#001</span>
                </div>
            </div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 0.75rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.05);">
            <div style="height: 160px; background: linear-gradient(45deg, var(--accent), var(--bg-dark)); display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 3rem;">⚔️</span>
            </div>
            <div style="padding: 1rem;">
                <h3 style="margin-bottom: 0.5rem; color: var(--text-main);">Guerrero Místico</h3>
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Una unidad poderosa para el combate cuerpo a cuerpo.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="background: rgba(16, 185, 129, 0.1); color: var(--accent); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Común</span>
                    <span style="color: var(--text-muted); font-size: 0.9rem;">#002</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
