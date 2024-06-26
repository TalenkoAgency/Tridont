<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TalenkoTheme
 */

get_header();
?>

	<main  class="container error-page spacing-top spacing-bottom">

		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
				<div class="error-page-content">
					<div class="error-page-titles">
						<h1 class="heading with-clip">Ju kërkojmë falje, faqja që kërkuat nuk u gjenditet!</h1>
						<p class="body-text">Klikoni linkun më poshtë për tu kthyer në ballinë</p>
					</div>

					<div class="error-page-link">
					<a href="/" class="linear-link">
                                        <span>Ballina</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                        <path d="M6.31449 6.96295C6.60739 6.67005 6.60739 6.19518 6.31449 5.90229L1.54152 1.12932C1.24863 0.836423 0.773756 0.836424 0.480863 1.12932C0.18797 1.42221 0.18797 1.89708 0.480863 2.18998L4.7235 6.43262L0.480864 10.6753C0.187971 10.9682 0.187971 11.443 0.480864 11.7359C0.773757 12.0288 1.24863 12.0288 1.54152 11.7359L6.31449 6.96295ZM5.68896 7.18262L5.78416 7.18262L5.78416 5.68262L5.68896 5.68262L5.68896 7.18262Z" fill="white"/>
                                        </svg>
                                    </a>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php
get_footer();
