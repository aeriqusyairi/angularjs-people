<?php
/**
 * People's Api
 * @author aeriqusyairi
 */
header('Content-type: application/json');

if(isset($_GET['scope']) && !empty($_GET['scope'])){
  $scope = $_GET['scope'];

  //output list of people
  if($scope == 'list'){

echo '
  [
  {
    "id": "540a40330917103f7590eef8",
    "name": "Woodard Rowe",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 26,
    "gender": "male",
    "eyeColor": "Blue",
    "email": "woodardrowe@corporana.com",
    "phone": "+1 (839) 437-3487",
    "address": "562 Hewes Street, Garfield, Guam, 5381",
    "company": "HIVEDOM",
    "latitude": 8.333049,
    "longitude": -64.268153,
    "registered": "2014-04-13T14:33:13 -08:00",
    "about": "Nulla ipsum non officia quis dolore incididunt dolor mollit et consequat. Officia excepteur irure est cillum sunt in et culpa in amet deserunt est. Aute reprehenderit quis ad consequat qui amet minim culpa irure.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Norton Santiago"
      },
      {
        "id": 1,
        "name": "Stanton Levy"
      },
      {
        "id": 2,
        "name": "Cross Delacruz"
      }
    ]
  },
  {
    "id": "540a40331537f4e182acee21",
    "name": "Kane Roach",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 25,
    "gender": "male",
    "eyeColor": "Blue",
    "email": "kaneroach@hivedom.com",
    "phone": "+1 (989) 404-3079",
    "address": "105 Village Road, Eggertsville, Oregon, 2744",
    "company": "BLUPLANET",
    "latitude": -44.010384,
    "longitude": 72.382242,
    "registered": "2014-03-29T23:22:14 -08:00",
    "about": "Incididunt do eiusmod est velit adipisicing cupidatat est aliqua. Consectetur cillum voluptate pariatur et adipisicing voluptate. Exercitation incididunt incididunt reprehenderit commodo pariatur laborum mollit consectetur elit ea quis do. Eiusmod eiusmod aliqua irure tempor cupidatat elit duis laboris sunt esse et. Consectetur veniam laboris ea tempor officia magna non voluptate cupidatat pariatur.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Janie Guy"
      },
      {
        "id": 1,
        "name": "Hoover Henderson"
      },
      {
        "id": 2,
        "name": "Queen Hood"
      }
    ]
  },
  {
    "id": "540a4033414267c5be5bdf44",
    "name": "Decker Vance",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 31,
    "gender": "male",
    "eyeColor": "Red and violet",
    "email": "deckervance@bluplanet.com",
    "phone": "+1 (964) 450-3453",
    "address": "695 Quay Street, Maplewood, Virgin Islands, 9280",
    "company": "EARBANG",
    "latitude": 74.881522,
    "longitude": -60.042223,
    "registered": "2014-08-20T09:00:39 -08:00",
    "about": "Deserunt sit exercitation aliquip mollit ullamco commodo magna est cillum magna fugiat incididunt. Irure voluptate aute exercitation fugiat occaecat tempor laborum ad incididunt aliquip ullamco esse quis ex. Tempor Lorem nostrud magna eiusmod ea labore.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Donaldson Tyler"
      },
      {
        "id": 1,
        "name": "Valeria Steele"
      },
      {
        "id": 2,
        "name": "Small Jenkins"
      }
    ]
  },
  {
    "id": "540a4033a772145c415d2c5b",
    "name": "Stacy Stanley",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 27,
    "gender": "female",
    "eyeColor": "Hazel",
    "email": "stacystanley@earbang.com",
    "phone": "+1 (986) 525-2449",
    "address": "427 Mill Avenue, Martell, Louisiana, 1542",
    "company": "TASMANIA",
    "latitude": -33.891393,
    "longitude": 127.540886,
    "registered": "2014-03-21T05:38:01 -08:00",
    "about": "Laborum voluptate do mollit proident commodo incididunt laboris magna. Sit deserunt do amet ad cupidatat pariatur sit eu excepteur ullamco. Dolor nostrud deserunt anim nulla aute eu pariatur. Cillum do aliquip labore ex aute tempor ex ullamco laborum est est cupidatat Lorem officia.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Sonya Mullen"
      },
      {
        "id": 1,
        "name": "Therese Phelps"
      },
      {
        "id": 2,
        "name": "Mathews Mathis"
      }
    ]
  },
  {
    "id": "540a4033f5a52e4c11562481",
    "name": "Nannie Waters",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 34,
    "gender": "female",
    "eyeColor": "Blue",
    "email": "nanniewaters@tasmania.com",
    "phone": "+1 (824) 452-3916",
    "address": "965 Hubbard Place, Townsend, Arizona, 2153",
    "company": "STRALOY",
    "latitude": 17.937829,
    "longitude": -80.064631,
    "registered": "2014-05-12T18:36:11 -08:00",
    "about": "Ea mollit occaecat labore ipsum voluptate non ad sint dolor consectetur reprehenderit. Eiusmod aliqua sunt sint esse consectetur voluptate amet nulla do. Incididunt duis nostrud consectetur id ad nulla do eu pariatur mollit officia labore. Proident exercitation cupidatat aliqua culpa ut tempor tempor sunt aliqua aliqua. Id aliquip sunt cupidatat amet mollit velit ipsum aliqua dolor incididunt. Adipisicing fugiat nulla commodo do. Magna ullamco reprehenderit ullamco ea officia voluptate in aute.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Judy Hester"
      },
      {
        "id": 1,
        "name": "Beverly Hickman"
      },
      {
        "id": 2,
        "name": "Janine Branch"
      }
    ]
  },
  {
    "id": "540a40330614b882a30a5110",
    "name": "Snyder Campos",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 25,
    "gender": "male",
    "eyeColor": "Grey",
    "email": "snydercampos@straloy.com",
    "phone": "+1 (869) 598-3079",
    "address": "832 Lloyd Court, Wadsworth, Maryland, 4380",
    "company": "COGNICODE",
    "latitude": -14.056247,
    "longitude": 36.024754,
    "registered": "2014-02-05T20:50:05 -08:00",
    "about": "Tempor et excepteur ea aute aute esse officia in sunt. Magna quis officia pariatur incididunt consequat occaecat velit pariatur ex eiusmod tempor sint officia nostrud. Eiusmod ipsum sint tempor cupidatat ad veniam non elit. Aliqua occaecat aliquip nostrud Lorem. Est eiusmod adipisicing irure aute anim culpa deserunt eiusmod eiusmod. Magna ipsum exercitation aliqua nisi eu minim aute.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Noble Waller"
      },
      {
        "id": 1,
        "name": "Talley Blevins"
      },
      {
        "id": 2,
        "name": "Gallegos Riddle"
      }
    ]
  },
  {
    "id": "540a4033a189df64b80f6cbd",
    "name": "Chambers Hernandez",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 38,
    "gender": "male",
    "eyeColor": "Amber",
    "email": "chambershernandez@cognicode.com",
    "phone": "+1 (999) 515-3177",
    "address": "457 Devon Avenue, Derwood, Washington, 4265",
    "company": "GAZAK",
    "latitude": -68.269621,
    "longitude": 141.414599,
    "registered": "2014-03-15T12:24:42 -08:00",
    "about": "Quis velit dolor quis in sint sit irure irure qui consectetur deserunt esse. Exercitation eiusmod id consequat fugiat nostrud. Occaecat commodo quis veniam exercitation mollit tempor dolore adipisicing aliqua voluptate in labore mollit laborum. Velit voluptate velit irure sit ut enim in cillum quis. Cillum commodo sunt duis id sit sint ea officia excepteur.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Hyde Grant"
      },
      {
        "id": 1,
        "name": "Warren Hogan"
      },
      {
        "id": 2,
        "name": "Violet Nixon"
      }
    ]
  },
  {
    "id": "540a4033ee77652f834001e1",
    "name": "Peck Weeks",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 36,
    "gender": "male",
    "eyeColor": "Blue",
    "email": "peckweeks@gazak.com",
    "phone": "+1 (809) 470-3302",
    "address": "440 Lott Avenue, Snowville, Alabama, 3280",
    "company": "SEALOUD",
    "latitude": 22.74115,
    "longitude": 170.004277,
    "registered": "2014-06-27T14:00:22 -08:00",
    "about": "Lorem fugiat officia magna magna dolore ut. Duis cupidatat mollit cupidatat consectetur aliqua fugiat. Consequat fugiat in laboris ea mollit sunt eu aliqua deserunt id laboris laborum velit. Magna eu aliquip velit consequat laboris deserunt velit dolore in eiusmod minim.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Dudley Cohen"
      },
      {
        "id": 1,
        "name": "Foster Gilliam"
      },
      {
        "id": 2,
        "name": "Thornton Montoya"
      }
    ]
  },
  {
    "id": "540a40335cd2cf7278b45cd6",
    "name": "Tommie Daugherty",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 23,
    "gender": "female",
    "eyeColor": "Hazel",
    "email": "tommiedaugherty@sealoud.com",
    "phone": "+1 (858) 530-2168",
    "address": "654 Waldorf Court, Roosevelt, Florida, 1323",
    "company": "ANOCHA",
    "latitude": 55.514613,
    "longitude": -136.021848,
    "registered": "2014-02-22T05:27:39 -08:00",
    "about": "Enim eiusmod deserunt non pariatur et. Consectetur fugiat dolor voluptate dolor quis nostrud proident tempor sint aliquip cupidatat. Est elit ullamco occaecat culpa excepteur anim voluptate. Velit cupidatat ipsum elit Lorem duis esse. Do amet ea veniam dolore ullamco est. Irure Lorem labore aliquip sit nulla cillum cupidatat aute nisi exercitation consectetur consequat.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Wendi Evans"
      },
      {
        "id": 1,
        "name": "Burnett Fry"
      },
      {
        "id": 2,
        "name": "Britney Buckner"
      }
    ]
  },
  {
    "id": "540a4033d16baa395fe29d8f",
    "name": "Gwendolyn Wiggins",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 40,
    "gender": "female",
    "eyeColor": "Hazel",
    "email": "gwendolynwiggins@anocha.com",
    "phone": "+1 (929) 443-3906",
    "address": "397 Pulaski Street, Cochranville, North Dakota, 5467",
    "company": "GEEKFARM",
    "latitude": 66.094654,
    "longitude": -83.400794,
    "registered": "2014-03-31T04:43:58 -08:00",
    "about": "Tempor anim eiusmod anim adipisicing sint consectetur nisi minim ullamco quis eiusmod eiusmod non eiusmod. Proident id ut minim pariatur id elit ipsum cillum ea dolore pariatur aliqua voluptate. Et pariatur ipsum cupidatat adipisicing consectetur ipsum occaecat exercitation elit aute. Amet dolor velit eiusmod ea laboris non consectetur amet nulla officia magna do. Magna adipisicing magna nostrud commodo quis fugiat culpa Lorem reprehenderit culpa proident sunt ea cupidatat.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Avis Acevedo"
      },
      {
        "id": 1,
        "name": "Maryann Suarez"
      },
      {
        "id": 2,
        "name": "Stephanie Mccullough"
      }
    ]
  },
  {
    "id": "540a40331a5c2ed911a6fcbf",
    "name": "Doreen Burns",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 40,
    "gender": "female",
    "eyeColor": "Green",
    "email": "doreenburns@geekfarm.com",
    "phone": "+1 (870) 436-2645",
    "address": "491 Kansas Place, Davenport, Vermont, 6591",
    "company": "COWTOWN",
    "latitude": 51.875695,
    "longitude": 118.401063,
    "registered": "2014-05-02T10:27:59 -08:00",
    "about": "Nulla ex velit esse id cupidatat tempor quis eiusmod reprehenderit ipsum dolor velit. Qui eu qui non laboris aliqua est pariatur sint culpa. Incididunt aute cupidatat eu proident non voluptate eiusmod tempor fugiat.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Osborne Bryan"
      },
      {
        "id": 1,
        "name": "Hawkins Guzman"
      },
      {
        "id": 2,
        "name": "Beryl Petty"
      }
    ]
  },
  {
    "id": "540a40338b0c0b86a048cc2b",
    "name": "Cunningham Dawson",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 21,
    "gender": "male",
    "eyeColor": "Brown",
    "email": "cunninghamdawson@cowtown.com",
    "phone": "+1 (957) 508-2494",
    "address": "525 Meserole Street, Cartwright, Delaware, 4130",
    "company": "ACUMENTOR",
    "latitude": -62.616067,
    "longitude": 175.436333,
    "registered": "2014-03-26T08:49:19 -08:00",
    "about": "Ut ea anim commodo minim proident. In in magna velit reprehenderit ullamco ad voluptate eiusmod. Ad nulla elit commodo aute nisi dolore minim laboris eu irure.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Gracie Velazquez"
      },
      {
        "id": 1,
        "name": "Martha Foley"
      },
      {
        "id": 2,
        "name": "Gentry Roth"
      }
    ]
  },
  {
    "id": "540a40336dbd256b03663a17",
    "name": "Harrell Hobbs",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 30,
    "gender": "male",
    "eyeColor": "Blue",
    "email": "harrellhobbs@acumentor.com",
    "phone": "+1 (917) 499-2724",
    "address": "414 Calder Place, Garberville, Maine, 3374",
    "company": "JOVIOLD",
    "latitude": -81.580531,
    "longitude": 67.437891,
    "registered": "2014-03-30T01:24:04 -08:00",
    "about": "Et duis nulla nisi eu aliquip fugiat. Do voluptate culpa eiusmod sunt proident culpa deserunt nostrud et cillum occaecat veniam. Est mollit eiusmod aliquip quis. Ipsum ex magna ut ullamco consectetur esse do. Id sint qui excepteur officia tempor esse nisi commodo ullamco est labore voluptate anim sunt. Exercitation nisi in eu amet non magna officia amet occaecat elit excepteur enim dolore minim.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Leonard Cooley"
      },
      {
        "id": 1,
        "name": "Brianna Whitaker"
      },
      {
        "id": 2,
        "name": "Lourdes Parrish"
      }
    ]
  },
  {
    "id": "540a4033588a4e154b60086a",
    "name": "Winnie Hubbard",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 31,
    "gender": "female",
    "eyeColor": "Amber",
    "email": "winniehubbard@joviold.com",
    "phone": "+1 (945) 481-2492",
    "address": "543 Chester Street, Stewartville, Puerto Rico, 4971",
    "company": "QIAO",
    "latitude": -73.534787,
    "longitude": -33.348173,
    "registered": "2014-07-15T03:09:15 -08:00",
    "about": "Duis incididunt cillum ad id aliqua eu ad officia aliqua ea. Magna ad eu dolore commodo deserunt cupidatat ea aliquip ipsum magna velit id id. Nisi Lorem ipsum exercitation culpa cillum labore sint dolore dolor minim ad ut esse. Dolore irure ipsum ipsum dolor eu fugiat amet elit anim adipisicing. Occaecat irure culpa aliqua eiusmod cillum ex pariatur Lorem reprehenderit ea labore magna. Cillum pariatur magna duis reprehenderit cupidatat sunt irure aliqua velit.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Eileen Kramer"
      },
      {
        "id": 1,
        "name": "Palmer Lawrence"
      },
      {
        "id": 2,
        "name": "Blackburn Lane"
      }
    ]
  },
  {
    "id": "540a403371241c89afb16340",
    "name": "Rowena Mays",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 28,
    "gender": "female",
    "eyeColor": "Hazel",
    "email": "rowenamays@qiao.com",
    "phone": "+1 (802) 580-3804",
    "address": "618 Irving Avenue, Graniteville, Northern Mariana Islands, 3386",
    "company": "FIBRODYNE",
    "latitude": 64.507965,
    "longitude": -162.166117,
    "registered": "2014-03-16T21:03:55 -08:00",
    "about": "Exercitation anim qui ipsum velit eiusmod minim culpa exercitation irure aliqua laborum sint amet. Dolore tempor ad in sunt culpa pariatur quis anim culpa ea. Lorem cupidatat laboris proident sunt ullamco consequat qui anim ea voluptate sit nostrud nulla. Nulla exercitation id ex ad. Reprehenderit duis irure incididunt proident dolor magna occaecat proident occaecat esse anim.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Duke Dorsey"
      },
      {
        "id": 1,
        "name": "Dunlap Dotson"
      },
      {
        "id": 2,
        "name": "Estela Jacobson"
      }
    ]
  },
  {
    "id": "540a4033b12b48baff7b72f4",
    "name": "Newman Rosales",
    "isActive": false,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 21,
    "gender": "male",
    "eyeColor": "Hazel",
    "email": "newmanrosales@fibrodyne.com",
    "phone": "+1 (870) 479-3910",
    "address": "855 Malbone Street, Kylertown, Rhode Island, 8770",
    "company": "QUARX",
    "latitude": -1.327595,
    "longitude": 105.637598,
    "registered": "2014-04-15T06:59:28 -08:00",
    "about": "Elit tempor eiusmod magna id aliquip dolor. Dolore anim mollit ex in. Aute ex velit elit consequat minim quis officia et labore non tempor ad ex. Officia occaecat culpa laboris nostrud nulla. Incididunt exercitation sit est aliquip.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Antonia Patel"
      },
      {
        "id": 1,
        "name": "John Fuller"
      },
      {
        "id": 2,
        "name": "Gretchen Briggs"
      }
    ]
  },
  {
    "id": "540a40339e9c1cbd1060fd7d",
    "name": "Case Hinton",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 22,
    "gender": "male",
    "eyeColor": "Hazel",
    "email": "casehinton@quarx.com",
    "phone": "+1 (840) 483-3162",
    "address": "340 Kingsland Avenue, Cleary, Ohio, 6209",
    "company": "PASTURIA",
    "latitude": 67.452406,
    "longitude": -169.846523,
    "registered": "2014-05-07T17:19:55 -08:00",
    "about": "Reprehenderit ipsum Lorem quis deserunt. Deserunt id laborum proident Lorem ea quis id. Cupidatat sunt ad non eu.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Francis Clark"
      },
      {
        "id": 1,
        "name": "Norman Rojas"
      },
      {
        "id": 2,
        "name": "Daniels Medina"
      }
    ]
  },
  {
    "id": "540a4033e259361447bfb0c0",
    "name": "Jordan Franklin",
    "isActive": true,
    "thumbnail": "http://placehold.it/32x32",
    "picture": "http://placehold.it/200x200",
    "age": 28,
    "gender": "female",
    "eyeColor": "Blue",
    "email": "jordanfranklin@pasturia.com",
    "phone": "+1 (950) 531-2588",
    "address": "456 Cobek Court, Kent, Georgia, 7646",
    "company": "MUSANPOLY",
    "latitude": 54.78018,
    "longitude": 27.148908,
    "registered": "2014-06-16T18:53:27 -08:00",
    "about": "Anim incididunt cillum qui consectetur ipsum pariatur pariatur minim officia adipisicing ipsum deserunt est. Occaecat aliqua velit anim minim velit. Irure laboris anim eiusmod magna duis dolore. Non id consectetur magna exercitation velit culpa dolor commodo adipisicing duis. Nisi ipsum ea reprehenderit qui eiusmod ut proident enim velit. Nostrud aliqua exercitation ea deserunt do fugiat. Aliquip sit do consectetur pariatur.\r\n",
    "friends": [
      {
        "id": 0,
        "name": "Marissa Deleon"
      },
      {
        "id": 1,
        "name": "Eliza Marsh"
      },
      {
        "id": 2,
        "name": "Huff Mcclain"
      }
    ]
  }
]
';
}else{
  invalid();
}


}else{
  invalid();
}

function invalid(){
  echo '{"status": "invalid request"}';
}

