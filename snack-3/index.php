<?php
$posts = [
        '10/01/2020' => [
            [
            'titolo' => 'post 1',
            'autore' => 'Alessandro Rossi',
            'testo' => 'testo 1'
            ],
            [
            'titolo' => 'post 2',
            'autore' => 'Fabio Bianchi',
            'testo' => 'testo 2',
            ]
            ],
        '12/01/2020' => [
            [
            'titolo' => 'post 3',
            'autore' => 'Marta Bassi',
            'testo' => 'testo 3'
            ],
            [
            'titolo' => 'post 4',
            'autore' => 'Federico Gialli',
            'testo' => 'testo 4',
                
            ]
            ],
        '14/01/2020' => [
            [
            'titolo' => 'post 5',
            'autore' => 'Liliana Marchi',
            'testo' => 'testo 5'
            ],
            [
            'titolo' => 'post 6',
            'autore' => 'Anna Gai',
            'testo' => 'testo 6'
            ]
            ],
        '15/01/2020' => [
            [
            'titolo' => 'post 7',
            'autore' => 'Giovanni Neri',
            'testo' => 'testo 7',
            ],
            [
            'titolo' => 'post 8',
            'autore' => 'Marco Remo',
            'testo' => 'testo 8',
            ]
            ],
        '17/01/2020' => [
            [
            'titolo' => 'post 9',
            'autore' => 'Gianni Pinamonti',
            'testo' => 'testo 9',
            ],
            [
            'titolo' => 'post 10',
            'autore' => 'Paola Fabbri',
            'testo' => 'testo 10', 
            ]
        ]
      ];
      ?>
      <ul>
      <?php
      foreach ($posts as $date => $post) {
        foreach ($post as $key => $value) {
      ?>
      <li>
        <?php
          echo("L'utente " .$value['autore']. " ha scritto il seguente post: " .$value['testo']. ", il giorno: " .$date);
        ?>
      </li>
      <?php
        }
      }
      ?>
    </ul>