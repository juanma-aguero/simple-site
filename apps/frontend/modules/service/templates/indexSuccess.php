<script type="text/javascript" >
    $(document).ready(function(){
            var menuLinks = $('.category-menu a');
            menuLinks.click(function(){
                menuLinks.removeClass('selected');
                $(this).addClass('selected');
            });
        
        $('#service-menu').makeFloat({
            x: 'current',
            y: 'current',
            speed: 'fast'
        });
    });
    
    function scrollToPosition(objectId) {
        var obj = $('#'+objectId);
        var position = obj.offset();
        self.scrollTo(position.left, position.top);
    }
    
</script>

<?php slot('content-left') ?>
<div id="service-menu" class='category-menu'>
    <?php foreach ($services as $service): ?>
        <a onclick="scrollToPosition('<?php echo $service->getId() ?>');" ><?php echo $service ?></a>
    <?php endforeach; ?>
</div>
<?php end_slot() ?>


<img src="/images/foto-servicio.png" width="515px" alt="quienes somos"/>


<div id="service-list">
    <?php foreach ($services as $service): ?>
        <div class="service">
            <span id="<?php echo $service->getId() ?>" class="service-title"><?php echo $service->getName() ?></span>
            <br/>
            <div class="service-description"  ><?php echo $service->getDescription(ESC_RAW) ?></div>
        </div>
    <?php endforeach; ?>
</div>
