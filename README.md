- [Axel Classic](#axel-classic)
	- [Organizacja katalogów](#organizacja-katalogów)
		-	[Katalog `assets`](#katalog-assets)
		- [Katalog `config`](#katalog-config)
		- [Katalog `templates`](#katalog-templates)
		- [Katalog `template-parts`](#katalog-template-parts)
		- [Szablony częściowe](#szablony-częściowe)
	- [Organizacja wspólnego kodu](#organizacja-wspólnego-kodu)
		- [Nagłówek](#nagłówek)
			- [Skip linki](#skip-linki)
			- [Hamburger](#hamburger)
			- [Górne menu](#górne-menu)
			- [Przełącznik trybu kontrastowego](#przełącznik-trybu-kontrastowego)
			- [Nazwa i opis strony](#nazwa-i-opis-strony)
			- [Formularz wyszukiwania](#formularz-wyszukiwania)
		- [Pętla ze skrótami wpisów](#pętla-ze-skrótami-wpisów)
			- [Skrót wpisu](#skrót-wpisu)
				- [Domyślny](#domyślny)
				- [W wynikach wyszukiwania](#w-wynikach-wyszukiwania)
			- [Paginacja](#paginacja)
			- [Informacja o braku wpisów](#informacja-o-braku-wpisów)
		- [Zasadnicza treść](#zasadnicza-treść)
			- [Tytuł strony z wpisami](#tytuł-strony-z-wpisami)
			- [Tytuł strony, wpisu lub kategorii](#tytuł-strony-wpisu-lub-kategorii)
			- [Tytuł z odnośnikiem](#tytuł-z-odnośnikiem)
			- [Data publikacji](#data-publikacji)
			- [Autor wpisu lub strony](#autor-wpisu-lub-strony)
			- [Obrazek wyróżniający](#obrazek-wyróżniający)
			- [Treść](#treść)
			- [Czytaj dalej](#czytaj-dalej)
			- [Wróć do strony głównej](#wróc-do-strony-głównej)
			- [Drukuj](#drukuj)
		- [Stopka](#stopka)
			- [Dolne menu](#dolne-menu)
			- [Wróć do góry](#wróć-do-góry)
			- [Oznaczenie autorstwa](#oznaczenie-autorstwa)
	- [Główne szablony](#główne-szablony)
		- [Lista wpisów](#lista-wpisów)
		- [Strona](#strona)
		- [Wpis](#wpis)
		- [Kategorie](#kategorie)
		- [Wyniki wyszukiwania](#wyniki-wyszukiwania)
		- [Błąd 404](#błąd-404)

---

# Axel Classic

Axel Classic to motyw startowy używany przeze mnie jako baza do przygotowywania stron internetowych opartych na WordPress. W odróżnieniu od motywu Axel zawiera dodatkowo pliki z podstawowymi stylami CSS.

Jeśli chcesz się ze mną skontaktować w kwestiach stron internetowych, wejdź na moją stronę [Reddog Systems](https://red-dog.pl) lub napisz na adres [p.bachorek@red-dog.pl](p.bachorek@red-dog.pl).

## Organizacja katalogów

```
axel-classic
├── assets
│   ├── css
│   ├── font
│   ├── img
│   ├── js
│   ├── scss
│   └── vendor
├── config
├── template-parts
│   ├── footer
│   ├── header
│   ├── loop
│   └── shared
└── templates
```

### Katalog `assets`

Zawiera wszystkie statyczne pliki używane do budowy strony takie jak fonty, obrazki, skrypty oraz style. Nazwy katalogów wyjaśniają jakie pliki są w nich przechowywane.

### Katalog `config`

Zawiera pliki konfiguracyjne motywu:

- `setup.php` - główny plik konfiguracyjny motywu,
- `menus.php` - rejestrowanie menu,
- `sidebars.php` - rejestrowanie sidebarów,
- `scripts.php` - rejestrowanie oraz dołączanie skryptów JS,
- `styles.php` - rejestrowanie oraz dołączanie styli CSS,
- `optimisation.php` - miejsce na wszelki dodatkowy kod służący do optymalizacji działania strony.

### Katalog `templates`

Zawiera wszelkie niestandardowe szablony, których domyślnie WordPress nie przewiduje.

### Katalog `template-parts`

Zawiera wszelkie szablony częściowe podzielone na podkatalogi.

### Szablony częściowe

W katalogach `header` oraz `footer` znajdują się szablony częściowe używane w nagłówku i stopce strony.

W katalogu `loop` znajdują się wszelkiego rodzaju szablony pętli pobierających wpisy.

W katalogu `shared` znajdują się wszelkie pozostałe szablony częściowe, które są dzielone przez dwa lub więcej głównych plików szablonowych.

## Organizacja wspólnego kodu

```html
<html>
	<head></head>
	<body>
		<!-- Skip linki -->

		<nav class="navbar navbar--header" aria-label="Górne menu">
			<div class="wrapper">
				<!-- Hamburger -->
				<!-- Górne menu -->
				<!-- Przełącznik trybu kontrastowego -->
			</div>
		</nav>

		<header class="header">
			<div class="wrapper">
				<!-- Nazwa i opis strony -->
				<!-- Formularz wyszukiwania -->
			</div>
		</header>

		<main class="main" id="tresc" tabindex="-1">
			<!-- Zasadnicza treść -->
		</main>

		<aside class="sidebar">
			<div class="wrapper wrapper--widgets">
				<!-- Widgety -->
			</div>
		</aside>

		<nav class="navbar navbar--header" aria-footer="Dolne menu">
			<div class="wrapper">
				<!-- Dolne menu -->
				<!-- Wróć do góry -->
			</div>
		</nav>

		<footer class="footer">
			<div class="wrapper">
				<!-- Oznaczenie autorstwa -->
			</div>
		</footer>
	</body>
</html>
```

### Nagłówek

#### Skip linki

W pliku `/template-parts/header/skip-links.php`.

```html
<a class="screen-reader-text" href="#tresc">Przejdź do treści</a>
```

#### Hamburger

W pliku `/template-parts/header/hamburger.php`.

```html
<button class="hamburger button js-hamburger" aria-controls="menu-header" aria-expanded="false">
	<span class="screen-reader-text">Pokaż/zwiń menu</span>
</button>
```

#### Górne menu

W pliku `/template-parts/header/menu-header.php`.

```html
<ul class="menu menu--header>" id="menu-header">
	<li class="item">
		<a href="">Link 1</a>
		<ul class="sub-menu">
			<li class="item"><a href="">Link 1.1</a></li>
			<li class="item"><a href="">Link 1.2</a></li>
			<li class="item"><a href="">Link 1.3</a></li>
		</ul>
	</li>
	<li class="item"><a href="">Link 2</a></li>
	<li class="item"><a href="">Link 3</a></li>
</ul>
```

#### Przełącznik trybu kontrastowego

W pliku `/template-parts/header/toggle-contrast.php`.

```html
<div class="toggle-contrast">
	<button class="toggle-contrast__button js-toggle-contrast" aria-pressed="false" data-on-label="Włącz tryb kontrastowy" data-off-label="Wyłącz tryb kontrastowy">
		<span class="screen-reader-text">Włącz tryb kontrastowy</span>
		<div class="toggle-contrast__dot"></div>
	</button>
</div>
```

#### Nazwa i opis strony

W pliku `/template-parts/header/site-name.php`.

```html
<div class="site-name">
	<h1 class="site-name__title">
		<a class="site-name__link" href="">
			<!-- Nazwa strony -->
		</a>
	</h1>
	<div class="site-name__description">
		<!-- Opis strony -->
	</div>
</div>
```

#### Formularz wyszukiwania

W pliku `/searchform.php`.

```html
<form class="search-form">
	<label class="screen-reader-text">Wyszukiwarka</label>
	<input class="search-form__input">
	<button class="search-form__button button">Szukaj</button>
</form>
```

### Pętla ze skrótami wpisów

```html
<!-- Seria skrótów wpisów -->
<!-- Paginacja -->
<!-- Informacja o braku wpisów -->
```

#### Skrót wpisu

##### Domyślny

W pliku `/template-parts/loop/excerpt-default.php`.

```html
<article class="excerpt [wygenerowane nazwy klas]" id="post-[x]" itemscope itemtype="http://schema.org/Article">
	<!-- Obrazek wyróżniający -->
	<!-- Tytuł z odnośnikiem -->
	<!-- Treść -->

	<div class="post-meta">
		<!-- Data -->
		<!-- Autor -->
	</div>
</article>
```

##### W wynikach wyszukiwania

W pliku `/template-parts/loop/excerpt-search.php`.

```html
<article class="excerpt [wygenerowane nazwy klas]" id="post-[x]" itemscope itemtype="http://schema.org/Article">
	<!-- Tytuł z odnośnikiem -->

	<div class="post-meta">
		<!-- Data -->
		<!-- Autor -->
	</div>
</article>
```

#### Paginacja

W pliku `/template-parts/loop/pagination.php`.

```html
<nav class="navigation pagination" aria-label="Wpisy">
	<h2 class="screen-reader-text">Nawigacja po wpisach</h2>
	<div class="nav-links">
		<a class="prev page-numbers" href="">1</a>
		<span class="page-numbers current" aria-label="page">2</span>
		<a class="next page-numbers" href="">3</a>
	</div>
</nav>
```

#### Informacja o braku wpisów

W pliku `/template-parts/loop/no-posts.php`.

```html
<p class="no-posts">W tej kategorii nie ma wpisów.</p>
```

### Zasadnicza treść

Ta część strony korzysta z pętli oraz ze współdzielonych szablonów cząstkowych wspólnych dla szablonów: wpisu, strony, kategorii, wyników wyszukiwania, autora, załącznika.

#### Tytuł strony z wpisami

```html
<h2 class="screen-reader-text">Tytuł</h2>
```

#### Tytuł strony, wpisu lub kategorii

W pliku `/template-parts/shared/title.php`.

```html
<h1 class="title" (itemprop="headline")>Tytuł strony, wpisu lub kategorii</h1>
```

#### Tytuł z odnośnikiem

W pliku `/template-parts/shared/title-link.php`.

```html
<(h2 lub h3) class="title" (itemprop="headline")>
	<a class="title__link" href="">Tytuł wpisu</a>
</(h2 lub h3)>
```

#### Data publikacji

W pliku `/template-parts/shared/date.php`.

```html
<time class="date" datetime="[YYYY-MM-DD HH:MM]" itemprop="datePublished">
	<span class="screen-reader-text">Opublikowano </span>3 dni temu
</time>
```

#### Autor wpisu lub strony

W pliku `/template-parts/shared/author.php`.

```html
<address class="post-author" itemscope itemtype="http://schema.org/Person" itemprop="author">
	<span itemprop="name">Jan Kowalski</span>
</address>
```

#### Obrazek wyróżniający

W pliku `/template-parts/shared/thumbnail.php`.

```html
<figure class="thumbnail" itemscope itemtype="http://schema.org/ImageObject" itemprop="thumbnail">
	<a class="thumbnail__link">
		<img class="thumbnail__image" src="" itemprop="contentUrl">
	</a>
	<figcaption class="thumbnail__caption" item-prop="caption">
		Podpis obrazka
	</figcaption>
</figure>
```

lub 

```html
<figure class="thumbnail" itemscope itemtype="http://schema.org/ImageObject" itemprop="thumbnail">
	<img class="thumbnail__image" src="" itemprop="contentUrl">
	<figcaption class="thumbnail__caption" item-prop="caption">
		Podpis obrazka
	</figcaption>
</figure>
```

w zależności od kontekstu.

#### Treść

W pliku `/template-parts/shared/content.php`.

```html
<div class="content" itemprop="articleBody">Treść</div>
```

#### Czytaj dalej

W pliku `/template-parts/shared/read-more.php`.

```html
<div class="read-more">
	<a class="read-more__link" href="" tabindex="-1">Czytaj dalej</a>
</div>
```

#### Wróć do strony głównej

W pliku `/template-parts/shared/back-to-home.php`.

```html
<a class="back-to-home" href="">Wróć do strony głównej</a>
```

#### Drukuj

W pliku `/template-parts/shared/print.php`.

```html
<button class="print js-print">Drukuj stronę</button>
```

### Stopka

#### Dolne menu

W pliku `/template-parts/footer/menu-footer.php`.

```html
<ul class="menu menu--footer>" id="menu-footer">
	<li class="item"><a href="">Link 1</a></li>
	<li class="item"><a href="">Link 2</a></li>
	<li class="item"><a href="">Link 3</a></li>
</ul>
```

#### Wróć do góry

W pliku `/template-parts/footer/scroll-to-top.php`.

```html
<button class="scroll-to-top button js-scroll-to-top">
```

#### Oznaczenie autorstwa

W pliku `/template-parts/footer/credits.php`.

```html
<div class="credits">
	<a class="credits__link" href=""></a>
</div>
```

## Główne szablony

### Lista wpisów

W pliku `/index.html`.

```html
<h2 class="screen-reader-text">Najnowsze wpisy</h2>

<div class="wrapper wrapper--excerpts">
	<!-- Pętla ze skrótami wpisów -->
</div>
```

### Strona

W pliku `/page.php`.

```html
<div class="wrapper">
	<article class="[wygenerowane nazwy klas]" id="post-[x]" itemscope itemtype="http://schema.org/Article">
		<!-- Tytuł -->
		<!-- Obrazek wyróżniający -->
		<!-- Treść -->
		
		<div class="post-meta post-meta--on-bottom">
			<!-- Wróć do strony głównej -->
			<!-- Drukuj -->
		</div>
	</article>
</div>
```

### Wpis

W pliku `/single.php`.

```html
<div class="wrapper">
	<article class="[wygenerowane nazwy klas]" id="post-[x]" itemscope itemtype="http://schema.org/Article">
		<!-- Tytuł -->

		<div class="post-meta post-meta--on-top">
			<!-- Data publikacji -->
			<!-- Autor -->
		</div>

		<!-- Obrazek wyróżniający -->
		<!-- Treść -->
		
		<div class="post-meta post-meta--on-bottom">
			<!-- Wróć do strony głównej -->
			<!-- Drukuj -->
		</div>
	</article>
</div>
```

### Kategorie

W pliku `/category.php`.

```html
<!-- Tytuł -->

<div class="wrapper wrapper--excerpts">
	<!-- Pętla ze skrótami wpisów -->
</div>
```

### Wyniki wyszukiwania

W pliku `/search.php`.

```html
<div class="wrapper">
	<!-- Tytuł -->

	<div class="search-query">
		Szukałeś: <strong>X</strong>
	</div>

	<!-- Pętla ze skrótami wpisów -->
</div>
```

### Błąd 404

W pliku `/404.php`.

```html
<div class="wrapper">
	<article>
		<!-- Tytuł -->

		<div class="content">
			<p>Przepraszamy, ale nie znaleźliśmy strony, której szukasz.</p>
		</div>

		<div class="post-meta post-meta--on-bottom">
			<!-- Wróć do strony głównej -->
		</div>
	</article>
</div>
```