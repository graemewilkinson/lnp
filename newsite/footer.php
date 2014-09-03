<footer>
    <ul class="social">
        <li><a href="https://www.facebook.com/pages/London-News-Pictures/"><img src="img/fb.svg" alt="Facebook logo" /></a></li>
        <li><a href="https://twitter.com/LondonNPictures"><img src="img/twit.svg" alt="Twitter logo" /></a></li>
        <li><a href="mailto:graeme.wilkinson@monkey.com"><img src="img/at.svg" alt="graeme.wilkinson@monkey.com" /></a></li>
        <?php
        if ($page == 'contactus'){
            print "<li><a href='tel:07782502865'><img src='img/phone.svg' alt='07782502865' /></a></li>";
        }
        ?>
    </ul>
<script>
if (!Modernizr.svg) {
    $('img[src$=".svg"]').each(function()
    {
        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
    });
}
</script>
</footer>