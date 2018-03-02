{include file="ti/header.tpl" header=$header}
<h2 class="accessibility_only">{$header.title}</h2>
<nav>
	<h2 class="accessibility_only">{$text.titulo_nav}</h2>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/ti">TI</a></li>
		<li><a href="/ti/complete">Completo</a></li>
		<li><a href="/ti/resume">Resumido</a></li>
		<li><a>Contato</a></li>
	</ul>
</nav>

<header>
	<section>
		<div>
			<img itemprop="image" src={'/assets/images/ti/rodrigo.jpg'|base_url} alt="{$text.alt_photo}">
		</div>
		<div>
			<h1 translate="no" itemprop="name">Rodrigo Ferreira Valentim</h1>
			<span itemprop="birthPlace">{$text.nacionalidade}</span>
			<time itemprop="birthday" datetime="1981-05-25 23:54">{$text.nascimento}</time>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span translate="no" itemprop="streetAddress">{$text.endereco}</span>
				<span translate="no" itemprop="addressLocality">{$text.cidade}</span>,
				<span itemprop="addressRegion">{$text.estado}</span>
				<span itemprop="postalCode">{$text.cep}</span><br>
				<span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
					<span itemprop="name">{$text.pais}</span>
				</span>
			</span>
			<span itemprop="telephone"><mark>{$text.mobile}</mark></span>
		</div>
		<div>
			<figure>
				<img itemprop="image" src={'/assets/images/ti/logo_rodrigo_valentim.jpg'|base_url} alt="{$text.alt_photo}">
				<figcaption>Logo</figcaption>
			</figure>
		</div>
	</section>
</header>

<main >
	<section itemprop="alumni" itemscope itemtype="http://schema.org/Offer">
		<h2 class="accessibility_only">{$text.titulo_objetivo}</h2>
		<details>
			<summary>
				<span>{$text.titulo_objetivo}</span>
			</summary>
			<span itemprop="businessFunction">{$text.objetivo_desc}</span>
			<span itemprop="makesOffer">{$text.objetivo_desc}</span>
		</details>
	</section>

	<section itemprop="Organization" itemscope itemtype="http://schema.org/CollegeOrUniversity">
		<h2 class="accessibility_only">{$text.titulo_escolaridade}</h2>
		<details>
			<summary>
				<span>{$text.titulo_escolaridade}</span>
			</summary>
			<span itemprop="award">{$text.escola3_curso}</span>
			<span translate="no" itemprop="name">{$text.escola3_nome}</span>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span translate="no" itemprop="addressLocality">{$text.escola3_cidade}</span>
				<span itemprop="addressRegion">{$text.escola3_estado}</span>
				<span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
					<span itemprop="name">{$text.escola3_pais}</span>
				</span>
			</span>
			<span itemprop="startDate">{$text.escola1_data}</span>
			<span itemprop="review">{$text.escola3_situacao}</span>

			<span itemprop="award">{$text.escola2_curso}</span>
			<span translate="no" itemprop="name">{$text.escola2_nome}</span>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span translate="no" itemprop="addressLocality">{$text.escola2_cidade}</span>
				<span itemprop="addressRegion">{$text.escola2_estado}</span>
				<span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
					<span itemprop="name">{$text.escola2_pais}</span>
				</span>
			</span>
			<span itemprop="startDate">{$text.escola2_data}</span>
			<span itemprop="review">{$text.escola2_situacao}</span>

			<span itemprop="award">{$text.escola1_curso}</span>
			<span translate="no" itemprop="name">{$text.escola1_nome}</span>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span translate="no" itemprop="addressLocality">{$text.escola1_cidade}</span>
				<span itemprop="addressRegion">{$text.escola1_estado}</span>
				<span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
					<span itemprop="name">{$text.escola1_pais}</span>
				</span>
			</span>
			<span itemprop="startDate">{$text.escola1_data}</span>
			<span itemprop="review">{$text.escola1_situacao}</span>
		</details>
	</section>

	<section itemscope itemtype="http://schema.org/EducationalOrganization">
		<h2 class="accessibility_only">{$text.titulo_cursos}</h2>
		<details>
			<summary>
				<span>{$text.titulo_cursos}</span>
			</summary>
			<span itemprop="award">{$text.curso1_nome}</span>
			<span translate="no" itemprop="name">{$text.curso1_entidade}</span>

			<span itemprop="award">{$text.curso2_nome}</span>
			<span translate="no" itemprop="name">{$text.curso2_entidade}</span>
		</details>
	</section>

	<section itemscope itemtype="http://schema.org/Action">
		<h2 class="accessibility_only">{$text.titulo_resumo}</h2>
		<details>
			<summary>
				<span>{$text.titulo_resumo}</span>
			</summary>
			<ul>
				<li itemprop="instrument">{$text.resumo1}</li>
				<li itemprop="instrument">{$text.resumo2}</li>
				<li itemprop="instrument">{$text.resumo3}</li>
				<li itemprop="instrument">{$text.resumo4}</li>
			</ul>
		</details>
	</section>

	<section>
		<h2 class="accessibility_only">{$text.titulo_experiencia}</h2>
		<details>
			<summary>
				<span>{$text.titulo_experiencia}</span>
			</summary>
			<section>
				<details itemprop="worksFor" itemscope itemtype="http://schema.org/Organization">
					<summary>
						<span translate="no" itemprop="legalName">{$text.exp1_empresa}</span>
					</summary>
					<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<span translate="no" itemprop="addressLocality">{$text.exp1_cidade}</span>
						<span itemprop="addressRegion">{$text.exp1_estado}</span>
						<span itemprop="addressCountry" itemscope itemtype="http://schema.org/Country">
							<span itemprop="name">{$text.exp1_pais}</span>
						</span>
					</span>
					<span itemprop="jobTitle">{$text.exp1_cargo}</span>
					<span><time datetime="{$text.exp1_periodo}">{$text.exp1_data}</time></span>
			             	<dl>
			             		<dt> <span itemprop="jobTitle">{$text.exp1_detalhe1}</span> </dt>
			             		<dt> <span itemprop="jobTitle">{$text.exp1_detalhe2}</span> </dt>
			             		<dt> <span itemprop="jobTitle">{$text.exp1_detalhe3}</span> </dt>
			             		<dt> <span itemprop="jobTitle">{$text.exp1_detalhe4}</span> </dt>
			             	</dl>
				</details>
			</section>
		</details>
	</section>

	<section>
		<h2 class="accessibility_only">{$text.titulo_resumo}</h2>
		<details>
			<summary>
				<span>{$text.titulo_resumo}</span>
			</summary>
			<ul>
				<li itemprop="instrument">{$text.resumo1}</li>
				<li itemprop="instrument">{$text.resumo2}</li>
				<li itemprop="instrument">{$text.resumo3}</li>
				<li itemprop="instrument">{$text.resumo4}</li>
			</ul>
		</details>
	</section>

	<section>
		<h2 class="accessibility_only">{$text.titulo_observacoes}</h2>
		<details>
			<summary>
				<span>{$text.titulo_observacoes}</span>
			</summary>
			<ul>
				<li itemprop="areaServed">{$text.obs1}</li>
				<li itemprop="description">{$text.obs2}</li>
				<li itemprop="description">{$text.obs3}</li>
				<li itemprop="description">{$text.obs4}</li>
			</ul>
		</details>
	</section>
</main>

<aside>
	<h2 class="accessibility_only">{$text.titulo_aside}</h2>
	<ul>
		<li><a href="courses.html">Portugues</a></li>
		<li><a href="fees.html">Ingles</a></li>
		<li><a>Imprimir</a></li>
		<a href="curriculum.pdf" download="Rodrigo Valentim - Curriculum Vitae.pdf"> download </a>
	</ul>
</aside>
{include file="footer.tpl"}
