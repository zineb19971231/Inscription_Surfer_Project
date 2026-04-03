<?php 
require_once('../App/views/layout/header.php'); 
?>

<div class="bg-primary text-white py-5 mb-5 rounded-3 shadow-sm">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Bienvenue sur Taghazout Surf Expo! 🌊</h1>
        <p class="lead">Découvrez les meilleurs surfeurs de la région et gérez vos sessions.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">🏄‍♂️ Nos Surfeurs</h2>
        <!-- <span class="badge bg-info text-dark p-2">Total: <?php echo count($surfeurs); ?></span> -->
    </div>

    <div class="row">
        <?php if (!empty($surfeurs)): ?>
            <?php foreach ($surfeurs as $s): ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm hover-card">
                        <div class="card-body text-center">
                            <div class="avatar-placeholder mb-3 mx-auto shadow-sm">
                                <i class="bi bi-person-fill text-primary fs-2"></i>
                            </div>
                            
                            <h5 class="card-title fw-bold text-capitalize">
                                <?= htmlspecialchars($s['username']) ?>
                            </h5>
                            
                            <p class="card-text text-muted mb-3">
                                <i class="bi bi-envelope-at me-1"></i>
                                <?= htmlspecialchars($s['email']) ?>
                            </p>
                            
                            <hr class="w-25 mx-auto mb-3">
                            
                            <div class="d-grid">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Voir Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center py-5">
                <div class="alert alert-light border shadow-sm">
                    <p class="mb-0 text-muted">Aucun surfeur n'est inscrit pour le moment.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
    .avatar-placeholder {
        width: 70px;
        height: 70px;
        background-color: #e9ecef;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .bg-primary {
        background: linear-gradient(45deg, #0d6efd, #0dcaf0) !important;
    }
</style>

<?php 
require_once('../App/views/layout/footer.php'); 
?>