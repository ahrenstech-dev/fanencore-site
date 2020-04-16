<?php

$fake = Faker\Factory::create();

$words = fn () => ucwords($fake->words(2, true));

$contact = fn () => [
  'company' => $fake->company,
  'city' => $fake->city,
  'state' => $fake->state,
  'zip' => $fake->postcode,
  'email' => $fake->email,
  'phone' => $fake->phoneNumber
];

$person = fn () => [
  'fname' => $fake->firstName,
  'lname' => $fake->lastName,
  'contact' => $contact()
];

$img = fn ($w, $h) => [
  'src' => "https://picsum.photos/$w/$h.jpg",
  'width' => $w,
  'height' => $h
];

$card = fn () => [
  'title' => $words(),
  'category' => $words(),
  'date' => strtotime($fake->date),
  'text' => $fake->text(100),
  'image' => $img(200, 250)
];

$post = fn () => [
  'title' => $words(),
  'date' => strtotime($fake->date),
  'author' => $person(),
  'body' => sprintf('<p>%s</p>', implode('</p><p>', $fake->paragraphs))
];

return [
  '...' => fn () => [
    'title' => ['/', 'XYZ'],
    'view' => 'layout/root',
    'layout' => 'layout/main',
    'site' => [
      'logo' => $img(200, 100),
      'banner' => $img(600, 100),
      'menu' => [
        'items' => [
          ['/','Home'],
          ['/teams','Teams'],
          ['/events','Events'],
          ['/venues','Venues'],
          ['/announcements','Announcements'],
          ['/resources','Resources'],
          ['/photos','Photos'],
          ['/camps','Camps'],
          ['/boosters','Boosters'],
          ['/shop','Shop']
        ]
      ],
      'contact' => $contact()
    ]
  ],
  '/' => fn () => [
    'view' => 'home'
  ],
  '/(announcements|boosters|camps)' => fn () => [
    'view' => 'empty'
  ],
  '/(login|register)' => fn () => [
    'layout' => 'layout/focus'
  ],
  '/login' => fn () => [
    'title' => 'Login',
    'view' => 'login'
  ],
  '/events...' => fn () => [
    'title' => ['/events', 'Events']
  ],
  '/events' => fn () => [
    'view' => 'calendar'
  ],
  '/events/$' => fn ($slug) => [
    'title' => ["/events/$slug", 'Event XYZ'],
    'view' => 'blog',
    'jumbotron' => [
      'label' => $slug,
      'text' => $fake->text
    ],
    'featured' => [$card(), $card()],
    'posts' => [$post(), $post()]
  ],
  '/photos' => fn () => [
    'title' => ['/photos','Photos'],
    'view' => 'gallery'
  ],
  '/resources' => fn () => [
    'title' => ['/resources','Resources'],
    'view' => 'portfolio'
  ],
  '/teams' => fn () => [
    'title' => ['/teams','Teams'],
    'view' => 'boxes'
  ],
  '/venues' => fn () => [
    'title' => ['/venues','Venues'],
    'view' => 'rects'
  ]
];
