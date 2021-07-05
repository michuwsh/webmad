<section id="offer">
    <div class="content">
        <h2><?php echo get_field('h2'); ?></h2>
        <div class="row">
            <div class="col-3">
                <div class="offer-item " data-animate="fadeInLeft">
                <div class="icon"<?php echo ((get_field('offer_1')['icon']) ? ' style="-webkit-mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_1')['icon']).');mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_1')['icon']).');"' : '');?>></div>
                    <h3><?php echo get_field('offer_1')['h3']; ?></h3>
                    <p><?php echo get_field('offer_1')['akapit']; ?></p>
                </div>
            </div>
            <div class="col-3">
                <div class="offer-item " data-animate="zoomIn">
                <div class="icon"<?php echo ((get_field('offer_2')['icon']) ? ' style="-webkit-mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_2')['icon']).');mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_2')['icon']).');"' : '');?>></div>
                    <h3><?php echo get_field('offer_2')['h3']; ?></h3>
                    <p><?php echo get_field('offer_2')['akapit']; ?></p>
                </div>
            </div>
            <div class="col-3">
                <div class="offer-item " data-animate="fadeInRight">
                <div class="icon"<?php echo ((get_field('offer_3')['icon']) ? ' style="-webkit-mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_3')['icon']).');mask-image: url(data:image/svg+xml;base64,'.base64_encode(get_field('offer_3')['icon']).');"' : '');?>></div>
                    <h3><?php echo get_field('offer_3')['h3']; ?></h3>
                    <p><?php echo get_field('offer_3')['akapit']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>