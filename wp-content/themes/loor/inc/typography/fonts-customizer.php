<?php

function loor_font_customizer($wp_customize) {
    
    $font_choices = 
        array(
			' ',
			'disabled' => '- - Web Safe - -',
				'Arial, Helvetica, sans-serif' => 'Arial',
				'"Arial Black", Gadget, sans-serif' => 'Arial Black',
				'"Helvetica Neue", Arial, sans-serif' => 'Helvetica Neue',
				'Impact, Charcoal, sans-serif' => 'Impact',
				'Tahoma, Geneva, sans-serif' => 'Tahoma',
				'"Times New Roman", Times, serif' => 'Times New Roman',
				'Verdana, Geneva, sans-serif' => 'Verdana',
				'Georgia, serif' => 'Georgia',
				'"Palatino Linotype", "Book Antiqua", Palatino, serif' => 'Palatino Linotype',
				'"Courier New", Courier, monospace' => 'Courier New',
			'disabled-2' => '- - Google Webfonts - -',
				'ABeeZee' => 'ABeeZee',
				'Abel' => 'Abel',
				'Abril Fatface' => 'Abril Fatface',
				'Aclonica' => 'Aclonica',
				'Acme' => 'Acme',
				'Actor' => 'Actor',
				'Adamina' => 'Adamina',
				'Advent Pro' => 'Advent Pro',
				'Aguafina Script' => 'Aguafina Script',
				'Akronim' => 'Akronim',
				'Aladin' => 'Aladin',
				'Aldrich' => 'Aldrich',
				'Alef' => 'Alef',
				'Alegreya' => 'Alegreya',
				'Alegreya SC' => 'Alegreya SC',
				'Alegreya Sans' => 'Alegreya Sans',
				'Alegreya Sans SC' => 'Alegreya Sans SC',
				'Alex Brush' => 'Alex Brush',
				'Alfa Slab One' => 'Alfa Slab One',
				'Alice' => 'Alice',
				'Alike' => 'Alike',
				'Alike Angular' => 'Alike Angular',
				'Allan' => 'Allan',
				'Allerta' => 'Allerta',
				'Allerta Stencil' => 'Allerta Stencil',
				'Allura' => 'Allura',
				'Almendra' => 'Almendra',
				'Almendra Display' => 'Almendra Display',
				'Almendra SC' => 'Almendra SC',
				'Amarante' => 'Amarante',
				'Amaranth' => 'Amaranth',
				'Amatic SC' => 'Amatic SC',
				'Amethysta' => 'Amethysta',
				'Amiri' => 'Amiri',
				'Amita' => 'Amita',
				'Anaheim' => 'Anaheim',
				'Andada' => 'Andada',
				'Andika' => 'Andika',
				'Angkor' => 'Angkor',
				'Annie Use Your Telescope' => 'Annie Use Your Telescope',
				'Anonymous Pro' => 'Anonymous Pro',
				'Antic' => 'Antic',
				'Antic Didone' => 'Antic Didone',
				'Antic Slab' => 'Antic Slab',
				'Anton' => 'Anton',
				'Arapey' => 'Arapey',
				'Arbutus' => 'Arbutus',
				'Arbutus Slab' => 'Arbutus Slab',
				'Architects Daughter' => 'Architects Daughter',
				'Archivo Black' => 'Archivo Black',
				'Archivo Narrow' => 'Archivo Narrow',
				'Arimo' => 'Arimo',
				'Arizonia' => 'Arizonia',
				'Armata' => 'Armata',
				'Artifika' => 'Artifika',
				'Arvo' => 'Arvo',
				'Arya' => 'Arya',
				'Asap' => 'Asap',
				'Asar' => 'Asar',
				'Asset' => 'Asset',
				'Astloch' => 'Astloch',
				'Asul' => 'Asul',
				'Atomic Age' => 'Atomic Age',
				'Aubrey' => 'Aubrey',
				'Audiowide' => 'Audiowide',
				'Autour One' => 'Autour One',
				'Average' => 'Average',
				'Average Sans' => 'Average Sans',
				'Averia Gruesa Libre' => 'Averia Gruesa Libre',
				'Averia Libre' => 'Averia Libre',
				'Averia Sans Libre' => 'Averia Sans Libre',
				'Averia Serif Libre' => 'Averia Serif Libre',
				'Bad Script' => 'Bad Script',
				'Balthazar' => 'Balthazar',
				'Bangers' => 'Bangers',
				'Basic' => 'Basic',
				'Battambang' => 'Battambang',
				'Baumans' => 'Baumans',
				'Bayon' => 'Bayon',
				'Belgrano' => 'Belgrano',
				'Belleza' => 'Belleza',
				'BenchNine' => 'BenchNine',
				'Bentham' => 'Bentham',
				'Berkshire Swash' => 'Berkshire Swash',
				'Bevan' => 'Bevan',
				'Bigelow Rules' => 'Bigelow Rules',
				'Bigshot One' => 'Bigshot One',
				'Bilbo' => 'Bilbo',
				'Bilbo Swash Caps' => 'Bilbo Swash Caps',
				'Biryani' => 'Biryani',
				'Bitter' => 'Bitter',
				'Black Ops One' => 'Black Ops One',
				'Bokor' => 'Bokor',
				'Bonbon' => 'Bonbon',
				'Boogaloo' => 'Boogaloo',
				'Bowlby One' => 'Bowlby One',
				'Bowlby One SC' => 'Bowlby One SC',
				'Brawler' => 'Brawler',
				'Bree Serif' => 'Bree Serif',
				'Bubblegum Sans' => 'Bubblegum Sans',
				'Bubbler One' => 'Bubbler One',
				'Buda' => 'Buda',
				'Buenard' => 'Buenard',
				'Butcherman' => 'Butcherman',
				'Butterfly Kids' => 'Butterfly Kids',
				'Cabin' => 'Cabin',
				'Cabin Condensed' => 'Cabin Condensed',
				'Cabin Sketch' => 'Cabin Sketch',
				'Caesar Dressing' => 'Caesar Dressing',
				'Cagliostro' => 'Cagliostro',
				'Calligraffitti' => 'Calligraffitti',
				'Cambay' => 'Cambay',
				'Cambo' => 'Cambo',
				'Candal' => 'Candal',
				'Cantarell' => 'Cantarell',
				'Cantata One' => 'Cantata One',
				'Cantora One' => 'Cantora One',
				'Capriola' => 'Capriola',
				'Cardo' => 'Cardo',
				'Carme' => 'Carme',
				'Carrois Gothic' => 'Carrois Gothic',
				'Carrois Gothic SC' => 'Carrois Gothic SC',
				'Carter One' => 'Carter One',
				'Catamaran' => 'Catamaran',
				'Caudex' => 'Caudex',
				'Caveat' => 'Caveat',
				'Caveat Brush' => 'Caveat Brush',
				'Cedarville Cursive' => 'Cedarville Cursive',
				'Ceviche One' => 'Ceviche One',
				'Changa One' => 'Changa One',
				'Chango' => 'Chango',
				'Chau Philomene One' => 'Chau Philomene One',
				'Chela One' => 'Chela One',
				'Chelsea Market' => 'Chelsea Market',
				'Chenla' => 'Chenla',
				'Cherry Cream Soda' => 'Cherry Cream Soda',
				'Cherry Swash' => 'Cherry Swash',
				'Chewy' => 'Chewy',
				'Chicle' => 'Chicle',
				'Chivo' => 'Chivo',
				'Chonburi' => 'Chonburi',
				'Cinzel' => 'Cinzel',
				'Cinzel Decorative' => 'Cinzel Decorative',
				'Clicker Script' => 'Clicker Script',
				'Coda' => 'Coda',
				'Coda Caption' => 'Coda Caption',
				'Codystar' => 'Codystar',
				'Combo' => 'Combo',
				'Comfortaa' => 'Comfortaa',
				'Coming Soon' => 'Coming Soon',
				'Concert One' => 'Concert One',
				'Condiment' => 'Condiment',
				'Content' => 'Content',
				'Contrail One' => 'Contrail One',
				'Convergence' => 'Convergence',
				'Cookie' => 'Cookie',
				'Copse' => 'Copse',
				'Corben' => 'Corben',
				'Courgette' => 'Courgette',
				'Cousine' => 'Cousine',
				'Coustard' => 'Coustard',
				'Covered By Your Grace' => 'Covered By Your Grace',
				'Crafty Girls' => 'Crafty Girls',
				'Creepster' => 'Creepster',
				'Crete Round' => 'Crete Round',
				'Crimson Text' => 'Crimson Text',
				'Croissant One' => 'Croissant One',
				'Crushed' => 'Crushed',
				'Cuprum' => 'Cuprum',
				'Cutive' => 'Cutive',
				'Cutive Mono' => 'Cutive Mono',
				'Damion' => 'Damion',
				'Dancing Script' => 'Dancing Script',
				'Dangrek' => 'Dangrek',
				'Dawning of a New Day' => 'Dawning of a New Day',
				'Days One' => 'Days One',
				'Dekko' => 'Dekko',
				'Delius' => 'Delius',
				'Delius Swash Caps' => 'Delius Swash Caps',
				'Delius Unicase' => 'Delius Unicase',
				'Della Respira' => 'Della Respira',
				'Denk One' => 'Denk One',
				'Devonshire' => 'Devonshire',
				'Dhurjati' => 'Dhurjati',
				'Didact Gothic' => 'Didact Gothic',
				'Diplomata' => 'Diplomata',
				'Diplomata SC' => 'Diplomata SC',
				'Domine' => 'Domine',
				'Donegal One' => 'Donegal One',
				'Doppio One' => 'Doppio One',
				'Dorsa' => 'Dorsa',
				'Dosis' => 'Dosis',
				'Dr Sugiyama' => 'Dr Sugiyama',
				'Droid Sans' => 'Droid Sans',
				'Droid Sans Mono' => 'Droid Sans Mono',
				'Droid Serif' => 'Droid Serif',
				'Duru Sans' => 'Duru Sans',
				'Dynalight' => 'Dynalight',
				'EB Garamond' => 'EB Garamond',
				'Eagle Lake' => 'Eagle Lake',
				'Eater' => 'Eater',
				'Economica' => 'Economica',
				'Eczar' => 'Eczar',
				'Ek Mukta' => 'Ek Mukta',
				'Electrolize' => 'Electrolize',
				'Elsie' => 'Elsie',
				'Elsie Swash Caps' => 'Elsie Swash Caps',
				'Emblema One' => 'Emblema One',
				'Emilys Candy' => 'Emilys Candy',
				'Engagement' => 'Engagement',
				'Englebert' => 'Englebert',
				'Enriqueta' => 'Enriqueta',
				'Erica One' => 'Erica One',
				'Esteban' => 'Esteban',
				'Euphoria Script' => 'Euphoria Script',
				'Ewert' => 'Ewert',
				'Exo' => 'Exo',
				'Exo 2' => 'Exo 2',
				'Expletus Sans' => 'Expletus Sans',
				'Fanwood Text' => 'Fanwood Text',
				'Fascinate' => 'Fascinate',
				'Fascinate Inline' => 'Fascinate Inline',
				'Faster One' => 'Faster One',
				'Fasthand' => 'Fasthand',
				'Fauna One' => 'Fauna One',
				'Federant' => 'Federant',
				'Federo' => 'Federo',
				'Felipa' => 'Felipa',
				'Fenix' => 'Fenix',
				'Finger Paint' => 'Finger Paint',
				'Fira Mono' => 'Fira Mono',
				'Fira Sans' => 'Fira Sans',
				'Fjalla One' => 'Fjalla One',
				'Fjord One' => 'Fjord One',
				'Flamenco' => 'Flamenco',
				'Flavors' => 'Flavors',
				'Fondamento' => 'Fondamento',
				'Fontdiner Swanky' => 'Fontdiner Swanky',
				'Forum' => 'Forum',
				'Francois One' => 'Francois One',
				'Freckle Face' => 'Freckle Face',
				'Fredericka the Great' => 'Fredericka the Great',
				'Fredoka One' => 'Fredoka One',
				'Freehand' => 'Freehand',
				'Fresca' => 'Fresca',
				'Frijole' => 'Frijole',
				'Fruktur' => 'Fruktur',
				'Fugaz One' => 'Fugaz One',
				'GFS Didot' => 'GFS Didot',
				'GFS Neohellenic' => 'GFS Neohellenic',
				'Gabriela' => 'Gabriela',
				'Gafata' => 'Gafata',
				'Galdeano' => 'Galdeano',
				'Galindo' => 'Galindo',
				'Gentium Basic' => 'Gentium Basic',
				'Gentium Book Basic' => 'Gentium Book Basic',
				'Geo' => 'Geo',
				'Geostar' => 'Geostar',
				'Geostar Fill' => 'Geostar Fill',
				'Germania One' => 'Germania One',
				'Gidugu' => 'Gidugu',
				'Gilda Display' => 'Gilda Display',
				'Give You Glory' => 'Give You Glory',
				'Glass Antiqua' => 'Glass Antiqua',
				'Glegoo' => 'Glegoo',
				'Gloria Hallelujah' => 'Gloria Hallelujah',
				'Goblin One' => 'Goblin One',
				'Gochi Hand' => 'Gochi Hand',
				'Gorditas' => 'Gorditas',
				'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
				'Graduate' => 'Graduate',
				'Grand Hotel' => 'Grand Hotel',
				'Gravitas One' => 'Gravitas One',
				'Great Vibes' => 'Great Vibes',
				'Griffy' => 'Griffy',
				'Gruppo' => 'Gruppo',
				'Gudea' => 'Gudea',
				'Gurajada' => 'Gurajada',
				'Habibi' => 'Habibi',
				'Halant' => 'Halant',
				'Hammersmith One' => 'Hammersmith One',
				'Hanalei' => 'Hanalei',
				'Hanalei Fill' => 'Hanalei Fill',
				'Handlee' => 'Handlee',
				'Hanuman' => 'Hanuman',
				'Happy Monkey' => 'Happy Monkey',
				'Headland One' => 'Headland One',
				'Henny Penny' => 'Henny Penny',
				'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
				'Hind' => 'Hind',
				'Hind Siliguri' => 'Hind Siliguri',
				'Hind Vadodara' => 'Hind Vadodara',
				'Holtwood One SC' => 'Holtwood One SC',
				'Homemade Apple' => 'Homemade Apple',
				'Homenaje' => 'Homenaje',
				'IM Fell DW Pica' => 'IM Fell DW Pica',
				'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
				'IM Fell Double Pica' => 'IM Fell Double Pica',
				'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
				'IM Fell English' => 'IM Fell English',
				'IM Fell English SC' => 'IM Fell English SC',
				'IM Fell French Canon' => 'IM Fell French Canon',
				'IM Fell French Canon SC' => 'IM Fell French Canon SC',
				'IM Fell Great Primer' => 'IM Fell Great Primer',
				'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
				'Iceberg' => 'Iceberg',
				'Iceland' => 'Iceland',
				'Imprima' => 'Imprima',
				'Inconsolata' => 'Inconsolata',
				'Inder' => 'Inder',
				'Indie Flower' => 'Indie Flower',
				'Inika' => 'Inika',
				'Inknut Antiqua' => 'Inknut Antiqua',
				'Irish Grover' => 'Irish Grover',
				'Istok Web' => 'Istok Web',
				'Italiana' => 'Italiana',
				'Italianno' => 'Italianno',
				'Itim' => 'Itim',
				'Jacques Francois' => 'Jacques Francois',
				'Jacques Francois Shadow' => 'Jacques Francois Shadow',
				'Jaldi' => 'Jaldi',
				'Jim Nightshade' => 'Jim Nightshade',
				'Jockey One' => 'Jockey One',
				'Jolly Lodger' => 'Jolly Lodger',
				'Josefin Sans' => 'Josefin Sans',
				'Josefin Slab' => 'Josefin Slab',
				'Joti One' => 'Joti One',
				'Judson' => 'Judson',
				'Julee' => 'Julee',
				'Julius Sans One' => 'Julius Sans One',
				'Junge' => 'Junge',
				'Jura' => 'Jura',
				'Just Another Hand' => 'Just Another Hand',
				'Just Me Again Down Here' => 'Just Me Again Down Here',
				'Kadwa' => 'Kadwa',
				'Kalam' => 'Kalam',
				'Kameron' => 'Kameron',
				'Kanit' => 'Kanit',
				'Kantumruy' => 'Kantumruy',
				'Karla' => 'Karla',
				'Karma' => 'Karma',
				'Kaushan Script' => 'Kaushan Script',
				'Kavoon' => 'Kavoon',
				'Kdam Thmor' => 'Kdam Thmor',
				'Keania One' => 'Keania One',
				'Kelly Slab' => 'Kelly Slab',
				'Kenia' => 'Kenia',
				'Khand' => 'Khand',
				'Khmer' => 'Khmer',
				'Khula' => 'Khula',
				'Kite One' => 'Kite One',
				'Knewave' => 'Knewave',
				'Kotta One' => 'Kotta One',
				'Koulen' => 'Koulen',
				'Kranky' => 'Kranky',
				'Kreon' => 'Kreon',
				'Kristi' => 'Kristi',
				'Krona One' => 'Krona One',
				'Kurale' => 'Kurale',
				'La Belle Aurore' => 'La Belle Aurore',
				'Laila' => 'Laila',
				'Lakki Reddy' => 'Lakki Reddy',
				'Lancelot' => 'Lancelot',
				'Lateef' => 'Lateef',
				'Lato' => 'Lato',
				'League Script' => 'League Script',
				'Leckerli One' => 'Leckerli One',
				'Ledger' => 'Ledger',
				'Lekton' => 'Lekton',
				'Lemon' => 'Lemon',
				'Libre Baskerville' => 'Libre Baskerville',
				'Life Savers' => 'Life Savers',
				'Lilita One' => 'Lilita One',
				'Lily Script One' => 'Lily Script One',
				'Limelight' => 'Limelight',
				'Linden Hill' => 'Linden Hill',
				'Lobster' => 'Lobster',
				'Lobster Two' => 'Lobster Two',
				'Londrina Outline' => 'Londrina Outline',
				'Londrina Shadow' => 'Londrina Shadow',
				'Londrina Sketch' => 'Londrina Sketch',
				'Londrina Solid' => 'Londrina Solid',
				'Lora' => 'Lora',
				'Love Ya Like A Sister' => 'Love Ya Like A Sister',
				'Loved by the King' => 'Loved by the King',
				'Lovers Quarrel' => 'Lovers Quarrel',
				'Luckiest Guy' => 'Luckiest Guy',
				'Lusitana' => 'Lusitana',
				'Lustria' => 'Lustria',
				'Macondo' => 'Macondo',
				'Macondo Swash Caps' => 'Macondo Swash Caps',
				'Magra' => 'Magra',
				'Maiden Orange' => 'Maiden Orange',
				'Mako' => 'Mako',
				'Mallanna' => 'Mallanna',
				'Mandali' => 'Mandali',
				'Marcellus' => 'Marcellus',
				'Marcellus SC' => 'Marcellus SC',
				'Marck Script' => 'Marck Script',
				'Margarine' => 'Margarine',
				'Marko One' => 'Marko One',
				'Marmelad' => 'Marmelad',
				'Martel' => 'Martel',
				'Martel Sans' => 'Martel Sans',
				'Marvel' => 'Marvel',
				'Mate' => 'Mate',
				'Mate SC' => 'Mate SC',
				'Maven Pro' => 'Maven Pro',
				'McLaren' => 'McLaren',
				'Meddon' => 'Meddon',
				'MedievalSharp' => 'MedievalSharp',
				'Medula One' => 'Medula One',
				'Megrim' => 'Megrim',
				'Meie Script' => 'Meie Script',
				'Merienda' => 'Merienda',
				'Merienda One' => 'Merienda One',
				'Merriweather' => 'Merriweather',
				'Merriweather Sans' => 'Merriweather Sans',
				'Metal' => 'Metal',
				'Metal Mania' => 'Metal Mania',
				'Metamorphous' => 'Metamorphous',
				'Metrophobic' => 'Metrophobic',
				'Michroma' => 'Michroma',
				'Milonga' => 'Milonga',
				'Miltonian' => 'Miltonian',
				'Miltonian Tattoo' => 'Miltonian Tattoo',
				'Miniver' => 'Miniver',
				'Miss Fajardose' => 'Miss Fajardose',
				'Modak' => 'Modak',
				'Modern Antiqua' => 'Modern Antiqua',
				'Molengo' => 'Molengo',
				'Molle' => 'Molle',
				'Monda' => 'Monda',
				'Monofett' => 'Monofett',
				'Monoton' => 'Monoton',
				'Monsieur La Doulaise' => 'Monsieur La Doulaise',
				'Montaga' => 'Montaga',
				'Montez' => 'Montez',
				'Montserrat' => 'Montserrat',
				'Montserrat Alternates' => 'Montserrat Alternates',
				'Montserrat Subrayada' => 'Montserrat Subrayada',
				'Moul' => 'Moul',
				'Moulpali' => 'Moulpali',
				'Mountains of Christmas' => 'Mountains of Christmas',
				'Mouse Memoirs' => 'Mouse Memoirs',
				'Mr Bedfort' => 'Mr Bedfort',
				'Mr Dafoe' => 'Mr Dafoe',
				'Mr De Haviland' => 'Mr De Haviland',
				'Mrs Saint Delafield' => 'Mrs Saint Delafield',
				'Mrs Sheppards' => 'Mrs Sheppards',
				'Muli' => 'Muli',
				'Mystery Quest' => 'Mystery Quest',
				'NTR' => 'NTR',
				'Neucha' => 'Neucha',
				'Neuton' => 'Neuton',
				'New Rocker' => 'New Rocker',
				'News Cycle' => 'News Cycle',
				'Niconne' => 'Niconne',
				'Nixie One' => 'Nixie One',
				'Nobile' => 'Nobile',
				'Nokora' => 'Nokora',
				'Norican' => 'Norican',
				'Nosifer' => 'Nosifer',
				'Nothing You Could Do' => 'Nothing You Could Do',
				'Noticia Text' => 'Noticia Text',
				'Noto Sans' => 'Noto Sans',
				'Noto Serif' => 'Noto Serif',
				'Nova Cut' => 'Nova Cut',
				'Nova Flat' => 'Nova Flat',
				'Nova Mono' => 'Nova Mono',
				'Nova Oval' => 'Nova Oval',
				'Nova Round' => 'Nova Round',
				'Nova Script' => 'Nova Script',
				'Nova Slim' => 'Nova Slim',
				'Nova Square' => 'Nova Square',
				'Numans' => 'Numans',
				'Nunito' => 'Nunito',
				'Odor Mean Chey' => 'Odor Mean Chey',
				'Offside' => 'Offside',
				'Old Standard TT' => 'Old Standard TT',
				'Oldenburg' => 'Oldenburg',
				'Oleo Script' => 'Oleo Script',
				'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
				'Open Sans' => 'Open Sans',
				'Open Sans Condensed' => 'Open Sans Condensed',
				'Oranienbaum' => 'Oranienbaum',
				'Orbitron' => 'Orbitron',
				'Oregano' => 'Oregano',
				'Orienta' => 'Orienta',
				'Original Surfer' => 'Original Surfer',
				'Oswald' => 'Oswald',
				'Over the Rainbow' => 'Over the Rainbow',
				'Overlock' => 'Overlock',
				'Overlock SC' => 'Overlock SC',
				'Ovo' => 'Ovo',
				'Oxygen' => 'Oxygen',
				'Oxygen Mono' => 'Oxygen Mono',
				'PT Mono' => 'PT Mono',
				'PT Sans' => 'PT Sans',
				'PT Sans Caption' => 'PT Sans Caption',
				'PT Sans Narrow' => 'PT Sans Narrow',
				'PT Serif' => 'PT Serif',
				'PT Serif Caption' => 'PT Serif Caption',
				'Pacifico' => 'Pacifico',
				'Palanquin' => 'Palanquin',
				'Palanquin Dark' => 'Palanquin Dark',
				'Paprika' => 'Paprika',
				'Parisienne' => 'Parisienne',
				'Passero One' => 'Passero One',
				'Passion One' => 'Passion One',
				'Pathway Gothic One' => 'Pathway Gothic One',
				'Patrick Hand' => 'Patrick Hand',
				'Patrick Hand SC' => 'Patrick Hand SC',
				'Patua One' => 'Patua One',
				'Paytone One' => 'Paytone One',
				'Peddana' => 'Peddana',
				'Peralta' => 'Peralta',
				'Permanent Marker' => 'Permanent Marker',
				'Petit Formal Script' => 'Petit Formal Script',
				'Petrona' => 'Petrona',
				'Philosopher' => 'Philosopher',
				'Piedra' => 'Piedra',
				'Pinyon Script' => 'Pinyon Script',
				'Pirata One' => 'Pirata One',
				'Plaster' => 'Plaster',
				'Play' => 'Play',
				'Playball' => 'Playball',
				'Playfair Display' => 'Playfair Display',
				'Playfair Display SC' => 'Playfair Display SC',
				'Podkova' => 'Podkova',
				'Poiret One' => 'Poiret One',
				'Poller One' => 'Poller One',
				'Poly' => 'Poly',
				'Pompiere' => 'Pompiere',
				'Pontano Sans' => 'Pontano Sans',
				'Poppins' => 'Poppins',
				'Port Lligat Sans' => 'Port Lligat Sans',
				'Port Lligat Slab' => 'Port Lligat Slab',
				'Pragati Narrow' => 'Pragati Narrow',
				'Prata' => 'Prata',
				'Preahvihear' => 'Preahvihear',
				'Press Start 2P' => 'Press Start 2P',
				'Princess Sofia' => 'Princess Sofia',
				'Prociono' => 'Prociono',
				'Prosto One' => 'Prosto One',
				'Puritan' => 'Puritan',
				'Purple Purse' => 'Purple Purse',
				'Quando' => 'Quando',
				'Quantico' => 'Quantico',
				'Quattrocento' => 'Quattrocento',
				'Quattrocento Sans' => 'Quattrocento Sans',
				'Questrial' => 'Questrial',
				'Quicksand' => 'Quicksand',
				'Quintessential' => 'Quintessential',
				'Qwigley' => 'Qwigley',
				'Racing Sans One' => 'Racing Sans One',
				'Radley' => 'Radley',
				'Rajdhani' => 'Rajdhani',
				'Raleway' => 'Raleway',
				'Raleway Dots' => 'Raleway Dots',
				'Ramabhadra' => 'Ramabhadra',
				'Ramaraja' => 'Ramaraja',
				'Rambla' => 'Rambla',
				'Rammetto One' => 'Rammetto One',
				'Ranchers' => 'Ranchers',
				'Rancho' => 'Rancho',
				'Ranga' => 'Ranga',
				'Rationale' => 'Rationale',
				'Ravi Prakash' => 'Ravi Prakash',
				'Redressed' => 'Redressed',
				'Reenie Beanie' => 'Reenie Beanie',
				'Revalia' => 'Revalia',
				'Rhodium Libre' => 'Rhodium Libre',
				'Ribeye' => 'Ribeye',
				'Ribeye Marrow' => 'Ribeye Marrow',
				'Righteous' => 'Righteous',
				'Risque' => 'Risque',
				'Roboto' => 'Roboto',
				'Roboto Condensed' => 'Roboto Condensed',
				'Roboto Mono' => 'Roboto Mono',
				'Roboto Slab' => 'Roboto Slab',
				'Rochester' => 'Rochester',
				'Rock Salt' => 'Rock Salt',
				'Rokkitt' => 'Rokkitt',
				'Romanesco' => 'Romanesco',
				'Ropa Sans' => 'Ropa Sans',
				'Rosario' => 'Rosario',
				'Rosarivo' => 'Rosarivo',
				'Rouge Script' => 'Rouge Script',
				'Rozha One' => 'Rozha One',
				'Rubik' => 'Rubik',
				'Rubik Mono One' => 'Rubik Mono One',
				'Rubik One' => 'Rubik One',
				'Ruda' => 'Ruda',
				'Rufina' => 'Rufina',
				'Ruge Boogie' => 'Ruge Boogie',
				'Ruluko' => 'Ruluko',
				'Rum Raisin' => 'Rum Raisin',
				'Ruslan Display' => 'Ruslan Display',
				'Russo One' => 'Russo One',
				'Ruthie' => 'Ruthie',
				'Rye' => 'Rye',
				'Sacramento' => 'Sacramento',
				'Sahitya' => 'Sahitya',
				'Sail' => 'Sail',
				'Salsa' => 'Salsa',
				'Sanchez' => 'Sanchez',
				'Sancreek' => 'Sancreek',
				'Sansita One' => 'Sansita One',
				'Sarala' => 'Sarala',
				'Sarina' => 'Sarina',
				'Sarpanch' => 'Sarpanch',
				'Satisfy' => 'Satisfy',
				'Scada' => 'Scada',
				'Scheherazade' => 'Scheherazade',
				'Schoolbell' => 'Schoolbell',
				'Seaweed Script' => 'Seaweed Script',
				'Sevillana' => 'Sevillana',
				'Seymour One' => 'Seymour One',
				'Shadows Into Light' => 'Shadows Into Light',
				'Shadows Into Light Two' => 'Shadows Into Light Two',
				'Shanti' => 'Shanti',
				'Share' => 'Share',
				'Share Tech' => 'Share Tech',
				'Share Tech Mono' => 'Share Tech Mono',
				'Shojumaru' => 'Shojumaru',
				'Short Stack' => 'Short Stack',
				'Siemreap' => 'Siemreap',
				'Sigmar One' => 'Sigmar One',
				'Signika' => 'Signika',
				'Signika Negative' => 'Signika Negative',
				'Simonetta' => 'Simonetta',
				'Sintony' => 'Sintony',
				'Sirin Stencil' => 'Sirin Stencil',
				'Six Caps' => 'Six Caps',
				'Skranji' => 'Skranji',
				'Slabo 13px' => 'Slabo 13px',
				'Slabo 27px' => 'Slabo 27px',
				'Slackey' => 'Slackey',
				'Smokum' => 'Smokum',
				'Smythe' => 'Smythe',
				'Sniglet' => 'Sniglet',
				'Snippet' => 'Snippet',
				'Snowburst One' => 'Snowburst One',
				'Sofadi One' => 'Sofadi One',
				'Sofia' => 'Sofia',
				'Sonsie One' => 'Sonsie One',
				'Sorts Mill Goudy' => 'Sorts Mill Goudy',
				'Source Code Pro' => 'Source Code Pro',
				'Source Sans Pro' => 'Source Sans Pro',
				'Source Serif Pro' => 'Source Serif Pro',
				'Special Elite' => 'Special Elite',
				'Spicy Rice' => 'Spicy Rice',
				'Spinnaker' => 'Spinnaker',
				'Spirax' => 'Spirax',
				'Squada One' => 'Squada One',
				'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
				'Stalemate' => 'Stalemate',
				'Stalinist One' => 'Stalinist One',
				'Stardos Stencil' => 'Stardos Stencil',
				'Stint Ultra Condensed' => 'Stint Ultra Condensed',
				'Stint Ultra Expanded' => 'Stint Ultra Expanded',
				'Stoke' => 'Stoke',
				'Strait' => 'Strait',
				'Sue Ellen Francisco' => 'Sue Ellen Francisco',
				'Sumana' => 'Sumana',
				'Sunshiney' => 'Sunshiney',
				'Supermercado One' => 'Supermercado One',
				'Sura' => 'Sura',
				'Suranna' => 'Suranna',
				'Suravaram' => 'Suravaram',
				'Suwannaphum' => 'Suwannaphum',
				'Swanky and Moo Moo' => 'Swanky and Moo Moo',
				'Syncopate' => 'Syncopate',
				'Tangerine' => 'Tangerine',
				'Taprom' => 'Taprom',
				'Tauri' => 'Tauri',
				'Teko' => 'Teko',
				'Telex' => 'Telex',
				'Tenali Ramakrishna' => 'Tenali Ramakrishna',
				'Tenor Sans' => 'Tenor Sans',
				'Text Me One' => 'Text Me One',
				'The Girl Next Door' => 'The Girl Next Door',
				'Tienne' => 'Tienne',
				'Tillana' => 'Tillana',
				'Timmana' => 'Timmana',
				'Tinos' => 'Tinos',
				'Titan One' => 'Titan One',
				'Titillium Web' => 'Titillium Web',
				'Trade Winds' => 'Trade Winds',
				'Trocchi' => 'Trocchi',
				'Trochut' => 'Trochut',
				'Trykker' => 'Trykker',
				'Tulpen One' => 'Tulpen One',
				'Ubuntu' => 'Ubuntu',
				'Ubuntu Condensed' => 'Ubuntu Condensed',
				'Ubuntu Mono' => 'Ubuntu Mono',
				'Ultra' => 'Ultra',
				'Uncial Antiqua' => 'Uncial Antiqua',
				'Underdog' => 'Underdog',
				'Unica One' => 'Unica One',
				'UnifrakturCook' => 'UnifrakturCook',
				'UnifrakturMaguntia' => 'UnifrakturMaguntia',
				'Unkempt' => 'Unkempt',
				'Unlock' => 'Unlock',
				'Unna' => 'Unna',
				'VT323' => 'VT323',
				'Vampiro One' => 'Vampiro One',
				'Varela' => 'Varela',
				'Varela Round' => 'Varela Round',
				'Vast Shadow' => 'Vast Shadow',
				'Vesper Libre' => 'Vesper Libre',
				'Vibur' => 'Vibur',
				'Vidaloka' => 'Vidaloka',
				'Viga' => 'Viga',
				'Voces' => 'Voces',
				'Volkhov' => 'Volkhov',
				'Vollkorn' => 'Vollkorn',
				'Voltaire' => 'Voltaire',
				'Waiting for the Sunrise' => 'Waiting for the Sunrise',
				'Wallpoet' => 'Wallpoet',
				'Walter Turncoat' => 'Walter Turncoat',
				'Warnes' => 'Warnes',
				'Wellfleet' => 'Wellfleet',
				'Wendy One' => 'Wendy One',
				'Wire One' => 'Wire One',
				'Work Sans' => 'Work Sans',
				'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
				'Yantramanav' => 'Yantramanav',
				'Yellowtail' => 'Yellowtail',
				'Yeseva One' => 'Yeseva One',
				'Yesteryear' => 'Yesteryear',
				'Zeyada' => 'Zeyada',
    );

	$font_styles = array(
		'100' => '100',
		'100italic' => '100 Italic',
		'200' => '200',
		'200italic' => '200 Italic',
		'300' => '300',
		'300italic' => '300 Italic',
		'400' => '400',
		'400italic' => '400 Italic',
		'500' => '500',
		'500italic' => '500 Italic',
		'600' => '600',
		'600italic' => '600 Italic',
		'700' => '700',
		'700italic' => '700 Italic',
		'800' => '800',
		'800italic' => '800 Italic',
		'900' => '900',
		'900italic' => '900 Italic'
	);

	$font_weights = array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	);

	$font_subsets = array(
		'arabic' => 'Arabic',
		'cyrillic' => 'Cyrillic',
		'cyrillic-ext' => 'Cyrillic Extended',
		'greek' => 'Greek',
		'greek-ext' => 'Greek Extended',
		'latin' => 'Latin',
		'latin-ext' => 'Latin Extended',
		'vietnamese' => 'Vietnamese',
	);

    // Add fonts panel options
	$wp_customize->add_panel( 'loor_typography_panel', array(
		'priority' => 20,
		'title' => __('Typography', 'loor')
	));


/**
 * 
 * 
 * Main typography
 * 
 * 
**/

	// Main typography options
	$wp_customize->add_section( 'loor_main_typography', array(
		'priority' => 20,
		'title' => __('Main typography', 'loor'),
		'description' => __('When selecting a default value for the variant, please make sure that the value is valid for the selected Google font.', 'loor'),
		'panel' => 'loor_typography_panel'
	));
	
	$wp_customize->add_setting( 'loor_typography_main_font_family', array(
		'default' => 'Open Sans',
		'sanitize_callback' => 'loor_sanitize_choices'
	));

    $wp_customize->add_control( 'loor_typography_main_font_family', array(
        'type' => 'select',
		'label' => __('Font Family', 'loor'),
        'description' => __('Select your desired font for the body.', 'loor'),
        'section' => 'loor_main_typography',
        'choices' => $font_choices
    ));

    // set styles
    $wp_customize->add_setting( 'loor_main_typography_styles', array(
        'default' => array('400', '400italic', '700', '700italic'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_main_typography_styles', array(
            'settings' => 'loor_main_typography_styles',
            'label'    => __('Styles', 'loor'),
            'description' => __('Choose the styles you want to load.', 'loor'),
            'section'  => 'loor_main_typography',
            'type'     => 'multiple-select',
            'choices'  => $font_styles
            )
        )
    );

    // set subsets
    $wp_customize->add_setting( 'loor_main_typography_subsets', array(
        'default' => array('latin'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_main_typography_subsets', array(
            'settings' => 'loor_main_typography_subsets',
            'label'    => __('Subsets', 'loor'),
            'description' => __('Choose the character sets.', 'loor'),
            'section'  => 'loor_main_typography',
            'type'     => 'multiple-select',
            'choices'  => $font_subsets
            )
        )
    );

    // set main font size for desktop
    $wp_customize->add_setting('loor_main_font_size', array(
		'default' => '1em',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('loor_main_font_size', array(
		'label' => __('Font Size', 'loor'),
		'section' => 'loor_main_typography',
		'settings' => 'loor_main_font_size'
	));

	// set main letter spacing size for desktop
	$wp_customize->add_setting('loor_main_letter_spacing', array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field',
		
	));
	$wp_customize->add_control('loor_main_letter_spacing', array(
		'label' => __('Letter Spacing', 'loor'),
		'section' => 'loor_main_typography',
		'settings' => 'loor_main_letter_spacing'
	));

	// Font weight for body
	$wp_customize->add_setting( 'loor_main_typography_weight', array(
		'default' => '400',
		'sanitize_callback' => 'loor_sanitize_choices'
	));

    $wp_customize->add_control( 'loor_main_typography_weight', array(
        'type' => 'select',
		'label' => __('Font Weight', 'loor'),
        'section' => 'loor_main_typography',
        'choices' => $font_weights
    ));

	// set main main line height
	$wp_customize->add_setting('loor_main_line_height', array(
		'default' => '1.5',
		'sanitize_callback' => 'sanitize_text_field',
		
	));

	$wp_customize->add_control('loor_main_line_height', array(
		'label' => __('Line Height', 'loor'),
		'section' => 'loor_main_typography',
		'settings' => 'loor_main_line_height'
	));


/**
 * 
 * 
 * Headings typography
 * 
 * 
**/

	// Headings typography section
	$wp_customize->add_section( 'loor_typography_headings', array(
		'priority' => 30,
		'title' => __('Headings typography', 'loor'),
		'description' => __('When selecting a default value for the variant, please make sure that the value is valid for the selected Google font.<br><br>If the Font Family for the Headings is the same as for the Main typography, there is no need to choose Styles and Subsets again.', 'loor'),
		'panel' => 'loor_typography_panel'
	));

	$wp_customize->add_setting( 'loor_typography_headings_font_family', array(
		'default' => 'Georgia, serif',
		'sanitize_callback' => 'loor_sanitize_choices'
	));

    $wp_customize->add_control( 'loor_typography_headings_font_family', array(
        'type' => 'select',
		'label' => __('Font Family', 'loor'),
        'description' => __('Select your desired font for the headings.', 'loor'),
        'section' => 'loor_typography_headings',
        'choices' => $font_choices
    ));

    // set styles
    $wp_customize->add_setting( 'loor_typography_heading_styles', array(
        'default' => array('400', '700'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_typography_heading_styles', array(
            'settings' => 'loor_typography_heading_styles',
            'label'    => __('Styles', 'loor'),
            'description' => __('Choose the styles you want to load.', 'loor'),
            'section'  => 'loor_typography_headings',
            'type'     => 'multiple-select',
            'choices'  => $font_styles
            )
        )
    );

    // set subsets
    $wp_customize->add_setting( 'loor_typography_heading_subsets', array(
        'default' => array('latin'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_typography_heading_subsets', array(
            'settings' => 'loor_typography_heading_subsets',
            'label'    => __('Subsets', 'loor'),
            'description' => __('Choose the character sets.', 'loor'),
            'section'  => 'loor_typography_headings',
            'type'     => 'multiple-select',
            'choices'  => $font_subsets
            )
        )
    );

    // set headings letter spacing
    $wp_customize->add_setting('loor_typography_headings_letter_spacing', array(
    	'default' => '0',
    	'sanitize_callback' => 'sanitize_text_field',
    	
    ));
    $wp_customize->add_control('loor_typography_headings_letter_spacing', array(
    	'label' => __('Letter Spacing', 'loor'),
    	'section' => 'loor_typography_headings',
    	'settings' => 'loor_typography_headings_letter_spacing'
    ));

    // default font size for headings
    $hlsize = 3.5;
    for ($i = 1; $i <= 6; $i++) {
	    // Set font size for headings
		switch($i) {
			case 5:
				$hlsize -= 0.35;
				break;
			default:
				$hlsize -= 0.5;
		}
	    $wp_customize->add_setting('loor_typography_headings_h'.$i.'_font_size', array(
			'default' => $hlsize.'em',
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control('loor_typography_headings_h'.$i.'_font_size', array(
			'label' => 'H'.$i,
			'section' => 'loor_typography_headings',
			'settings' => 'loor_typography_headings_h'.$i.'_font_size'
		));

    	// Font weight for h1
    	$wp_customize->add_setting( 'loor_typography_headings_h'.$i.'_weight', array(
    		'default' => '400',
    		'sanitize_callback' => 'loor_sanitize_choices'
    	));

        $wp_customize->add_control( 'loor_typography_headings_h'.$i.'_weight', array(
            'type' => 'select',
    		'label' => __('Weight', 'loor'),
            'section' => 'loor_typography_headings',
            'choices' => $font_weights
        ));

    	// Set line height for h1
    	$wp_customize->add_setting('loor_typography_headings_h'.$i.'_line_height', array(
    		'default' => '1.4',
    		'sanitize_callback' => 'sanitize_text_field',
    		
    	));

    	$wp_customize->add_control('loor_typography_headings_h'.$i.'_line_height', array(
    		'label' => __('Line Height', 'loor'),
    		'section' => 'loor_typography_headings',
    		'settings' => 'loor_typography_headings_h'.$i.'_line_height'
    	));
	}

/**
 * 
 * 
 * Nav typography
 * 
 * 
**/

	// Nav typography section
	$wp_customize->add_section( 'loor_typography_nav', array(
		'priority' => 30,
		'title' => __('Navigation typography', 'loor'),
		'description' => __('When selecting a default value for the variant, please make sure that the value is valid for the selected Google font.<br><br>If the Font Family for the Navigation is the same as for the Main or Headings typography, there is no need to choose Styles and Subsets again.', 'loor'),
		'panel' => 'loor_typography_panel'
	));

	$wp_customize->add_setting( 'loor_typography_navigation_font_family', array(
		'default' => 'Montserrat',
		'sanitize_callback' => 'loor_sanitize_choices'
	));

    $wp_customize->add_control( 'loor_typography_navigation_font_family', array(
        'type' => 'select',
		'label' => __('Font Family', 'loor'),
        'description' => __('Select your desired font for the navigation.', 'loor'),
        'section' => 'loor_typography_nav',
        'choices' => $font_choices
    ));

    // set styles
    $wp_customize->add_setting( 'loor_typography_navigation_styles', array(
        'default' => array('400', '700'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_typography_navigation_styles', array(
            'settings' => 'loor_typography_navigation_styles',
            'label'    => __('Styles', 'loor'),
            'description' => __('Choose the styles you want to load.', 'loor'),
            'section'  => 'loor_typography_nav',
            'type'     => 'multiple-select',
            'choices'  => $font_styles
            )
        )
    );

    // set subsets
    $wp_customize->add_setting( 'loor_typography_navigation_subsets', array(
        'default' => array('latin'),
        'sanitize_callback' => 'loor_sanitize_array'
    ));
     
    $wp_customize->add_control( new Loor_Control_Multiple_Select( $wp_customize, 'loor_typography_navigation_subsets', array(
            'settings' => 'loor_typography_navigation_subsets',
            'label'    => __('Subsets', 'loor'),
            'description' => __('Choose the character sets.', 'loor'),
            'section'  => 'loor_typography_nav',
            'type'     => 'multiple-select',
            'choices'  => $font_subsets
            )
        )
    );

    // set navigation font size 
    $wp_customize->add_setting('loor_navigation_font_size', array(
		'default' => '0.75em',
		'sanitize_callback' => 'sanitize_text_field',
		
	));

	$wp_customize->add_control('loor_navigation_font_size', array(
		'label' => __('Font Size', 'loor'),
		'section' => 'loor_typography_nav',
		'settings' => 'loor_navigation_font_size'
	));

	// Font weight for nav
	$wp_customize->add_setting( 'loor_navigation_typography_weight', array(
		'default' => '700',
		'sanitize_callback' => 'sanitize_text_field',
	));

    $wp_customize->add_control( 'loor_navigation_typography_weight', array(
        'type' => 'select',
		'label' => __('Font Weight', 'loor'),
        'section' => 'loor_typography_nav',
        'choices' => $font_weights
    ));

    // set navigation letter spacing
    $wp_customize->add_setting('loor_typography_navigation_letter_spacing', array(
    	'default' => '0',
    	'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('loor_typography_navigation_letter_spacing', array(
    	'label' => __('Letter Spacing', 'loor'),
    	'section' => 'loor_typography_nav',
    	'settings' => 'loor_typography_navigation_letter_spacing'
    ));

/**
 * 
 * 
 * Advance typography
 * 
 * 
**/
	
	$font_advance_choices = array(
		'same-as-main' => __('Same as the main font', 'loor'),
		'same-as-heading' => __('Same as the heading font', 'loor'),
		'same-as-nav' => __('Same as the navigation font', 'loor'),
	);

	$wp_customize->add_section('loor_site_advance_typography', array(
		'priority' => 30,
		'title' => __('Advance typography', 'loor'),
		'description' => __('Here you can specify what Font Family will apply to choosen elements', 'loor') ,
		'panel' => 'loor_typography_panel'
	));

	// typography for buttons
	$wp_customize->add_setting('loor_site_advance_typography_buttons', array(
		'default' => 'same-as-nav',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_advance_typography_buttons', array(
		'type' => 'select',
		'label' => __('Font Family for buttons', 'loor'),
		'description' => __('Font for all buttons like "Add to cart", "Checkout" and etc.', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'choices' => $font_advance_choices
	));

	// for name and price of product categories
	$wp_customize->add_setting('loor_site_advance_typography_category', array(
		'default' => 'same-as-nav',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_advance_typography_category', array(
		'type' => 'select',
		'label' => __('Font Family for categories', 'loor'),
		'description' => __('Font for name and price of product categories ', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'choices' => $font_advance_choices
	));

	// for main price on the product page
	$wp_customize->add_setting('loor_site_advance_typography_price', array(
		'default' => 'same-as-nav',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_advance_typography_price', array(
		'type' => 'select',
		'label' => __('Font Family for product price', 'loor'),
		'description' => __('Font for main price on the product page.', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'choices' => $font_advance_choices
	));

	// for tabs on the product page.
	$wp_customize->add_setting('loor_site_advance_typography_tabs', array(
		'default' => 'same-as-nav',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_advance_typography_tabs', array(
		'type' => 'select',
		'label' => __('Font Family for tabs', 'loor'),
		'description' => __('Font for tabs on the product page.', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'choices' => $font_advance_choices
	));

	// for blog posts and pages.
	$wp_customize->add_setting('loor_site_advance_typography_blog', array(
		'default' => 'same-as-heading',
		'sanitize_callback' => 'loor_sanitize_choices'
	));
	$wp_customize->add_control('loor_site_advance_typography_blog', array(
		'type' => 'select',
		'label' => __('Font Family for blog', 'loor'),
		'description' => __('Font for blog posts and pages.', 'loor'),
		'section' => 'loor_site_advance_typography',
		'choices' => $font_advance_choices
	));

	// font size for blog and pages
	$wp_customize->add_setting('loor_site_advance_typography_blog_size', array(
		'default' => '1.1em',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_site_advance_typography_blog_size', array(
		'label' => __('Font Size for posts and pages', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'settings' => 'loor_site_advance_typography_blog_size'
	));

	// line-height for blog and pages
	$wp_customize->add_setting('loor_site_advance_typography_blog_line_height', array(
		'default' => '1.75',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_site_advance_typography_blog_line_height', array(
		'label' => __('Line-height for posts and pages', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'settings' => 'loor_site_advance_typography_blog_line_height'
	));

	// font size for main title
	$wp_customize->add_setting('loor_site_advance_typography_main_blog_size', array(
		'default' => '3.8em',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_site_advance_typography_main_blog_size', array(
		'label' => __('Font size for main title', 'loor') ,
		'section' => 'loor_site_advance_typography',
		'settings' => 'loor_site_advance_typography_main_blog_size'
	));

/**
 * 
 * 
 * Responsive typography
 * 
 * 
**/
	
	$wp_customize->add_section('loor_responsive_typography', array(
		'priority' => 40,
		'title' => __('Responsive typography', 'loor'),
		'description' => __('These options let you change font size responsively', 'loor') ,
		'panel' => 'loor_typography_panel'
	));

	// mobile main font size for body 
	$wp_customize->add_setting('loor_responsive_typography_main_mobile', array(
		'default' => '0.85em',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_responsive_typography_main_mobile', array(
		'label' => __('Main font size for mobiles', 'loor'),
		'description' => __('less than 768px', 'loor') ,
		'section' => 'loor_responsive_typography',
		'settings' => 'loor_responsive_typography_main_mobile'
	));

	// tablet main font size for body 
	$wp_customize->add_setting('loor_responsive_typography_main_tablet', array(
		'default' => '0.95em',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('loor_responsive_typography_main_tablet', array(
		'label' => __('Main font size for tablets', 'loor'),
		'description' => __('From 768px to 992px', 'loor') ,
		'section' => 'loor_responsive_typography',
		'settings' => 'loor_responsive_typography_main_tablet'
	));
}
add_action('customize_register', 'loor_font_customizer');

function loor_typography_customize_css() {
		$web_safe_fonts = array( 'Arial, Helvetica, sans-serif', '"Arial Black", Gadget, sans-serif', '"Helvetica Neue", Arial, sans-serif', 'Impact, Charcoal, sans-serif', 'Tahoma, Geneva, sans-serif', '"Times New Roman", Times, serif', 'Verdana, Geneva, sans-serif', 'Georgia, serif', '"Palatino Linotype", "Book Antiqua", Palatino, serif', '"Courier New", Courier, monospace',
		);

		// Get main font
		$main_font = get_theme_mod('loor_typography_main_font_family', 'Open Sans');
		// Check if main font was chosen and it is a Google font
		if ( !empty($main_font) && !in_array($main_font, $web_safe_fonts) ) { 
			
			// Prepare string for google request
			$main_font_link = str_replace(' ', '+', $main_font);
			
			// Prepare string for css
			$main_font = "'" . $main_font . "'";
			
			// Get font styles
			$main_font_styles = get_theme_mod( 'loor_main_typography_styles', array('400', '400italic', '700', '700italic'));
			if ( empty($main_font_styles)) {
				$main_font_styles = array('400', '400italic', '700', '700italic');
			}
			// Prepare string for request
			$main_font_styles = rtrim(implode(',', $main_font_styles), ',');

			// Get subsets
			$main_font_subsets = get_theme_mod( 'loor_main_typography_subsets', array('latin'));
			if ( empty($main_font_subsets)) {
				$main_font_subsets = array('latin');
			}
			// Prepare string for request
			$main_font_subsets = rtrim(implode(',', $main_font_subsets), ',');
			
			?>
			<link href='https://fonts.googleapis.com/css?family=<?php echo $main_font_link; ?>:<?php echo $main_font_styles; ?>&subset=<?php echo $main_font_subsets; ?>' rel='stylesheet' type='text/css'>
		<?php }

		// Get headings font
		$headings_font = get_theme_mod('loor_typography_headings_font_family', 'Georgia, serif');
		// Check if headings font was chosen and it is a Google font and it's different from the main font
		if ( !empty($headings_font) && !in_array($headings_font, $web_safe_fonts) && $headings_font != $main_font) { 
			
			// Prepare string for google request
			$heading_font_link = str_replace(' ', '+', $headings_font);
			
			// Prepare string for css
			$headings_font = "'" . $headings_font . "'";
			
			// Get font styles
			$heading_font_styles = get_theme_mod( 'loor_typography_heading_styles', array('400', '700'));
			if ( empty($heading_font_styles)) {
				$heading_font_styles = array('700');
			}
			// Prepare string for request
			$heading_font_styles = rtrim(implode(',', $heading_font_styles), ',');

			// Get subsets
			$heading_font_subsets = get_theme_mod( 'loor_typography_heading_subsets', array('latin'));
			if ( empty($heading_font_subsets)) {
				$heading_font_subsets = array('latin');
			}
			// Prepare string for request
			$heading_font_subsets = rtrim(implode(',', $heading_font_subsets), ',');
			
			?>
			<link href='https://fonts.googleapis.com/css?family=<?php echo $heading_font_link; ?>:<?php echo $heading_font_styles; ?>&subset=<?php echo $heading_font_subsets; ?>' rel='stylesheet' type='text/css'>
		<?php } elseif ( $headings_font == $main_font ) {
			$headings_font = $main_font;
		}

		// Get navigation font
		$navigation_font = get_theme_mod('loor_typography_navigation_font_family', 'Montserrat');
		// Check if navigation font was chosen and it is a Google font and it's different from the main or heading font
		if ( !empty($navigation_font) && !in_array($navigation_font, $web_safe_fonts) && $navigation_font != $main_font && $navigation_font != $headings_font) { 
			
			// Prepare string for google request
			$navigation_font_link = str_replace(' ', '+', $navigation_font);
			
			// Prepare string for css
			$navigation_font = "'" . $navigation_font . "'";
			
			// Get font styles
			$navigation_font_styles = get_theme_mod( 'loor_typography_navigation_styles', array('400', '700'));
			if ( empty($navigation_font_styles)) {
				$navigation_font_styles = array('700');
			}
			// Prepare string for request
			$navigation_font_styles = rtrim(implode(',', $navigation_font_styles), ',');

			// Get subsets
			$navigation_font_subsets = get_theme_mod( 'loor_typography_navigation_subsets', array('latin'));
			if ( empty($navigation_font_subsets)) {
				$navigation_font_subsets = array('latin');
			}
			// Prepare string for request
			$navigation_font_subsets = rtrim(implode(',', $navigation_font_subsets), ',');
			
			?>
			<link href='https://fonts.googleapis.com/css?family=<?php echo $navigation_font_link; ?>:<?php echo $navigation_font_styles; ?>&subset=<?php echo $navigation_font_subsets; ?>' rel='stylesheet' type='text/css'>
		<?php } 
		elseif ( $navigation_font == $main_font ) {
			$navigation_font = $main_font;
		} 
		elseif ( $navigation_font == $headings_font ) {
			$navigation_font = $headings_font;
		} ?>

		<!-- Main Typography -->
        <style type="text/css">
            body {
            	font-family: <?php echo $main_font; ?>;
            	font-size: <?php echo get_theme_mod('loor_main_font_size', '1em'); ?>; 
            	letter-spacing: <?php echo get_theme_mod('loor_main_letter_spacing', '0'); ?>; 
            	font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>; 
            	line-height: <?php echo get_theme_mod('loor_main_line_height', '1.5'); ?>; 
           	}

           	h1,h2,h3,h4,h5,h6 {
           		font-family: <?php echo $headings_font; ?>;
           		letter-spacing: <?php echo get_theme_mod('loor_typography_headings_letter_spacing', '0'); ?>; 
           	}

           	<?php
           		$hlsize = 3.5;
           		for ($i = 1; $i <= 6; $i++) {
           			switch($i) {
           				case 5:
           					$hlsize -= 0.35;
           					break;
           				default:
           					$hlsize -= 0.5;
           			}
           			echo "h".$i." { 
           				font-size: ".get_theme_mod('loor_typography_headings_h'.$i.'_font_size', $hlsize.'em')."; 
						font-weight: ".get_theme_mod('loor_typography_headings_h'.$i.'_weight', '400')."; 
						line-height: ".get_theme_mod('loor_typography_headings_h'.$i.'_line_height', '1.4')."; 
           			}";
           		}
           	?>



           	.woocommerce div.product .product_title {
           		font-size: calc(<?php echo get_theme_mod('loor_typography_headings_h1_font_size', '3em'); ?> - 1em);
           		line-height: 1.3;
           	}

           	@media (min-width: 768px) {
           		.woocommerce div.product .product_title {
           			font-size: calc(<?php echo get_theme_mod('loor_typography_headings_h1_font_size', '3em'); ?> - 0.7em);
           		}
           	}

           	#screen-nav ul li a,
           	#mobile-nav ul li a,
           	.woocommerce-MyAccount-navigation a,
           	.woocommerce div.product .woocommerce-tabs ul.tabs li a,
           	.top-position-product .top-position-product-container p,
           	.top-position-product {
           		font-family: <?php echo $navigation_font; ?>;
           		font-size: <?php echo get_theme_mod('loor_navigation_font_size', '0.75em'); ?>; 
           		letter-spacing: <?php echo get_theme_mod('loor_typography_navigation_letter_spacing', '0'); ?>; 
           		font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	}

        /* advance typography */
           	/* buttons */
           	button,
           	input[type="submit"],
           	.woocommerce div.product form.cart .button,
           	.woocommerce #respond input#submit,
           	.woocommerce a.button,
           	.woocommerce button.button,
           	.woocommerce input.button,
           	
           	.woocommerce #respond input#submit.alt,
           	.woocommerce a.button.alt,
           	.woocommerce button.button.alt,
           	.woocommerce input.button.alt,
           	
           	.woocommerce a.added_to_cart {
           	    <?php if ( get_theme_mod('loor_site_advance_typography_buttons', 'same-as-nav') == 'same-as-nav' ) : ?>
           	        font-family: <?php echo $navigation_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	    <?php elseif ( get_theme_mod('loor_site_advance_typography_buttons', 'same-as-nav') == 'same-as-heading' ) : ?>
           	        font-family: <?php echo $headings_font; ?>;
           	    <?php else : ?>
           	        font-family: <?php echo $main_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>;
           	    <?php endif; ?>
           	}
           	        
           	/* product category  */
           	.woocommerce ul.products li.product a p,
           	.woocommerce ul.products li.product .price {
           	    <?php if ( get_theme_mod('loor_site_advance_typography_category', 'same-as-nav') == 'same-as-nav' ) : ?>
           	        font-family: <?php echo $navigation_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	    <?php elseif ( get_theme_mod('loor_site_advance_typography_category', 'same-as-nav') == 'same-as-heading' ) : ?> 
           	        font-family: <?php echo $headings_font; ?>;
           	    <?php else : ?>
           	        font-family: <?php echo $main_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>;
           	    <?php endif; ?>
           	}
           	
           	/* price */
           	.woocommerce div.product p.price {
           	    <?php if (get_theme_mod('loor_site_advance_typography_price', 'same-as-nav') == 'same-as-nav') : ?>
           	        font-family: <?php echo $navigation_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	    <?php elseif (get_theme_mod('loor_site_advance_typography_price', 'same-as-nav') == 'same-as-heading') : ?>
           	        font-family: <?php echo $headings_font; ?>;
           	    <?php else : ?>
           	        font-family: <?php echo $main_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>;
           	    <?php endif; ?>
           	}
           	
           	/* tabs */
           	.woocommerce div.product .woocommerce-tabs ul.tabs li a {
           	    <?php if (get_theme_mod('loor_site_advance_typography_tabs', 'same-as-nav') == 'same-as-nav') : ?>
           	        font-family: <?php echo $navigation_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	    <?php elseif (get_theme_mod('loor_site_advance_typography_tabs', 'same-as-nav') == 'same-as-heading') : ?>
           	       	font-family: <?php echo $headings_font; ?>;
           	    <?php else : ?>
           	        font-family: <?php echo $main_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>;
           	    <?php endif; ?>
           	}
           	
           	/* blog and pages */
           	body #yumecommerce-page {
           	    <?php if (get_theme_mod('loor_site_advance_typography_blog', 'same-as-heading') == 'same-as-nav') : ?>
           	        font-family: <?php echo $navigation_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_navigation_typography_weight', '700'); ?>; 
           	    <?php elseif (get_theme_mod('loor_site_advance_typography_blog', 'same-as-heading') == 'same-as-heading') : ?>
           	        font-family: <?php echo $headings_font; ?>;
           	    <?php else : ?>
           	        font-family: <?php echo $main_font; ?>;
           	        font-weight: <?php echo get_theme_mod('loor_main_typography_weight', '400'); ?>;
           	    <?php endif; ?>
           	    font-size: <?php echo get_theme_mod('loor_site_advance_typography_blog_size', '1.1em'); ?>;
           	    line-height: <?php echo get_theme_mod('loor_site_advance_typography_blog_line_height', '1.75'); ?>;
           	}

           	.main-title {
           		font-size: <?php echo get_theme_mod('loor_site_advance_typography_main_blog_size', '3.8em'); ?>; 
           	}

           	@media (max-width: 992px) {
           		body {
           			font-size: <?php echo get_theme_mod('loor_responsive_typography_main_tablet', '0.95em'); ?>; 
           		}
           	}

           	@media (max-width: 767px) {
           		body {
           			font-size: <?php echo get_theme_mod('loor_responsive_typography_main_mobile', '0.85em'); ?>; 
           		}
           		.main-title {
           			font-size: calc(<?php echo get_theme_mod('loor_site_advance_typography_main_blog_size', '3.8em'); ?> - 1em); 
           		}
           	}
        </style>
    <?php
}
add_action( 'wp_head', 'loor_typography_customize_css');