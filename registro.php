<?php 
include 'includes/conexion.php';
include 'includes/header.php'; 

$mensaje = '';
$tipo_mensaje = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validación de contraseña (server-side)
    if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/', $password)) {
        $mensaje = "La contraseña debe contener mayúsculas, minúsculas y números.";
        $tipo_mensaje = "error";
    } else {
        try {
            // Verificar si usuario o email ya existen
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = ? OR correo = ?");
            $stmt->execute([$usuario, $email]);
            
            if ($stmt->fetchColumn() > 0) {
                $mensaje = "El usuario o el correo ya están registrados.";
                $tipo_mensaje = "error";
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO usuarios (usuario, nombre, pass, correo, rango) VALUES (?, ?, ?, ?, 'usuario')";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$usuario, $nombre, $passwordHash, $email]);
                
                $mensaje = "¡Registro exitoso! <a href='login.php' style='color: var(--accent);'>Iniciar Sesión</a>";
                $tipo_mensaje = "success";
            }
        } catch (PDOException $e) {
            $mensaje = "Error en el registro: " . $e->getMessage();
            $tipo_mensaje = "error";
        }
    }
}
?>

<div class="container" style="max-width: 400px; margin: 2rem auto;">
    <h1 style="text-align: center; margin-bottom: 2rem;">Crear Cuenta</h1>
    
    <?php if($mensaje): ?>
        <div style="padding: 1rem; border-radius: 0.5rem; margin-bottom: 1.5rem; 
            background: <?php echo $tipo_mensaje == 'error' ? 'rgba(220, 38, 38, 0.2)' : 'rgba(16, 185, 129, 0.2)'; ?>; 
            border: 1px solid <?php echo $tipo_mensaje == 'error' ? 'rgba(220, 38, 38, 0.5)' : 'rgba(16, 185, 129, 0.5)'; ?>;
            color: <?php echo $tipo_mensaje == 'error' ? '#fca5a5' : '#6ee7b7'; ?>;">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <form action="registro.php" method="POST">
        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Usuario</label>
            <input type="text" name="usuario" required placeholder="tu_usuario" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Nombre Completo</label>
            <input type="text" name="nombre" required placeholder="Tu Nombre" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
        </div>

        <div style="margin-bottom: 1.5rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Correo Electrónico</label>
            <input type="email" name="email" required placeholder="usuario@ejemplo.com" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
        </div>
        
        <div style="margin-bottom: 2rem;">
            <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Contraseña</label>
            <input type="password" name="password" required placeholder="••••••••" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none;">
            <small style="color: var(--text-muted); display: block; margin-top: 0.5rem; font-size: 0.8rem;">
                Debe incluir mayúsculas, minúsculas y números.
            </small>
        </div>
        
        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: var(--primary); color: white; border: none; border-radius: 0.5rem; font-weight: 600; cursor: pointer; transition: background-color 0.2s;">
            Registrarse
        </button>

        <div style="margin-top: 1rem; text-align: center;">
            <a href="login.php" style="color: var(--text-muted); text-decoration: none; font-size: 0.9rem; transition: color 0.2s;">
                ¿Ya tienes cuenta? <span style="color: var(--accent);">Inicia Sesión</span>
            </a>
        </div>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
