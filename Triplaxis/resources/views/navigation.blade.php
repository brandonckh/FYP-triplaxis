@php
    $data = array(
        (object)array(
            'data' => url('faq'),
            'text' => 'FAQ',
	    'loginrequired' => 'FALSE',
	    'hasSubCatalog'=> 'FALSE',
            'active' => 'FALSE'
        ),
        (object)array(
            'data' => '#',
	    'text' => 'Products',
            'hasSubCatalog' => 'TRUE',
	    'subCatalog' => array(
		(object) array(
			'type' => 'url',
			'text' => 'Accessories',
			'url' => url('/browse?id=2')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Cases',
			'url' => url('/browse?id=3')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Figurine',
			'url' => url('/browse?id=4')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Hobbies',
			'url' => url('/browse?id=5')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Jewellery',
			'url' => url('/browse?id=6')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Keychains',
			'url' => url('/browse?id=7')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Toys',
			'url' => url('/browse?id=8')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Others',
			'url' => url('/browse?id=9')
		),
		(object) array(
			'type' => 'url',
			'text' => 'Show All',
			'url' => url('/browse/?id=10')
		)
		),
	    'loginrequired' => 'FALSE',
            'active' => 'FALSE'
        ),
	(object)array(
	
	    'hasSubCatalog'=> 'FALSE',
            'data' =>  url('order'),
	    'loginrequired' => 'TRUE',
           'text' => 'Track My Order',
            'active' => 'FALSE'
        ),
        (object)array(
	    'hasSubCatalog'=> 'FALSE',
            'data' => url('contact'),
            'text' => 'Contact Us',
	    'loginrequired' => 'FALSE',
            'active' => 'FALSE'
        ),
        (object)array(
	    'hasSubCatalog'=> 'FALSE',
            'data' => '#',
	    'loginrequired' => 'FALSE',
            'text' => '------',
            'active' => 'FALSE'
        ),
    );
@endphp

@include ('navigation-mobile', ['navigationData' => $data])
@include ('navigation-desktop', ['navigationData' => $data])
<div class="container">
