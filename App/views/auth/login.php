<?php 
require_once('../App/views/layout/header.php'); 
// require_once('../App/views/auth/register.php');
?>

<div class="container my-5"> 
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0 fw-bold">Connexion</h3>
                    <p class="small mb-0 text-white-50">Accédez à votre espace Taghazout Surf Expo</p>
                </div>
                
                <div class="card-body p-4">
                    <form action="index.php?action=loginUser" method="POST">
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Adresse Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-envelope text-primary"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="psw" class="form-label fw-semibold">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-lock text-primary"></i></span>
                                <input type="password" class="form-control" id="psw" name="psw" placeholder="********" required>
                            </div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Se connecter
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer text-center py-3 bg-light">
                    <p class="mb-0 small text-muted">
                        Nouveau sur la plateforme ? <a href="index.php?action=register" class="text-primary text-decoration-none fw-bold">Créez un compte</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require_once('../App/views/layout/footer.php'); 
?>