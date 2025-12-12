<?php include 'includes/header.php'; ?>

<div class="container" style="max-width: 400px; margin: 2rem auto;">
    <h1 style="text-align: center; margin-bottom: 2rem;">Iniciar Sesión</h1>
    
    <form action="#" method="POST">
        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Email</label>
            <input type="email" placeholder="usuario@ejemplo.com" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
        </div>
        
        <div style="margin-bottom: 2rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Contraseña</label>
            <input type="password" placeholder="••••••••" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
        </div>
        
        <button type="button" style="width: 100%; padding: 0.75rem; background-color: var(--primary); color: white; border: none; border-radius: 0.5rem; font-weight: 600; cursor: pointer; transition: background-color 0.2s;">
            Entrar
        </button>
        
        <div style="margin-top: 1rem; text-align: center;">
            <a href="registro.php" style="color: var(--text-muted); text-decoration: none; font-size: 0.9rem; transition: color 0.2s;">
                ¿No tienes cuenta? <span style="color: var(--accent);">Regístrate aquí</span>
            </a>
        </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
