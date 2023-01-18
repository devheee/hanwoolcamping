<?
if ($board['bo_table'] == 'gal') {
    $cate_num = 3;
    $page_num = 1;
    $cate_title = '갤러리';
    $page_title = '갤러리';
} else if ($board['bo_table'] == 'nbbs') {
    $cate_num = 4;
    $page_num = 1;
    $cate_title = '고객지원';
    $page_title = '문의게시판';
} else if ($board['bo_table'] == 'pds') {
    $cate_num = 4;
    $page_num = 2;
    $cate_title = '고객지원';
    $page_title = '자료실';
} else if ($board['bo_table'] == 'nos') {
    $cate_num = 4;
    $page_num = 3;
    $cate_title = '고객지원';
    $page_title = '공지사항';
}
?>

<div id="sub">
    <div class="sub_banner" style="background-image:url(<?= G5_THEME_URL ?>/img/bg0<?= $cate_num ?>.jpg)">
        <div class="inner">
            <strong>한울캠핑카</strong>
            <span>부산 경남 캠핑카 제작 전문 업체 트럭 개조 캠핑카 주문 제작</span>
        </div>
    </div>
    <div class="sub_page">
        <div class="inner">
            <ul>
                <li>한울캠핑카</li>
                <li>
                    <?= $cate_title ?>
                </li>
                <li> <?= $page_title ?></li>
            </ul>
        </div>
    </div>
    <div class="sub_container">
        <div class="inner">
            <article class="article">
                <!-- 만약에 게시판이 있으면 게시판 타이틀을 보여주고 아니면 타이틀을 보여준다. -->
                <h3>
                    <?
                    if ($board['bo_table']) {
                        echo $board['bo_subject'];
                    } else {
                        echo $page_title;
                    }
                    ?>
                    <span> /<?= $cate_title ?></span>
                </h3>
                <div class="content">