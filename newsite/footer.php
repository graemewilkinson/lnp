<footer>
    <ul class="social">
        <li><a href="http://facebook.com"><img src="img/fb.svg" alt="Facebook logo" /></a></li>
        <li><a href="http://twitter.com"><img src="img/twit.svg" alt="Twitter logo" /></a></li>
        <li><a class="email" href="mailto:graemedotwilkinsonatmedotcom"><img src="img/at.svg" alt="Email logo" /></a></li>
        <?php
        if ($page == 'contactus'){
            print "<li><a class='phone' href='tel:zerosevenseventwofourzerotwosevensixfive'><img src='img/phone.svg' alt='phone logo'</a></li>";
        }
        ?>
        
    </ul>
<script>
  $('.email').attr('href', 'mailto:' + 'graeme' + '.' + 'wilkinson' + '@' + 'me' + '.' + 'com');
  $('.phone').attr('href', 'tel:' + '07' + '79' + '24' + '0' + '27' + '6' + '5');
</script> 
<script>
if (!Modernizr.svg) {
    $('img[src$=".svg"]').each(function()
    {
        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
    });
}
</script>
</footer>