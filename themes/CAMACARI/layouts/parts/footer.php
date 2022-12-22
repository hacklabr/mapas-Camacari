</section>
<footer>

    <div id="main-footer">

        <div class="row logos">
            <div class="column">
                <p class="logo-instituicao"><a href="http://secult.camacari.ba.gov.br/"><img src="<?php $this->asset('img/logo-instituicao.png'); ?>" alt="Secult Camaçari/BA"></a></p>
                <p class="social-icons">
                    <a href="https://www.facebook.com/SecretariaDaCulturaDeCamacari" target="_blank" aria-label="Facebook">&#xe093;</a>
                    <a href="https://www.instagram.com/secultcamacari/" target="_blank" aria-label="YouTube">&#xe09a;</a>
                    <a href="https://www.youtube.com/@Tvccultura" target="_blank" aria-label="YouTube">&#xe0a3;</a>

                </p>
            </div>
            <div class="column">
                <p class="logo-hacklab">Desenvolvido pelo <a href="https://hacklab.com.br"><img src="<?php $this->asset('img/logo-hacklab.svg'); ?>" alt="Desenvolvido hacklab/"></a></p>
            </div>
        </div>
        <?php
        if ($app->config['zammad_btn_support_enabled']) {
            $linkSipport = $app->config['zammad_link_support'];
            $textBtnSupport = $app->config['zammad_text_btn_support'];
            $this->part('support', ["linkSipport" => $linkSipport, "textBtnSupport" => $textBtnSupport]);
        }
        ?>
    </div>

</footer>
<?php $this->part('templates'); ?>
<?php $this->bodyEnd(); ?>
<iframe id="require-authentication" src="" style="display:none; position:fixed; top:0%; left:0%; width:100%; height:100%; z-index:100000"></iframe>

<?php if ($this->isEditable()) : ?>
    <div id="editbox-human-crop" class="js-editbox" title="<?php \MapasCulturais\i::esc_attr_e("Recortar imagem"); ?>">
        <img id="human-crop-image" />
    </div>
<?php endif; ?>

<?php if ($app->config['zammad_enable']) : ?>
    <script src="<?= $app->config['zammad_src_chat']; ?>"></script>
    <script>
        $(function() {
            new ZammadChat({
                background: '<?= $app->config['zammad_background_color']; ?>',
                fontSize: '14px',
                chatId: 1,
                title: '<strong>Dúvidas?</strong> Fale conosco'

            });
        });
    </script>
    <style>
        .zammad-chat {
            z-index: 9999 !important;
        }
    </style>

<?php endif ?>
</body>

</html>