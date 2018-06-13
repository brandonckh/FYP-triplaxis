@include ('header', ['title' => 'FAQ | Triplaxis'])
@include ('navigation')
        <div class="container">
          <h2>Frequently Asked Questions</h2>
          <div class="row">
            <div class="col-md-4 offset-md-1">
               <ul>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 offset-md-1">
              <ul>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
                <li>
                  <a href="">How can I help you?</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
        <h2>Topics</h2>
        @php
        $item = array(
            (object) array(
                'title' => 'How it Works?',
                'description' => 'Click on the button and find out how our system works.',
                'url' => url('how-it-works')
            ),
            (object) array(
                'title' => 'How to earn revenue?',
                'description' => 'Click on the button and find out how to earn money on Triplaxis platform by selling you designs.',
                'url' => url('revenue')
            ),
            (object) array(
                'title' => 'Terms and Condition?',
                'description' => 'Click on the button and find out more about the terms and condition.',
                'url' => url('tos')
            ),
        );

@endphp
    <div class="row">
    @include ('topic', ['topic' => $item])
    </div>
</div>
@include ('footer')
