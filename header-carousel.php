<section>
  <div class="row">
    <div class="col-sm-3 col-md-3">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <i class="fa fa-calendar"></i> Calendar
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <?php echo do_shortcode( '[google-calendar-events id="1" type="list" max="5"]' ); ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-flash">
                </span> News</a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
            </div>
            <div class="list-group">
              <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
            </div>
            <div class="list-group">
              <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <?php the_content(); ?>
    </div>

  </div>


 </section> <!-- carousel -->
