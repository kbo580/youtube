<?php get_header() ; ?>
<div id="content" class="page_front inner">
    <section class="front_service">
        <div class="sec_head">サービス</div>
        <div class="lead">ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</div>
        <ul class="s_box">
            <li>
                <div class="ttl">ホームページ制作</div>
                <div class="descri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</div>
            </li>
            <li>
                <div class="ttl">ランディングページ制作</div>
                <div class="descri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</div>
            </li>
            <li>
                <div class="ttl">SEOコンサルティング</div>
                <div class="descri">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</div>
            </li>
        </ul>
    </section>

    <section class="front_news">
        <div class="sec_head">お知らせ</div>
        <div class="news_list">
        <ul>
        <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <div class="date"><?php the_time('Y.m.d'); ?></div>
                <div><?php the_title(); ?></div>
            </a>
        </li>
    <?php endwhile; ?>
    <?php else : ?>
    <h2>お探しのページはありません</h2>
    <?php endif; ?>
        </ul>
            <div class="btn_stn"><a href="<?php bloginfo('url'); ?>/news">一覧をみる</a></div>
        </div>
    </section>
</div>

</main>
<?php get_footer() ; ?>