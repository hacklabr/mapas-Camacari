</section>
<footer>
    
    <div id="main-footer">
       
        <div class="row logos">
            <div class="column">
                <p class="logo-instituicao"><a href="http://camacari.ba.mapas.cultura.gov.br/"><img src="<?php $this->asset('img/logo-instituicao.png'); ?>" alt="Mapa Cultural de Camaçari/BA - Mapas Culturais"></a></p>
                <p class="social-icons">
                    <a href="#" target="_blank" aria-label="Facebook">&#xe093;</a>
                    <a href="#" target="_blank" aria-label="YouTube">&#xe0a3;</a>
                </p>
            </div>
            <div class="column">
                <p class="logo-hacklab">Desenvolvido pelo <a href="https://hacklab.com.br"><img src="<?php $this->asset('img/logo-hacklab.svg'); ?>" alt="Município de hacklab/"></a></p>
            </div>
        </div>
    </div>

</footer>
<?php $this->part('templates'); ?>
<?php $this->bodyEnd(); ?>
<iframe id="require-authentication" src="" style="display:none; position:fixed; top:0%; left:0%; width:100%; height:100%; z-index:100000"></iframe>

<?php if ($this->isEditable()): ?>
    <div id="editbox-human-crop" class="js-editbox" title="<?php \MapasCulturais\i::esc_attr_e("Recortar imagem");?>">
        <img id="human-crop-image"/>
    </div>
<?php endif; ?>

</body>
</html>
