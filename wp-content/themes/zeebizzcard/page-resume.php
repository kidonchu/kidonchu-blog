<?php get_header() ?>

	<div class="content">

		<?php if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<div class="breadcrumbs">','</div>');
		} ?>

		<div id="page-<?php the_ID() ?>" <?php post_class() ?>>

			<div class="resume-name">KidonChu <span class="mute">extends</span> WebDeveloper {</div>

			<div class="resume-email"><span class="mute">public $email = </span>kidonchu@gmail.com</div>

			<section class="resume-section">
				<header class="resume-section-header">
					SUMMARY OF QUALIFICATIONS
				</header>
				<ul class="resume-list">
					<li>Object Oriented PHP / MySQL web developer</li>
					<li>4+ years developing for Web</li>
					<li>Self-motivator, Self-starter, Team player</li>
					<li>Meticulous, Reliable, Detail-oriented</li>
					<li>Suited to fast-paced environment with multiple projects</li>
					<li>Excellent oral / written communication skills</li>
				</ul>
			</section>

			<section class="resume-section">

				<header class="resume-section-header">
					EXPERIENCE
				</header>

				<div class="resume-experience">
					<div class="resume-experience-jobtitle">Systems Programmer</div>
					<div class="resume-experience-company">Sterling Trader, Inc., Chicago, IL</div>
					<div class="resume-experience-date">August 2012 - Present</div>
					<div class="resume-experience-content">
						<ul class="resume-list">
							<li>Install and maintain LAMP stacks on multiple Fedora servers.</li>
							<li>Develop 40+ web applications in PHP to benefit compliance and support teams efficiency</li>
							<li>Develop trade report Windows programs with MFC library</li>
						</ul>
					</div>
				</div>

				<div class="resume-experience">
					<div class="resume-experience-jobtitle">Intern</div>
					<div class="resume-experience-company">POSCO ICT, Pangyo, South Korea</div>
					<div class="resume-experience-date">June 2011 - August 2011</div>
					<div class="resume-experience-content">
						<ul class="resume-list">
							<li>Analyzed cloud service market data and business models</li>
							<li>Documented Learned technical writing skills while working with project proposals and documents</li>
						</ul>
					</div>
				</div>

				<div class="resume-experience">
					<div class="resume-experience-jobtitle">Web Developer</div>
					<div class="resume-experience-company">Picaresque.org, Madison, WI</div>
					<div class="resume-experience-date">April 2010 - May 2011</div>
					<div class="resume-experience-content">
						<ul class="resume-list">
							<li>Developed entire blog with self-taught HTML, CSS, PHP, and Word Press</li>
							<li>Incorporated technical considerations from CEO into website design plans</li>
						</ul>
					</div>
				</div>

				<div class="resume-experience">
					<div class="resume-experience-jobtitle">Web Developer & Vice president</div>
					<div class="resume-experience-company">ULSSU, Madison, WI</div>
					<div class="resume-experience-date">June 2009 - August 2011</div>
					<div class="resume-experience-content">
						<ul class="resume-list">
							<li>Developed new club website with HTML/CSS, implemented automatic performance request feature, and increased number of performance request by 20%</li>
							<li>Volunteered in Elementary school programs with performances, and raised $500 of donation</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="resume-section">
				<header class="resume-section-header">
					EDUCATION
				</header>
				<div class="resume-experience">
					<div class="resume-experience-jobtitle">B.S. in Computer Engineering</div>
					<div class="resume-experience-company">University of Wisconsin-Madison, Madison, WI</div>
					<div class="resume-experience-date">2012</div>
				</div>
			</section>

			<section class="resume-section">

				<header class="resume-section-header">
					SKILLS
				</header>

				<div class="resume-skill-legend cf">
					<div class="resume-skill-legend-item">
						<span class="resume-skill-star-one"></span>: familiar
					</div>
					<div class="resume-skill-legend-item">
						<span class="resume-skill-star-two"></span>: decent
					</div>
					<div class="resume-skill-legend-item">
						<span class="resume-skill-star-three"></span>: exceptional
					</div>
				</div>

				<div class="resume-skill-category">Programming Languages</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">PHP</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">4 years</td>
						</tr>
						<tr>
							<td class="skill">C</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">2 years</td>
						</tr>
						<tr>
							<td class="skill">C++</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">2 years</td>
						</tr>
						<tr>
							<td class="skill">Ruby</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">Python</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">6 months</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">User Interface</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">HTML</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">4 years</td>
						</tr>
						<tr>
							<td class="skill">CSS</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">4 years</td>
						</tr>
						<tr>
							<td class="skill">Javascript</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">2 years</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">Servers/Platforms</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">WAMP/LAMP</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">4 years</td>
						</tr>
						<tr>
							<td class="skill">Wordpress</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">2 years</td>
						</tr>
						<tr>
							<td class="skill">Drupal</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 year</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">Databases/Backends</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">MySQL</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">3 years</td>
						</tr>
						<tr>
							<td class="skill">MSSQL</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">SQLite3</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">PostgreSQL</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 year</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">APIs/SDKs/Framewords</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">CodeIgniter</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">Twitter Bootstrap</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">MFC</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">Laravel</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 month</td>
						</tr>
						<tr>
							<td class="skill">Ruby on Rails</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 month</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">Applications</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">Git</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">NetBeans</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">Visual Studio</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">ApiGen</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">LaTeX</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">6 months</td>
						</tr>
					</tbody>
				</table>

				<div class="resume-skill-category">Methodologies/Concepts</div>
				<table class="resume-skill-table">
					<tbody>
						<tr>
							<td class="skill">OOP</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">4 years</td>
						</tr>
						<tr>
							<td class="skill">MVC</td>
							<td class="aptitude"><span class="resume-skill-star-three"></span></td>
							<td class="experience">2 years</td>
						</tr>
						<tr>
							<td class="skill">REST</td>
							<td class="aptitude"><span class="resume-skill-star-two"></span></td>
							<td class="experience">1 year</td>
						</tr>
						<tr>
							<td class="skill">Agile/Scrum/Lean</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">2 months</td>
						</tr>
						<tr>
							<td class="skill">SEO</td>
							<td class="aptitude"><span class="resume-skill-star-one"></span></td>
							<td class="experience">1 month</td>
						</tr>
					</tbody>
				</table>

			</section>

			<div class="resume-name">}</div>

		</div>

	</div>

<?php get_footer() ?>
