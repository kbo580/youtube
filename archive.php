<?php get_header(); ?>
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
<?php get_footer(); ?> 