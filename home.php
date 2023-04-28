<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
		<main class="main">
			<section class="top _ibg">
				<div class="top__container">
					<img src="<?php  the_field('top-image'); ?>" alt="car">
					<h1 class="top__title"><?php the_field('title'); ?></h1>
					<div class="top__decore decore">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<p class="top__subtitle"><?php the_field('subtitle'); ?></p>
					<a href="#_services" class="top__button button">наши услуги</a>
				</div>
				<div class="top__info">
					<div class="top__info-item">
						<h4 class="top__info-title">адрес:</h4>
						<div class="top__info-subtitle">
							<?php the_field('address'); ?>
						</div>
					</div>
					<div class="top__info-item">
						<h4 class="top__info-title">телефон:</h4>
						<a href="tel:<?php the_field('number_for_attribute'); ?>" class="top__info-link"><?php the_field('phone'); ?></a>
						<a href="tel:<?php the_field('phone_two'); ?>" class="top__info-link"><?php the_field('phone_two'); ?></a>
					</div>
					<div class="top__info-item">
						<h4 class="top__info-title">режим работы:</h4>
						<div class="top__info-subtitle"><?php the_field('workink_hourse'); ?></div>
					</div>

				</div>
			</section>
			<section class="progress">
				<div class="progress__container">
					<div class="progress__info">
						<h2 class="progress__title">наши достижения от кубка россии до чемпионатов мира</h2>
						<div class="progress__decore decore">
							<span></span><span></span><span></span><span></span>
						</div>
						<p class="progress__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant
							tincidunt aliquam tincidunt pretium sodales. Tristique odio pellentesque et tincidunt posuere arcu
							purus lobortis risus. Urna, ut amet odio orci magnis praesent ultrices. Praesent malesuada lacus
							tellus tristique sit at. Sed viverra nulla nam arcu, non iaculis pretium, volutpat.
						</p>
					</div>
					<div class="progress__columns">
						<div class="progress__column">
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
						</div>
						<div class="progress__column">
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
							<div class="progress__column-item">
								<div class="progress__column-number">#1</div>
								<p class="progress__column-description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque dui
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="slider-works">
				<div class="slider-works__container">
					<div class="slider-works__swiper swiper">
						<div class="slider-works__wrapper swiper-wrapper">
									<?php
										global $post;
										$myposts = get_posts([ 
											'numberposts' => -1,
											// 'offset'      => 1,
											// 'category'    => 1
										]);
										if( $myposts ){
											foreach( $myposts as $post ){
												setup_postdata( $post );
									?>
												<!-- Вывод постов, функции цикла: the_title() и т.д. -->
												<div class="slider-works__slide swiper-slide">
													<!-- <?php the_title('<h2 class="slider-works__title">', '</h2>', true); ?> -->
													<h2 class="slider-works__title"><?php the_title(); ?></h2>
													<?php the_post_thumbnail('', array('class' => 'slider-works__img')); ?>
													<div class="slider-works__decore"><?php the_content(); ?>
													</div>
												</div>
									<?php 
											}
										}
										wp_reset_postdata(); // Сбрасываем $post
									?>
						</div>
					</div>
					<div class="slider-works__prev swiper-button-prev buttonSlider"></div>
					<div class="slider-works__next swiper-button-next buttonSlider"></div>
				</div>
			</section>
			<section class="benefits">
				<div class="benefits__container">
					<div class="benefits__items">
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/01.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">материалы от лучших компаний</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium, rutrum
								est, molestie proin tristique duis sed. Morbi suspendisse amet nisl vestibulum risus. Quis
								pretium

							</p>
						</div>
						<div class="benefits__decore decore">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/02.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">Опытные мастера</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et donec
								elementum egestas vitae ullamcorper. Amet volutpat ornare pharetra amet adipiscing orci, lectus
								aenean ultricies. Erat viverra eget blandit ornare. Molestie ipsum commodo faucibus rhoncus
							</p>
						</div>
						<div class="benefits__decore decore">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/03.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">Гарантия на все виды работы</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
								volutpat.
							</p>
						</div>
					</div>
					<div class="benefits__slider">
						<div class="benefits__slider-swiper swiper">
							<div class="benefits__slider-wrapper swiper-wrapper">
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
							</div>
							<div class="benefits__slider-prev buttonSlider"></div>
							<div class="benefits__slider-next buttonSlider"></div>
						</div>

					</div>
				</div>
			</section>
			<section class="services" >
				<a name="_services"></a>
				<div class="services__container">
					<h2 class="services__title">Наши услуги</h2>
					<div class="services__decore decore">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="services__btns">
						<a href="#" class="services__button button">Оклейка</a>
						<a href="#" class="services__button button">Детейлинг</a>
					</div>
				</div>
			</section>
			<div class="gds">
				<div class="gds__container">
					<div class="gds__item">
						<div class="gds__icon"><img src="<?php bloginfo('template_url');?>/assets/img//gds/01.svg" alt=""></div>
						<div class="gds__title">Защитные пленки</div>
						<div class="gds__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices
							pellentesque vulputate sit. Ut feugiat.
						</div>
						<a href="#" class="gds__button button">подробнее</a>
					</div>
					<div class="gds__item">
						<div class="gds__icon"><img src="<?php bloginfo('template_url');?>/assets/img//gds/02.svg" alt=""></div>
						<div class="gds__title">Защитные пленки</div>
						<div class="gds__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices
							pellentesque vulputate sit. Ut feugiat.
						</div>
						<a href="#" class="gds__button button">подробнее</a>
					</div>
					<div class="gds__item">
						<div class="gds__icon"><img src="<?php bloginfo('template_url');?>/assets/img//gds/03.svg" alt=""></div>
						<div class="gds__title">Защитные пленки</div>
						<div class="gds__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices
							pellentesque vulputate sit. Ut feugiat.
						</div>
						<a href="#" class="gds__button button">подробнее</a>
					</div>
					<div class="gds__item">
						<div class="gds__icon"><img src="<?php bloginfo('template_url');?>/assets/img//gds/04.svg" alt=""></div>
						<div class="gds__title">Защитные пленки</div>
						<div class="gds__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nascetur ultrices
							pellentesque vulputate sit. Ut feugiat.
						</div>
						<a href="#" class="gds__button button">подробнее</a>
					</div>
				</div>
			</div>
			<section class="benefits">
				<div class="benefits__container">
					<div class="benefits__slider">
						<div class="benefits__slider-swiper swiper">
							<div class="benefits__slider-wrapper swiper-wrapper">
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image2.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image2.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
								<div class="benefits__slider-slide swiper-slide">
									<img src="<?php bloginfo('template_url');?>/assets/img//benefits/image2.jpg" alt="img" class="benefits__slider-image">
									<p class="benefits__slider-description">Lorem ipsum dolor sit amet, consectetur adipiscing
										elit.
										Pellentesque auctor nibh feugiat est. Consectetur lectus.
									</p>
								</div>
							</div>
							<div class="benefits__control">
								<div class="benefits__slider-prev buttonSlider"></div>
								<div class="benefits__slider-next buttonSlider"></div>
							</div>
						</div>
					</div>
					<div class="benefits__items">
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/04.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">100% полироль axem</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium, rutrum
								est, molestie proin tristique duis sed. Morbi suspendisse amet nisl vestibulum risus. Quis
								pretium

							</p>
						</div>
						<div class="benefits__decore decore">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/01.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">выполняем работу четко по тз</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et donec
								elementum egestas vitae ullamcorper. Amet volutpat ornare pharetra amet adipiscing orci, lectus
								aenean ultricies. Erat viverra eget blandit ornare. Molestie ipsum commodo faucibus rhoncus
							</p>
						</div>
						<div class="benefits__decore decore">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="benefits__item">
							<img src="<?php bloginfo('template_url');?>/assets/img//benefits/02.svg" alt="icon-benefits" class="benefits__icon">
							<h3 class="benefits__title">у нас лучшие мастера</h3>
							<p class="benefits__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
								volutpat.
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="ourworks">
				<h2 class="ourworks__title">Наши работы</h2>
				<div class="ourworks__decore decore">
					<span></span><span></span><span></span><span></span>
				</div>
				<div class="ourworks__gallery">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/01.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/02.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/03.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/04.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/05.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/06.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/05.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/01.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/04.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/03.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/05.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/06.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/01.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/02.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/05.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/04.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/01.jpg" alt="work">
					<img src="<?php bloginfo('template_url');?>/assets/img//ourworks/gallery/06.jpg" alt="work">
				</div>
			</section>
			<section class="ouranswer">
				<div class="ouranswer__container">
					<h2 class="ouranswer__title">ответим на любой вопрос</h2>
					<div class="ouranswer__decore decore"><span></span><span></span><span></span><span></span></div>
					<form action="#" class="ouranswer__form">
					<?php echo do_shortcode('[contact-form-7 id="42" title="Контактная форма"]') ?>
						<textarea name="question" class="ouranswer__question" cols="30" rows="10"
							placeholder="Вопрос по дизайну, тюнингу и др."></textarea>
						<div class="ouranswer__social">
							<a href="<?php the_field('telegramm') ?>" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/twitter.svg" alt="twitter"></a>
							<a href="<?php the_field('you_tube') ?>" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/youtube.svg" alt="yuutobe"></a>
							<a href="<?php the_field('vk') ?>" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/vk.svg" alt="vk"></a>
						</div>
						<div class="ouranswer__contacts">
							<a href="#" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/point.svg" alt="point"><span>Eu
									faucibus et rutrum fringilla orci nunc</span></a>
							<a href="tel:<?php the_field('phone'); ?>" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/tel.svg"
									alt="tel"><span><?php the_field('phone'); ?></span></a>
							<a href="mail:test@test.ru" class="ouranswer__link"><img src="<?php bloginfo('template_url');?>/assets/img//ouranswer/icons/message.svg"
									alt="message"><span>test@test.ru</span></a>
						</div>
					</form>
				</div>
			</section>
		</main>
<?php get_footer(); ?>