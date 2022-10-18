<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase text-center">
                    <i class="fas fa-heart"></i> Top 10 yêu thích
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($top10 as $top10) :
                            extract($top10);
                            if ($don_gia > 0) {
                                $percent_discount = number_format($giam_gia / $don_gia * 100);
                            } else {
                                $percent_discount = 0;
                            }

                        ?>
                        <div class="col-12 col-md-6 col-lg-3 mt-3">
                            <div class="card text-center product-card pb-2">
                                <div class="product-badge text-danger bg-warning">
                                    <?= $giam_gia == 0 ? '' : '-' . $percent_discount . '%' ?>
                                </div>
                                <a class="product-thumb"
                                    href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>" data-abc="true">
                                    <img class="card-img-top product-img object-fit-contain"
                                        src="<?= $UPLOAD_URL . '/products/' . $hinh ?>" alt="Ảnh sản phẩm">
                                </a>
                                <div class="card-body p-0 pt-2 px-2">
                                    <h3 class="product-title mh-60">
                                        <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>">
                                            <?= $ten_hh ?>
                                        </a>
                                    </h3>
                                    <div class="product-price">
                                        <div class="col d-flex justify-content-center align-items-center">
                                            <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                                <?= number_format($don_gia - $giam_gia) ?>đ</p>
                                        </div>
                                    </div>
                                    <div class="col m-2">
                                        <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" . $item['ma_hh'] ?>"
                                            class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>