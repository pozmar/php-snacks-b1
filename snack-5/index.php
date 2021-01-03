<!--Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo.-->
<?php
$testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare mi ipsum, ut mattis ante cursus nec. Vivamus sit amet dolor lacus. Etiam laoreet posuere eros, ac luctus ligula maximus quis. Donec eget eleifend velit, sed rhoncus nunc. Phasellus ut molestie leo, vitae posuere leo. Morbi consequat sollicitudin risus. Cras faucibus, enim ac sodales convallis, quam justo aliquam arcu, et faucibus nulla nunc vitae turpis. Sed pretium aliquam ex, in scelerisque quam ornare ac. Nulla facilisi. Proin ante est, maximus ac ornare tincidunt, gravida nec turpis.Fusce eget dapibus lorem, ac ullamcorper lorem. Morbi sed augue eu est bibendum luctus tincidunt vitae eros. Cras in enim ut arcu tempus feugiat eu quis elit. Quisque fringilla vestibulum tortor, interdum bibendum ante viverra ac. Praesent quis leo placerat, congue lectus ac, cursus mauris. Phasellus eros mauris, tincidunt nec quam eu, sagittis feugiat tortor. Nulla non ante non tellus feugiat tempus. Vestibulum venenatis pretium aliquet. Proin non nulla vel mauris ultricies pharetra eget in ex. Nulla pellentesque vehicula nisl quis sodales. Suspendisse eu lacus a metus vulputate fringilla. In tellus mauris, faucibus sit amet semper ut, ornare nec quam. Nunc dignissim, nibh non varius pharetra, ex risus porttitor lorem, nec pulvinar purus leo a metus.";
$paragrafi = explode('.', $testo);
foreach($paragrafi as $paragrafo){
print($paragrafo . "<br>");
}
?>