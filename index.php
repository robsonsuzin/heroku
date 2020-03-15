<?php echo 'teste';?>
<iframe name="iframevideo" width="560" height="315"
        src="https://player.vimeo.com/video/397718363"
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<script>
    window.setInterval(function () {
        meuIframe = document.querySelector("iframe");
        conteudoIframe= meuIframe.contentDocument || meuIframe.contentWindow.document;
        video = conteudoIframe.querySelector(".focus-target");
        console.log(video);
    }, 1000);

</script>
