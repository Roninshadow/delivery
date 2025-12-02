<?php get_header(); ?>
		<section class="hero" id="hero">
			<div class="container">
				<div class="hero-wrapper">
					<div class="hero__content">
						<h1 class="hero__title">Аналитический психолог онлайн</h1>
						<p class="hero__subtitle"><?php echo nl2br(get_field('hero_title')) ?></p>
						<?php if( have_rows('hero_description-list') ): ?>
							<ul class="hero__about-list">
							<?php while( have_rows('hero_description-list') ): the_row(); 
								// переменные
								$content = get_sub_field('description-item');
								?>
								<li class="hero__about-item">
								  <?php echo $content; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<button class="hero__btn record"><?php the_field('text-btn', 'option') ?></button>
						<p class="hero__subtext"><?php echo nl2br(get_field('hero_subtext')) ?></p>
					</div>
		      <img src="<?php the_field('hero_image') ?>" alt="" class="hero__image">
				</div>
			</div>
		</section>
		<section class="problems" id="problems">
			<div class="container">
				<h2 class="problems__title"><?php the_field('problems_title') ?></h2>
				<?php if( have_rows('problems_problems-list') ): ?>
					<ul class="problems__list">
					<?php while( have_rows('problems_problems-list') ): the_row(); 
						// переменные
						$title = get_sub_field('problems-item-title');
						$subtitle = get_sub_field('problems-item-subtitle');
						?>
						<li class="problems__item">
							<p class="problems__item-title"><?php echo $title; ?></p>
							<p class="problems__item-subtitle"><?php echo $subtitle; ?></p>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<div class="problems-slider swiper-container">
					<?php if( have_rows('problems_problems-list') ): ?>
					<div class="problems__list-slider swiper-wrapper">
					<?php while( have_rows('problems_problems-list') ): the_row(); 
						// переменные
						$title = get_sub_field('problems-item-title');
						$subtitle = get_sub_field('problems-item-subtitle');
						?>
						<div class="problems__item-slider swiper-slide">
							<p class="problems__item-slider-title"><?php echo $title; ?></p>
							<p class="problems__item-slider-subtitle"><?php echo $subtitle; ?></p>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="process">
			<div class="container">
				<h2 class="process__title"><?php the_field('process_title') ?></h2>
				<div class="process-wrapper">
					<img src="<?php the_field('process_image') ?>" alt="" class="process__image" />
					<div class="process__content">
						<p class="process__content-title title-wrapper"><?php the_field('process_title1') ?></p>
						<?php if( have_rows('process_list1') ): ?>
							<ul class="process__content-list">
							<?php while( have_rows('process_list1') ): the_row(); 
								// переменные
								$title = get_sub_field('item1');?>
								<li class="process__content-item">
									<?php echo $title; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<p class="process__content-title title-wrapper"><?php the_field('process_title2') ?></p>
						<?php if( have_rows('process_list2') ): ?>
							<ul class="process__content-list">
							<?php while( have_rows('process_list2') ): the_row(); 
								// переменные
								$title = get_sub_field('item2');
								?>
								<li class="process__content-item">
									<?php echo $title; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<p class="process__content-title title-wrapper"><?php the_field('process_title3') ?></p>
						<?php if( have_rows('process_list3') ): ?>
							<ul class="process__content-list">
							<?php while( have_rows('process_list3') ): the_row(); 
								// переменные
								$title = get_sub_field('item3');
								?>
								<li class="process__content-item">
									<?php echo $title; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<button class="process__content-btn record"><?php the_field('text-btn', 'option') ?></button>
					</div>
				</div>
			</div>
		</section>
		<section class="faq" id="faq">
			<div class="container">
				<h2 class="faq__title"><?php the_field('faq_title') ?></h2>
				<?php if( have_rows('faq_faq') ): ?>
					<ul class="faq__list">
					<?php while( have_rows('faq_faq') ): the_row(); 
						// переменные
						$question = get_sub_field('question');
						$answer = get_sub_field('answer');?>
						<li class="faq__item">
									
							<p class="faq__item-question"><?php echo $question; ?></p>
							<p class="faq__item-answer">
							<?php echo $answer; ?>
							</p>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<button class="faq__btn record"><?php the_field('text-btn', 'option') ?></button>
			</div>
		</section>
		<section class="posts" id="posts">
			<div class="container">
				<h2 class="posts__title"><?php the_field('posts_title') ?></h2>
				<?php
				// Настройка запроса для получения последних записей
				$args = array(
				    'post_type'      => 'post',
				    'posts_per_page' => 6, // Количество записей
				    'post_status'    => 'publish'
				);
				
				$query = new WP_Query($args);
				?>
				
				<?php if ($query->have_posts()) : ?>
				    <ul class="posts_list">
				        <?php while ($query->have_posts()) : $query->the_post(); ?>
				            <li class="posts__item">
				                <a href="<?php the_permalink(); ?>"> <!-- Ссылка на полную запись -->
				                    <!-- Превью (изображение) -->
				                    <?php if (has_post_thumbnail()) : ?>
				                        <?php the_post_thumbnail('medium', ['class' => 'posts__item-image']); ?>
				                    <?php else : ?>
				                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post-image.jpg" alt="" class="posts__item-image" />
				                    <?php endif; ?>
														
				                    <!-- Заголовок -->
				                    <p class="posts__item-title"><?php the_title(); ?></p>
														
				                    <!-- Дата публикации -->
				                    <p class="posts__item-date"><?php echo get_the_date('d.m.Y'); ?></p>
				                </a>
				            </li>
				        <?php endwhile; ?>
				        <?php wp_reset_postdata(); // Сброс данных запроса ?>
				    </ul>
				<?php else : ?>
				    <p>Записей нет.</p>
				<?php endif; ?>
			</div>
		</section>
		<section class="about" id="about">
			<div class="container">
				<div class="about-wrapper">
					<div class="about__content">
						<h1 class="about__title">Аналитический психолог онлайн</h1>
						<p class="about__subtitle"><?php echo nl2br(get_field('hero_title')) ?></p>
						<?php if( have_rows('about_description-list') ): ?>
							<ul class="about__about-list">
							<?php while( have_rows('about_description-list') ): the_row(); 
								// переменные
								$content = get_sub_field('description-item');
								?>
								<li class="about__about-item">
								  <?php echo $content; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						<button class="about__btn record"><?php the_field('text-btn', 'option') ?></button>
						<p class="about__subtext"><?php echo nl2br(get_field('hero_subtext')) ?></p>
					</div>
					<div>
						<img src="<?php the_field('about_image') ?>" alt="" class="about__image" />
						<?php if (have_rows('about_sertificats')) :?>
						  <ul class="about__sertificats">
						    <?php while (have_rows('about_sertificats')) : the_row();
						      $image = get_sub_field('sertificat');
						      if ($image) : ?>
						        <li class="about__sertificat">
						          <img 
						            src="<?php echo esc_url($image); ?>" 
						            alt="" 
						            class="sertificat__image"
						          >
						        </li>
						      <?php endif;
						    endwhile; ?>
						  </ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
    <?php get_footer(); ?>