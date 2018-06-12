@php
    $data = array(
        (object)array(
            'data' => url('faq'),
            'text' => 'FAQ',
            'active' => 'FALSE'
        ),
        (object)array(
            'data' => '#',
            'text' => 'My Revenue',
            'active' => 'FALSE'
        ),
        (object)array(
            'data' =>  url('order'),
            'text' => 'Track My Order',
            'active' => 'FALSE'
        ),
        (object)array(
            'data' => url('contact'),
            'text' => 'Contact Us',
            'active' => 'FALSE'
        ),
        (object)array(
            'data' => '#',
            'text' => '------',
            'active' => 'FALSE'
        ),
    );
@endphp

@include ('navigation-mobile', ['navigationData' => $data])
@include ('navigation-desktop', ['navigationData' => $data])
