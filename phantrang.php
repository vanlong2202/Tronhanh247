<div class="row">
    <div class="col-lg-12">
        <ul class="pagination">
        <?php 
            if($current_page > 3){
                $fist_page = 1; ?>
                <li><a href="?per_page=<?php echo $item_pre_page; ?>&page=<?php echo $fist_page;?>"><<</a></li>
        <?php } ?>
        <?php
            if($current_page > 2){
                $prev_page = $current_page - 1; ?>
                <li><a href="?per_page=<?php echo $item_pre_page; ?>&page=<?php echo $prev_page;?>"><</a></li>
        <?php } ?>
        <?php for($i = 1; $i <= $totalPage; $i++){ ?>
            <?php if($i != $current_page){ ?>
                <?php if($i > $current_page - 3 && $i < $current_page + 3){ ?>
                    <li><a href="?per_page=<?php echo $item_pre_page; ?>&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                <?php } ?>
            <?php }else{ ?>
                <li><a class="is_active" href=""><?php echo $i; ?></a></li>
            <?php } ?>
        <?php } ?>
        <?php
            if($current_page < $totalPage - 1){
                $next_page = $current_page + 1; ?>
                <li><a href="?per_page=<?php echo $item_pre_page; ?>&page=<?php echo $next_page;?>">></a></li>
        <?php } ?>
        <?php 
            if($current_page < $totalPage - 3){ ?>
                <li><a href="?per_page=<?php echo $item_pre_page; ?>&page=<?php echo $totalPage;?>">>></a></li>
        <?php }?>
        <!-- <li><a class="is_active" href="?per_page=2&page=2">2</a></li>
        <li><a href="?per_page=2&page=3">3</a></li>
        <li><a href="#">>></a></li> -->
        </ul>
    </div>
</div>