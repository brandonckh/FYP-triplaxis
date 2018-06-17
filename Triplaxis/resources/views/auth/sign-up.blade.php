@include ('header', ['title' => 'Sign Up | Triplaxis'])
@include ('navigation')
<div class="body-padding">
<h1>Create your account here!</h1>
@php 
    $form = array(
        (object) array(
            "type" => "text",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "First Name"
        ),
        (object) array(
            "type" => "text",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "Last Name"
        ),
        (object) array(
            "type" => "email",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "E-mail"
        ),
        (object) array(
            "type" => "text",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "Mobile Number"
        ),
        (object) array(
            "type" => "password",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "Password"
        ),
        (object) array(
            "type" => "password",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "Confirm Password"
        ),
        (object) array(
            "type" => "checkbox",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "I want to receive exclusive offers and promotion from Triplaxis"
        ),
        (object) array(
            "type" => "checkbox",
            "prefix" => "NONE",
            "Helptext" => "NONE",
            "label" => "Agree on the Terms & condition"
        )
    );
@endphp
@include ('form', ['form' => $form])
</div>
@include ('footer')
