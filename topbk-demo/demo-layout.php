<?php
/* Template Name: Demo Layout */
// Debug: Add a comment to verify this template is being loaded
$theme_uri = get_stylesheet_directory_uri();
get_header();
?>
<main class="demo-layout">
<div class="bm-container">
		<header class="header">
			<h1 class="desktop-title">Топ букмекерских контор</h1>
			<h1 class="mobile-title">Рейтинг букмекерских контор</h1>
			<div class="menu-icon" role="button" aria-label="Открыть меню">
                <img class="menu-icon-img" src="<?php echo $theme_uri; ?>/images/more_vertical.svg" alt="" width="24" height="24">
            </div>
		</header>

		<section class="block-group">
			<div class="block block-selected">Народный рейтинг</div>
			<div class="block">Рейтинг редакции</div>
			<div class="block">Рейтинг по бонусу</div>
			<div class="block">Рейтинг по надежности</div>
		</section>

		<section class="bm-table-wrap">
			<table class="rating-table" role="table" aria-label="Рейтинг букмекеров">
				<thead class="visually-hidden">
					<tr>
						<th>БК</th>
						<th>Оценка</th>
						<th>Отзывы</th>
						<th>Бонусы</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo.png" alt="Логотип букмекера 1" class="logo">
								<img src="<?php echo $theme_uri; ?>/images/Ok.svg" alt="Verified" class="ok-icon">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 4.9 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <span class="score">4.9</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">325</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
                                <div class="exclusive-label">Эксклюзив</div>
                                <div class="icon-text">
                                    <img src="<?php echo $theme_uri; ?>/images/gift.svg" alt="" class="icon-text__img" width="16" height="16">
                                    <span class="icon-text__label">25K ₽</span>
                                </div>
                            </div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>

					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo2.png" alt="Логотип букмекера 2" class="logo">
								<img src="<?php echo $theme_uri; ?>/images/Ok.svg" alt="Verified" class="ok-icon">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 4.8 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <span class="score">4.8</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">123</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
                                <div class="no-deposit-label">Без депозита</div>
								<div class="icon-text">
                                    <img src="<?php echo $theme_uri; ?>/images/gift.svg" alt="" class="icon-text__img" width="16" height="16">
                                    <span class="icon-text__label">101K ₽</span>
                                </div>
							</div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>

					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo3.png" alt="Логотип букмекера 3" class="logo">
								<img src="<?php echo $theme_uri; ?>/images/Ok.svg" alt="Verified" class="ok-icon">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 4.7 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <span class="score">4.7</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">325</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
								<div class="icon-text">
                                    <img src="<?php echo $theme_uri; ?>/images/gift.svg" alt="" class="icon-text__img" width="16" height="16">
                                    <span class="icon-text__label">10K ₽</span>
                                </div>
							</div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>

					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo4.png" alt="Логотип букмекера 4" class="logo">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 4.6 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <span class="score">4.6</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">43</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
								<div class="img-stack">
                                    <div class="no-bonus-label">Нет бонуса</div>
                                </div>
							</div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>

					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo5.png" alt="Логотип букмекера 5" class="logo">
								<img src="<?php echo $theme_uri; ?>/images/Ok.svg" alt="Verified" class="ok-icon">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 4.5 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star-empty.svg" alt="" width="20" height="20">
                                <span class="score">4.5</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">34</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
								<div class="img-stack">
                                    <div class="no-deposit-label">Без депозита</div>
                                </div>
								<div class="icon-text">
                                    <img src="<?php echo $theme_uri; ?>/images/gift.svg" alt="" class="icon-text__img" width="16" height="16">
                                    <span class="icon-text__label">2.5K ₽</span>
                                </div>
							</div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>

					<tr>
						<td class="col-logo">
							<div class="logo-container">
								<img src="<?php echo $theme_uri; ?>/images/bookmaker-logo.png" alt="Логотип букмекера 6" class="logo">
								<img src="<?php echo $theme_uri; ?>/images/Ok.svg" alt="Verified" class="ok-icon">
							</div>
						</td>
						<td class="col-rating">
							<div class="stars" aria-label="Рейтинг 5 из 5">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <img class="star" src="<?php echo $theme_uri; ?>/images/Star.svg" alt="" width="20" height="20">
                                <span class="score">5</span>
                            </div>
						</td>
						<td class="col-reviews">
							<div class="reviews">
								<img class="star" src="<?php echo $theme_uri; ?>/images/rev.svg" alt="" width="20" height="20">
								<span class="reviews-count">109</span>
							</div>
						</td>
						<td class="col-bonuses">
							<div class="img-stack">
								<div class="icon-text">
                                    <img src="<?php echo $theme_uri; ?>/images/gift.svg" alt="" class="icon-text__img" width="16" height="16">
                                    <span class="icon-text__label">9.9K ₽</span>
                                </div>
							</div>
						</td>
						<td class="col-actions">
							<div class="actions">
								<button class="btn btn-outline">Обзор</button>
								<button class="btn btn-primary">Сайт</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="below-bar">
			<div class="left">
				<span>Смотреть дальше</span>
				<img class="next-icon" src="<?php echo $theme_uri; ?>/images/arrow.svg" alt="">
			</div>
			<div class="right">
				<a href="#">Как формируется рейтинг?</a>
			</div>
		</section>
	</div>

	<!-- Mobile container for "SEE FULL RATING" -->
	<div class="mobile-full-rating">
		<span>СМОТРЕТЬ ПОЛНЫЙ РЕЙТИНГ</span>
	</div>

</main>
<?php get_footer(); ?>
