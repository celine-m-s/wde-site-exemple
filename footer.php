  </div> <!-- Container -->

  <footer>
    <p><button data-toggle="modal" data-target="#newsletter"><a>
  Je veux m'inscrire à la newsletter !</a>
</button></p>

  </footer>

<!-- Modal -->
<div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="newsletterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscription à la newsletter</h4>
      </div>
      <div class="modal-body">
        <?php // $widgetNL = new WYSIJA_NL_Widget(true); ?>
        <?php // echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>
      </div>
    </div>
  </div>
</div>



<!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/FlowType.JS-master/flowtype.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/global.js"></script>

<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>

</body>
</html>