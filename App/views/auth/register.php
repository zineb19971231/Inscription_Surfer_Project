<?php 
require_once('../App/views/layout/header.php'); 
?>

<div class="container my-5"> 
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0 fw-bold">Inscription</h3>
                    <p class="small mb-0 text-white-50">Créez votre compte Taghazout Surf Expo</p>
                </div>
                <div class="card-body p-4">
                    <form action="index.php?action=saveRegister" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Ex: Zineb_29" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Adresse Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="contact@example.com" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="psw" class="form-label fw-semibold">Mot de passe</label>
                            <input type="password" class="form-control" id="psw" name="psw" placeholder="********" required>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                <i class="bi bi-person-plus-fill me-2"></i>S'inscrire
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <p class="mb-0 small text-muted">
                        Déjà inscrit ? <a href="index.php?action=login" class="text-primary text-decoration-none fw-bold">Connectez-vous</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require_once('../App/views/layout/footer.php'); 
?>