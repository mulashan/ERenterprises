<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="<?= base_url(); ?>public/web/img/<?= $category_details->image; ?>" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To <?= $category_details->category_name; ?> Products</h4>
                            <!-- <h1 class="display-4 text-uppercase text-white mb-4">connecting you to global style</h1> -->
                            <p class="mb-5 fs-5"><?= $category_details->description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->
<div class="container pb-5">
    <div class="text-center mx-auto pb-5">
        <h1 class="display-5 mb-4">Products Category || <?= $category_details->category_name; ?></h1>
    </div>

    <div class="row">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $index => $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url(); ?>public/web/img/<?= $product->image; ?>" class="card-img-top img-fluid" alt="<?= $product->product_name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->product_name; ?></h5>
                            <p class="card-text"><?= $product->description; ?></p>
                        </div>
                    </div>
                </div>

                <?php if (($index + 1) % 3 == 0): ?>
                    </div><div class="row"> <!-- Create a new row every 3 products -->
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center">No products available.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?= $pager; ?>
    </div>
</div>
