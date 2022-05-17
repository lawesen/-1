<?php include THEME_PATH . '/Content/Content_action_header.php' ?>
    <input type="hidden" name="method" value="<?= $method ?? '' ?>"/>
    <input type="hidden" name="copy" value="<?= $label->xss($_GET['copy'] ?? '' ) ?>">
    <input type="hidden" name="id" value="<?= $ticket_model_number ?? ''  ?>"/>
    <input type="hidden" name="back_url" value="<?= $label->xss($_GET['back_url'] ?? '' ) ?>"/>
    <?= $label->token(); ?>
<?php include THEME_PATH . '/Content/Content_action_form.php' ?>


<script>
    $(function () {
        var closeTicket = function(val){
            var showCloseType = $('input[name="close_type[]"]').parent().parent()
            var showCloseSetting = $('input[name="close_time"]').parent()

            if(val == "1"){
                showCloseType.show();
                showCloseSetting.show();
            }else{
                showCloseType.hide();
                showCloseSetting.hide();
            }
        }

        closeTicket($('input[name="open_close"]:checked').val());

        $('input[name="open_close"]').on('click', function(){
            closeTicket($(this).val());
        })
    })
</script>

<?php if(empty($license)): ?>
<script>
    $(function(){
        $('input[name=time_out_sequence]').attr('readonly', 'readonly').popover({
            trigger: 'hover',
            content: '需求购买使用授权方解除限制'
        })
    })
</script>
<?php endif; ?>
<?php include THEME_PATH . '/Content/Content_action_footer.php' ?>