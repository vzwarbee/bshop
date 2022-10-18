<?php

require '../../global.php';
require_once '../../dao/hang-hoa.php';


if (exist_param("gioi-thieu")) {
    $_SESSION['name_page'] = 'gioi_thieu';
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
    //
} else if (exist_param("san-pham")) {

    $_SESSION['name_page'] = 'san_pham';
    header("location: $SITE_URL/hang-hoa/liet-ke.php");
} else if (exist_param("lien-he")) {

    $_SESSION['name_page'] = 'lien_he';

    $VIEW_NAME = "trang-chinh/lien-he.php";
    //
} else if (exist_param("hoi-dap")) {
    $_SESSION['name_page'] = 'hoi_dap';
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
    //
} else {
    $_SESSION['name_page'] = 'trang_chu';
    $items = hang_hoa_select_dac_biet();
    $top10 = hang_hoa_select_top10();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}

require '../layout.php';
